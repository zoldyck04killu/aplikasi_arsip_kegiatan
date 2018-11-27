<form class="" action="" method="post">

<input type="number" name="guru_nip" value="" placeholder="NIP"> <br>
<input type="text" name="guru_nama" value="" placeholder="Nama Guru"> <br>
<input type="text" name="guru_pekerjaan" value="" placeholder="Pekerjaan"> <br>
<select class="" name="guru_jekel">
    <option value="Laki-Laki">Laki-Laki</option>
    <option value="Perempuan">Perempuan</option>
</select> <br>
<input type="text" name="guru_alamat" value="" placeholder="Alamat"> <br>
<input type="number" name="guru_telp" value="" placeholder="Telpon"> <br>
<input type="text" name="guru_jabatan" value="" placeholder="Jabatan"> <br>
<input type="text" name="guru_golongan" value="" placeholder="Golongan"> <br>
<input type="password" name="guru_password" value="" placeholder="Passowrd"> <br>
<input type="password" name="guru_password2" value="" placeholder="Confirm Passowrd"> <br>
<input type="submit" name="register" value="register">
</form>

<?php
if (isset($_POST['register'])) {
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
