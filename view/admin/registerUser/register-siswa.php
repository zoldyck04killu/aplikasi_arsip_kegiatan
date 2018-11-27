<form class="" action="" method="post">

  <input type="number" name="siswa_nis" value="" placeholder="NIS"> <br>
  <input type="text" name="siswa_nama" value="" placeholder="Nama Siswa"> <br>
  <select class="" name="siswa_jekel">
    <option value="Laki-Laki">Laki-Laki</option>
    <option value="Perempuan">Perempuan</option>
  </select>
  <input type="text" name="siswa_alamat" value="" placeholder="Alamat"> <br>
  <input type="number" name="siswa_telp" value="" placeholder="Telpon"> <br>
  <input type="number" name="siswa_kelas" value="" placeholder="Kelas"> <br>
  <input type="password" name="siswa_password" value="" placeholder="Passowrd"> <br>
  <input type="password" name="siswa_password2" value="" placeholder="Confirm Passowrd"> <br>
  <input type="submit" name="register" value="register">

</form>

<?php
if (isset($_POST['register'])) {
    $nis = $_POST['siswa_nis'];
    $nama = $_POST['siswa_nama'];
    $jekel = $_POST['siswa_jekel'];
    $alamat = $_POST['siswa_alamat'];
    $telpon = $_POST['siswa_telp'];
    $kelas = $_POST['siswa_kelas'];
    $pass = $_POST['siswa_password'];
    $pass2 = $_POST['siswa_password2'];
      if ($pass != $pass2) {
          echo '<script>alert("Password Tidak Cocok!!!"); </script>';
          die;
      }
      else {
        $pass_hash = password_hash($pass, PASSWORD_DEFAULT);
        $objAdmin->registerSiswa($nis, $nama, $jekel, $alamat, $telpon, $kelas, $pass_hash);
        echo '<script>alert("Registerasi Berhasil!!!") </script>';
      }
}
 ?>
