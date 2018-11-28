<?php
$id = $_GET['id'];
$data = $objAdmin->editSiswa($id);
$a = $data->fetch_object();
 ?>

<form class="" action="" method="post">

<input type="text" name="siswa_nis" value="<?=$a->siswa_nis; ?>" readonly> <br>
<input type="password" name="siswa_password" value="" placeholder="masukan passwaord baru"> <br>
<input type="password" name="siswa_password2" value="" placeholder="confirm password"> <br>
<input type="submit" name="update" value="update">

</form>

<?php
if (isset($_POST['update'])) {
  $nis = $_POST['siswa_nis'];
  $pass = $_POST['siswa_password'];
  $pass2 = $_POST['siswa_password2'];
    if ($pass != $pass2) {
        echo '<script> alert("password tidak sesuai"); </script>';
        die;
    }
    else {
      $pass_hash = password_hash($pass, PASSWORD_DEFAULT);
      $objAdmin->resetPassSiswa($nis, $pass_hash);
      echo '<script> alert("suskes");
              window.location="?view=data-siswa";
       </script>';
    }
}
 ?>
