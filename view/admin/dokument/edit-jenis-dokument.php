<?php
$id = $_GET['id'];
$data = $objAdmin->edit_jenisDocument($id);
$a = $data->fetch_object();
 ?>

<center>
<div class="form-input-document">
    <form class="" action="" method="post">

      <div class="form-group">
        <input type="text" name="jenis_nama" value="<?= $a->dokument_jenis_nama ?>" class="form-control" placeholder="Masukan nama jenis dokument">
      </div>

      <button type="submit" name="editJenisDocument"  class="btn btn-secondary btn-lg btn-block">Edit</button>

    </form>
</div>
</center>

<?php
if (isset($_POST['editJenisDocument'])) {
    $nama = $_POST['jenis_nama'];
    $objAdmin->update_jenisDocument($id, $nama);
    echo '<script> alert("berhasil"); </script>';
}
 ?>
