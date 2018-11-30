
<div class="container">
<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>Guru Login</h2>
   <p>Please enter your NIP and password</p>
   </div>
    <form id="Login" class="" action="" method="post">

        <div class="form-group">
          <input type="text" class="form-control" name="user" value="" placeholder="NIP">
        </div>

        <div class="form-group">
          <input type="password" class="form-control"  name="pass" value="" placeholder="password">
        </div>
        <div class="forgot">
        </div>
        <!-- <input type="submit" name="login" value="Login"> -->
        <button type="submit" name="loginGuru" class="btn btn-primary">Login</button>

    </form>
    </div>
  </div>
</div>


<?php
 if (isset($_POST['loginGuru'])) {
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
