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
elseif (@$_GET['view'] == 'guru-edit') {
    include 'view/guru/data_edit.php';
}
elseif (@$_GET['view'] == 'guru-reset') {
    include 'view/guru/reset_password.php';
}
elseif (@$_GET['view'] == 'siswa-edit') {
    include 'view/siswa/data_edit.php';
}
elseif (@$_GET['view'] == 'siswa-reset') {
    include 'view/siswa/reset_password.php';
}
elseif (@$_GET['view'] == 'guru-hapus') {
    $id = $_GET['id'];
    $objAdmin->deleteGuru($id);
    echo '<script> window.location="?view=data-guru"; </script>';
}
elseif (@$_GET['view'] == 'siswa-hapus') {
    $id = $_GET['id'];
    $objAdmin->deleteSiswa($id);
    echo '<script> window.location="?view=data-guru"; </script>';
}




else
{
  include 'view/404.php';

}
