<?php

if (@$_GET['view'] == '' || @$_GET['view'] == 'home')
{
    include 'view/home.php';
}
elseif (@$_GET['view'] == 'home-admin')
{
    include 'view/admin/home.php';
}
elseif (@$_GET['view'] == 'register-admin') {
    include 'view/admin/register.php';
}
elseif (@$_GET['view'] == 'login-admin') {
    include 'view/admin/login.php';
}
elseif (@$_GET['view'] == 'logout-admin')
{
    $objAdmin->logout();
    echo '<script>
    window.location="?view=login-admin";
     </script>';
}
elseif (@$_GET['view'] == 'register-guru') {
    include 'view/admin/registerUser/register-guru.php';
}
elseif (@$_GET['view'] == 'data-guru')
{
    include 'view/guru/data_guru.php';
}
elseif (@$_GET['view'] == 'data-siswa')
{
    include 'view/siswa/data_siswa.php';
}
elseif (@$_GET['view'] == 'register-siswa') {
    include 'view/admin/registerUser/register-siswa.php';
}


else
{
  include 'view/404.php';

}
