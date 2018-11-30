
<div class="container">
<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>Admin Login</h2>
   <p>Please enter your username and password</p>
   </div>
    <form id="Login" class="" action="" method="post">

        <div class="form-group">

          <input type="text" class="form-control"  name="user" value="" placeholder="username">

        </div>

        <div class="form-group">
          <input type="password" class="form-control"  name="pass" value="" placeholder="password">

        </div>
        <div class="forgot">
        </div>
        <!-- <input type="submit" name="login" value="Login"> -->
        <button type="submit" name="login" class="btn btn-primary">Login</button>

    </form>
    </div>
</div></div>

<?php
 if (isset($_POST['login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $login =  $objAdmin->loginAdmin($user, $pass);
    if ($login) {
        echo '<script>
        alert("Login Berhasil");
        window.location="'.base_url().'";
         </script>';
    }
    else {
        echo '<script> alert("login error"); </script>';
    }
} ?>
