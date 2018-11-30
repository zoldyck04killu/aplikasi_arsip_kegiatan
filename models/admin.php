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

  public function loginSiswa($user, $pass){
  $db = $this->mysqli->conn;
  $userdata = $db->query("SELECT * FROM Siswa WHERE siswa_nis = '$user' ") or die ($db->error);
  $cek = $userdata->num_rows;
  $cek_2 = $userdata->fetch_array();
  if ($cek > 0) {
          if (password_verify($pass, $cek_2['siswa_password'])) {
              $_SESSION['NIS'] = $cek_2['siswa_nis']; //session KTP
              return true;
          } else {
              return false; // password salah
          }
        } else {
          // code...
        }
  }

  public function loginGuru($user, $pass){
  $db = $this->mysqli->conn;
  $userdata = $db->query("SELECT * FROM Guru WHERE guru_nip = '$user' ") or die ($db->error);
  $cek = $userdata->num_rows;
  $cek_2 = $userdata->fetch_array();
  if ($cek > 0) {
          if (password_verify($pass, $cek_2['guru_password'])) {
              $_SESSION['NIP'] = $cek_2['guru_nip']; //session KTP
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

  public function editGuru($id)
  {
    $db = $this->mysqli->conn;
    $query = $db->query("SELECT * FROM Guru WHERE guru_nip = '$id' ") or die ($db->error);
    return $query;
  }

  public function updateGuru($nip, $nama, $pekerjaan, $jekel, $alamat, $telp, $jabatan, $golongan)
  {
    $db = $this->mysqli->conn;
    $db->query("UPDATE Guru SET guru_nama = '$nama', guru_pekerjaan = '$pekerjaan', guru_jekel = '$jekel', guru_alamat = '$alamat', guru_telp = '$telp', guru_jabatan = '$jabatan', guru_golongan = '$golongan' WHERE guru_nip = '$nip' ") or die ($db->error);
  }

  public function resetPassGuru($nip, $pass_hash)
  {
    $db = $this->mysqli->conn;
    $db->query("UPDATE Guru SET guru_password = '$pass_hash' WHERE guru_nip = '$nip' ") or die ($db->error);
  }

  public function deleteGuru($id)
  {
    $db = $this->mysqli->conn;
    $db->query("DELETE FROM Guru WHERE guru_nip = '$id' ") or die ($db->error);
  }

  public function editSiswa($id)
  {
    $db = $this->mysqli->conn;
    $query = $db->query("SELECT * FROM Siswa WHERE siswa_nis = '$id' ") or die ($db->error);
    return $query;
  }

  public function updateSiswa($nis, $nama, $jekel, $alamat, $telpon, $kelas)
  {
    $db = $this->mysqli->conn;
    $db->query("UPDATE Siswa SET siswa_nama = '$nama', siswa_jekel = '$jekel', siswa_alamat = '$alamat', siswa_telp = '$telpon', siswa_kelas = '$kelas' ") or die ($db->error);
  }

  public function deleteSiswa($id)
  {
    $db = $this->mysqli->conn;
    $db->query("DELETE FROM Siswa WHERE siswa_nis = '$id' ") or die ($db->error);
  }

  public function resetPassSiswa($nis, $pass_hash)
  {
    $db = $this->mysqli->conn;
    $db->query("UPDATE Siswa SET siswa_password = '$pass_hash' WHERE siswa_nis = '$nis' ") or die ($db->error);
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

  public function jenis()
  {
    $db = $this->mysqli->conn;
    $query = $db->query("SELECT * FROM Jenis ") or die ($db->error);
    return $query;
  }

  public function jenisDokument()
  {
    $db = $this->mysqli->conn;
    $query = $db->query("SELECT * FROM Dokument_jenis ") or die ($db->error);
    return $query;
  }

  public function saveKegiatan($no, $tgl, $keg, $nip, $keg_nama, $alamat, $nis, $status, $ket)
  {
    $db = $this->mysqli->conn;
    $db->query("INSERT INTO Kegiatan VALUES ('$no', '$tgl', '$keg', '$nip', '$keg_nama', '$alamat', '$nis', '$status', '$ket')") or die ($db->error);
  }

  public function saveDocument($tgl, $perkara, $gugatan, $odner, $jenis, $status, $ket)
  {
    $db = $this->mysqli->conn;
    // die($tgl);
    $db->query("INSERT INTO Document (dokument_tgl, dokument_no_perkara, dokument_no_gugatan, dokument_odner, dokument_id_jenis, dokument_status, dokument_ket)
    VALUES ('$tgl', '$perkara', '$gugatan', '$odner', '$jenis', '$status', '$ket')") or die ($db->error);
  }

  public function saveJenis($nama, $ket)
  {
    $db = $this->mysqli->conn;
    $db->query("INSERT INTO Jenis VALUES ('', '$nama', '$ket')") or die ($db->error);
  }


  public function saveJenisDokument($nama)
  {
    $db = $this->mysqli->conn;
    $db->query("INSERT INTO Dokument_jenis (dokument_jenis_nama) VALUES ('$nama')") or die ($db->error);
  }


  public function showKegiatan($a)
  {
    $db = $this->mysqli->conn;
    $query = $db->query("SELECT Jenis.jenis_id, Jenis.jenis_nama, Kegiatan.kegiatan_nomor, Kegiatan.kegiatan_tanggal, Kegiatan.kegiatan_id_jenis, Kegiatan.kegiatan_nip, Kegiatan.kegiatan_nama, Kegiatan.kegiatan_alamat, Kegiatan.kegiatan_nis, Kegiatan.kegiatan_status, Kegiatan.kegiatan_keterangan
      FROM Jenis
      INNER JOIN Kegiatan
      ON Jenis.jenis_id = Kegiatan.kegiatan_id_jenis
      WHERE $a  ") or die ($db->error);
    return $query;
  }

  public function editKegiatan($id)
  {
    $db = $this->mysqli->conn;
    $query = $db->query("SELECT Jenis.jenis_id, Jenis.jenis_nama, Kegiatan.kegiatan_nomor, Kegiatan.kegiatan_tanggal, Kegiatan.kegiatan_id_jenis, Kegiatan.kegiatan_nip, Kegiatan.kegiatan_nama, Kegiatan.kegiatan_alamat, Kegiatan.kegiatan_nis, Kegiatan.kegiatan_status, Kegiatan.kegiatan_keterangan
      FROM Jenis
      INNER JOIN Kegiatan
      ON Jenis.jenis_id = Kegiatan.kegiatan_id_jenis
      WHERE kegiatan_nomor = '$id'  ") or die ($db->error);
    return $query;
  }


  public function showKegiatanGuru()
  {
    $db = $this->mysqli->conn;
    $query = $db->query("SELECT Jenis.jenis_id, Jenis.jenis_nama, Kegiatan.kegiatan_nomor, Kegiatan.kegiatan_tanggal, Kegiatan.kegiatan_id_jenis, Kegiatan.kegiatan_nip, Kegiatan.kegiatan_nama, Kegiatan.kegiatan_alamat, Kegiatan.kegiatan_nis, Kegiatan.kegiatan_status, Kegiatan.kegiatan_keterangan
      FROM Jenis
      INNER JOIN Kegiatan
      ON Jenis.jenis_id = Kegiatan.kegiatan_id_jenis
      WHERE kegiatan_nip  ") or die ($db->error);
    return $query;
  }

  public function showKegiatanSiswa()
  {
    $db = $this->mysqli->conn;
    $query = $db->query("SELECT Jenis.jenis_id, Jenis.jenis_nama, Kegiatan.kegiatan_nomor, Kegiatan.kegiatan_tanggal, Kegiatan.kegiatan_id_jenis, Kegiatan.kegiatan_nip, Kegiatan.kegiatan_nama, Kegiatan.kegiatan_alamat, Kegiatan.kegiatan_nis, Kegiatan.kegiatan_status, Kegiatan.kegiatan_keterangan
      FROM Jenis
      INNER JOIN Kegiatan
      ON Jenis.jenis_id = Kegiatan.kegiatan_id_jenis
      WHERE kegiatan_nis  ") or die ($db->error);
    return $query;
  }

  public function jenisKegiatan()
  {
    $db = $this->mysqli->conn;
    $query = $db->query("SELECT * FROM Jenis ");
    return $query;
  }

  public function edit_jenisKegiatan($id)
  {
    $db = $this->mysqli->conn;
    $query = $db->query("SELECT * FROM Jenis WHERE jenis_id = '$id' ") or die ($db->error);
    return $query;
  }

  public function update_jenisKegiatan($id, $nama, $ket)
  {
    $db = $this->mysqli->conn;
    $db->query("UPDATE Jenis SET jenis_nama = '$nama', jenis_keterangan = '$ket' WHERE jenis_id = '$id' ") or die ($db->error);
  }

  public function deleteJenisKegiatan($id)
  {
    $db = $this->mysqli->conn;
    $db->query("DELETE FROM Jenis WHERE jenis_id = '$id' ") or die ($db->error);
  }

  public function edit_jenisDocument($id)
  {
    $db = $this->mysqli->conn;
    $query = $db->query("SELECT * FROM Dokument_jenis WHERE dokument_jenis_id = '$id' ") or die ($db->error);
    return $query;
  }

  public function update_jenisDocument($id, $nama)
  {
    $db = $this->mysqli->conn;
    $db->query("UPDATE Dokument_jenis SET dokument_jenis_nama = '$nama' WHERE dokument_jenis_id = '$id' ") or die ($db->error);
  }

  public function deleteJenisDocument($id)
  {
    $db = $this->mysqli->conn;
    $db->query("DELETE FROM Dokument_jenis WHERE dokument_jenis_id = '$id' ") or die ($db->error);
  }


  public function ShowDokument()
  {
    $db = $this->mysqli->conn;
    $query = $db->query("SELECT Dokument_jenis.dokument_jenis_id, Dokument_jenis.dokument_jenis_nama, Document.dokument_id, Document.dokument_tgl, Document.dokument_no_perkara, Document.dokument_no_gugatan, Document.dokument_odner, Document.dokument_id_jenis, Document.dokument_status, Document.dokument_ket
      FROM Dokument_jenis
      INNER JOIN Document
      ON Dokument_jenis.dokument_jenis_id = Document.dokument_id_jenis
    ") or die ($db->errir);
    return $query;
  }


} // end class

?>
