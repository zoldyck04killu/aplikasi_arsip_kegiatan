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
elseif (@$_GET['view'] == 'login-guru') {
    include 'view/guru/login.php';
}
elseif (@$_GET['view'] == 'guru-home')
{
    include 'view/guru/guru_home.php';
}
elseif (@$_GET['view'] == 'register-guru') {
    include 'view/admin/registerUser/register-guru.php';
}
elseif (@$_GET['view'] == 'data-guru')
{
    include 'view/guru/data_guru.php';
}
elseif (@$_GET['view'] == 'login-siswa') {
    include 'view/siswa/login.php';
}
elseif (@$_GET['view'] == 'siswa-home')
{
    include 'view/siswa/siswa_home.php';
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
elseif (@$_GET['view'] == 'input-kegiatan') {
    include 'view/input-kegiatan.php';
}
elseif (@$_GET['view'] == 'input-dokument') {
    include 'view/input-dokument.php';
}
elseif (@$_GET['view'] == 'input-jenis-kegiatan') {
    include 'view/admin/kegiatan/input-jenis-kegiatan.php';
}
elseif (@$_GET['view'] == 'jenisKegiatan_edit') {
    include 'view/admin/kegiatan/edit-jenis-kegiatan.php';
}
elseif (@$_GET['view'] == 'jenisKegiatan_hapus') {
    $id = $_GET['id'];
    $objAdmin->deleteJenisKegiatan($id);
    echo '<script> window.location="?view=jenis-kegiatan"; </script>';
}
elseif (@$_GET['view'] == 'jenisDokument_hapus') {
    $id = $_GET['id'];
    $objAdmin->deleteJenisDocument($id);
    echo '<script> window.location="?view=jenis-dokument"; </script>';
}
elseif (@$_GET['view'] == 'input-jenis-dokument') {
    include 'view/admin/dokument/input-jenis-dokument.php';
}
elseif (@$_GET['view'] == 'jenisDokument_edit') {
    include 'view/admin/dokument/edit-jenis-dokument.php';
}
elseif (@$_GET['view'] == 'data-kegiatan') {
    include 'view/admin/kegiatan/data.php';
}
elseif (@$_GET['view'] == 'kegiatan-guru') {
    include 'view/guru/data-kegiatan.php';
}
elseif (@$_GET['view'] == 'kegiatan-siswa') {
    include 'view/siswa/data-kegiatan.php';
}
elseif (@$_GET['view'] == 'jenis-kegiatan') {
    include 'view/admin/kegiatan/jenis-kegiatan.php';
}
elseif (@$_GET['view'] == 'jenis-dokument') {
    include 'view/admin/dokument/data.php';
}
elseif (@$_GET['view'] == 'data-dokument') {
    include 'view/admin/dokument/data-dokument.php';
}
elseif (@$_GET['view'] == 'cetak-kegiatan') {
    include 'view/admin/kegiatan/cetak.php';
}
elseif (@$_GET['view'] == 'edit-document') {
    include 'view/edit-dokument.php';
}
elseif (@$_GET['view'] == 'laporan-dokument') {
    include 'view/admin/dokument/laporan-dokumen.php';
}
elseif (@$_GET['view'] == 'hapus-document') {
    $id = $_GET['id'];
    $objAdmin->hapusDocument($id);
    echo '<script>
    alert("berhasil");
    window.location="?view=data-dokument";
    </script>';
}
elseif (@$_GET['view'] == 'edit-data-kegiatan') {
    include 'view/admin/kegiatan/edit-kegiatan.php';
}
elseif (@$_GET['view'] == 'hapus-data-kegiatan') {
    $id = $_GET['id'];
    $objAdmin->hapusKegiatan($id);
    echo '<script>
    alert("berhasil");
    window.location="?view=data-kegiatan";
    </script>';
}



else
{
  include 'view/404.php';

}
