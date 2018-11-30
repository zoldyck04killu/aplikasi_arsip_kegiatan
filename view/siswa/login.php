<div class="container">
<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>Siswa Login</h2>
   <p>Please enter your NIS and password</p>
   </div>
    <form id="Login" class="" action="" method="post">

        <div class="form-group">
          <input type="text" class="form-control"  name="user" value="" placeholder="NIS">
        </div>

        <div class="form-group">
          <input type="password" class="form-control"  name="pass"  placeholder="password">
        </div>
        <div class="forgot">
        </div>
        <!-- <input type="submit" name="login" value="Login"> -->
        <button type="submit" name="loginSiswa" class="btn btn-primary">Login</button>

    </form>
    </div>
  </div>
</div>


<?php
 if (isset($_POST['loginSiswa'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $login =  $objAdmin->loginSiswa($user, $pass);
    if ($login) {
        echo '<script>
        alert("Login Berhasil");
        window.location="'.base_url().'?view=siswa-home";
         </script>';
    }
    else {
        echo '<script> alert("login error"); </script>';
    }
} ?>
