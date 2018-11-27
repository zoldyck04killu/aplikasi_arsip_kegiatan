<form class="" action="" method="post">
<input type="text" name="username" value="">
<input type="text" name="password" value="">
<input type="submit" name="save" value="save">
</form>

<?php
if (isset($_POST['save'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $pass_hash = password_hash($pass, PASSWORD_DEFAULT);
    $objAdmin->registerAdmin($user, $pass_hash);
}

 ?>
