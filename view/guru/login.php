<form class="" action="" method="post">

<input type="text" name="user" value="" placeholder="NIP"> <br>
<input type="password" name="pass" value="" placeholder="password"> <br>
<input type="submit" name="login" value="Login">

</form>

<?php
 if (isset($_POST['login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $login =  $objAdmin->loginGuru($user, $pass);
    if ($login) {
        echo '<script>
        alert("Login Berhasil");
        window.location="'.base_url().'?view=guru-home";
        </script>';
    }
    else {
        echo '<script> alert("login error"); </script>';
    }
} ?>
