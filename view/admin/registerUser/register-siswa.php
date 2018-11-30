<center>
<div class="form-input-document">
    <form class="" action="" method="post">

      <div class="form-group">
        <input type="text" name="siswa_nis" class="form-control" placeholder="NIS">
      </div>

      <div class="form-group">
        <input type="text" name="siswa_nama" class="form-control" placeholder="Nama Siswa">
      </div>

      <div class="form-group" >
          <select class="form-control" id="exampleFormControlSelect1" name="siswa_jekel">
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
      </div>

      <div class="form-group">
        <input type="text" name="siswa_alamat" class="form-control" placeholder="Alamat">
      </div>

      <div class="form-group">
        <input type="text" name="siswa_telp" class="form-control" placeholder="Telpon">
      </div>

      <div class="form-group">
        <input type="text" name="siswa_kelas" class="form-control" placeholder="Kelas">
      </div>

      <div class="form-group">
        <input type="password" name="siswa_password" class="form-control" placeholder="Password"> <br>
      </div>

      <div class="form-group">
        <input type="password" name="siswa_password2" class="form-control" placeholder="Confirm Passowrd">
      </div>

      <button type="submit" name="registerSiswa"  class="btn btn-secondary btn-lg btn-block">Register</button>

    </form>
</div>
</center>

<?php
if (isset($_POST['registerSiswa'])) {
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
