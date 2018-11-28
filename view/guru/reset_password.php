<?php
$id = $_GET['id'];
$data = $objAdmin->editGuru($id);
$a = $data->fetch_object();
 ?>

<form class="" action="" method="post">

<input type="text" name="guru_nip" value="<?=$a->guru_nip; ?>" readonly> <br>
<input type="password" name="guru_password" value="" placeholder="masukan password baru"> <br>
<input type="password" name="guru_password2" value="" placeholder="COnfirm password"> <br>
<input type="submit" name="update" value="update">

</form>

<?php
if (isset($_POST['update'])) {
    $nip = $_POST['guru_nip'];
    $pass = $_POST['guru_password'];
    $pass2 = $_POST['guru_password2'];
      if ($pass != $pass2) {
          echo '<script> alert("password tidak cocok"); </script>';
          die;
      }
      else {
        $pass_hash = password_hash($pass, PASSWORD_DEFAULT);
        $objAdmin->resetPassGuru($nip, $pass_hash);
        echo '<script>
          alert("berhasil");
          window.location="?view=data-guru";
         </script>';
      }
}

 ?>
