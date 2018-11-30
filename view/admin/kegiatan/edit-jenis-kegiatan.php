<?php
$id = $_GET['id'];
$data = $objAdmin->edit_jenisKegiatan($id);
$a = $data->fetch_object();
 ?>

<center>
<div class="form-input-document">
    <form class="" action="" method="post">
      <input type="hidden" name="id" value="<?= $a->jenis_id; ?>">
      <div class="form-group">
        <input type="text" value="<?=$a->jenis_nama; ?>" name="jenis_nama" class="form-control" placeholder="Masukan nama jenis kegiatan">
      </div>

      <div class="form-group">
        <input type="text" name="jenis_keterangan" value="<?=$a->jenis_keterangan; ?>" class="form-control" placeholder="Masukan Keterangan">
      </div>

      <button type="submit" name="editJenisKegiatan"  class="btn btn-secondary btn-lg btn-block">Edit</button>
    </form>
</div>
</center>

<?php
if (isset($_POST['editJenisKegiatan'])) {
    $id = $_POST['id'];
    $nama = $_POST['jenis_nama'];
    $ket = $_POST['jenis_keterangan'];
    $objAdmin->update_jenisKegiatan($id, $nama, $ket);
    echo '<script> alert("berhasil"); </script>';
}
 ?>
