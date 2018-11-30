<center>
<div class="form-input-document">
    <form class="" action="" method="post">

      <div class="form-group">
        <input type="text" name="guru_nip" class="form-control" placeholder="NIP">
      </div>

      <div class="form-group">
        <input type="text" name="guru_nama" class="form-control" placeholder="Nama Guru">
      </div>

      <div class="form-group">
        <input type="text" name="guru_pekerjaan" class="form-control" placeholder="Pekerjaan">
      </div>

      <div class="form-group">
          <select class="form-control" id="exampleFormControlSelect1" name="guru_jekel">
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
      </div>

      <div class="form-group">
        <input type="text" name="guru_alamat" class="form-control" placeholder="Alamat">
      </div>

      <div class="form-group">
        <input type="text" name="guru_telp" class="form-control" placeholder="Telpon">
      </div>

      <div class="form-group">
        <input type="text" name="guru_jabatan" class="form-control" placeholder="Jabatan">
      </div>

      <div class="form-group">
        <input type="text" name="guru_golongan" class="form-control" placeholder="Golongan">
      </div>

      <div class="form-group">
        <input type="password" name="guru_password" class="form-control" placeholder="Passowrd">
      </div>

      <div class="form-group">
        <input type="password" name="guru_password2" class="form-control" placeholder="Confirm Passowrd">
      </div>

      <button type="submit" name="registerGuru"  class="btn btn-secondary btn-lg btn-block">Register</button>

    </form>
</div>
</center>

<?php
if (isset($_POST['registerGuru'])) {
    $nip = $_POST['guru_nip'];
    $nama = $_POST['guru_nama'];
    $pekerjaan = $_POST['guru_pekerjaan'];
    $jekel = $_POST['guru_jekel'];
    $alamat = $_POST['guru_alamat'];
    $telp = $_POST['guru_telp'];
    $jabatan = $_POST['guru_jabatan'];
    $golongan = $_POST['guru_golongan'];
    $pass = $_POST['guru_password'];
    $pass2 = $_POST['guru_password2'];
      if ($pass != $pass2) {
          echo '<script> alert("Passowrd tidak sesuai"); </script>';
          die;
      }else {
        $pass_hash = password_hash($pass, PASSWORD_DEFAULT);
        $objAdmin->registerGuru($nip, $nama, $pekerjaan, $jekel, $alamat, $telp, $jabatan, $golongan, $pass_hash);
        echo '<script> alert("Register Sukses"); </script>';
      }

}
 ?>
