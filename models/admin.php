<?php

/**
 *
 */
class Admin
{

  private $mysqli;

  function __construct($mysqli)
  {
    $this->mysqli = $mysqli;
  }

  public function registerAdmin($user, $pass_hash)
  {
    $db = $this->mysqli->conn;
    $db->query(" INSERT INTO admin VALUES('', '$user', '$pass_hash') ") or die ($db->error);
  }

  public function registerGuru($nip, $nama, $pekerjaan, $jekel, $alamat, $telp, $jabatan, $golongan, $pass_hash)
  {
    $db = $this->mysqli->conn;
    $user = $db->query("SELECT * FROM Guru WHERE guru_nip = '$nip' ") or die ($db->error);
    $cek = $user->num_rows;
      if ($cek > 0) {
          echo '<script>alert("USER SUDAH TERDAFTAR"); </script>';
          die;
      }
    $db->query("INSERT INTO Guru VALUES('$nip', '$nama', '$pekerjaan', '$jekel', '$alamat', '$telp', '$jabatan', '$golongan', '$pass_hash')") or die ($db->error);
  }

  public function registerSiswa($nis, $nama, $jekel, $alamat, $telpon, $kelas, $pass_hash)
  {
    $db = $this->mysqli->conn;
    $user = $db->query("SELECT * FROM Siswa WHERE siswa_nis = '$nis' ") or die ($db->error);
    $cek = $user->num_rows;
      if ($cek > 0) {
          echo '<scrip>alert("User sudah terdaftar")</scrip>';
          die;
      }
    $db->query("INSERT INTO Siswa VALUES ('$nis', '$nama', '$jekel', '$alamat', '$telpon', '$kelas', '$pass_hash')") or die ($db->error);
  }

  public function loginAdmin($user, $pass){
  $db = $this->mysqli->conn;
  $userdata = $db->query("SELECT * FROM admin WHERE username = '$user' ") or die ($db->error);
  $cek = $userdata->num_rows;
  $cek_2 = $userdata->fetch_array();
  if ($cek > 0) {
          if (password_verify($pass, $cek_2['password'])) {
              $_SESSION['user'] = $cek_2['username']; //session KTP
              return true;
          } else {
              return false; // password salah
          }
        } else {
          // code...
        }
  }

  public function showGuru(){
    $db = $this->mysqli->conn;
    $sql = "SELECT * FROM Guru";
    $query = $db->query($sql);
    return $query;
  }

  public function showSiswa(){
    $db = $this->mysqli->conn;
    $sql = "SELECT * FROM Siswa";
    $query = $db->query($sql);
    return $query;
  }

  public function logout(){
    @$_SESSION['user'] == FALSE;
    unset($_SESSION);
    session_destroy();
  }



} // end class

?>
