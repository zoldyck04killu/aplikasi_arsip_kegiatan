<center>
<div class="form-input-document">
    <form class="" action="" method="post">

      <div class="form-group">
        <input type="text" name="jenis_nama" class="form-control" placeholder="Masukan nama jenis dokument">
      </div>

      <button type="submit" name="simpanJenisDocument"  class="btn btn-secondary btn-lg btn-block">Simpan</button>

    </form>
</div>
</center>

<?php
if (isset($_POST['simpanJenisDocument'])) {
    $nama = $_POST['jenis_nama'];
    $objAdmin->saveJenisDokument($nama);
    echo '<script> alert("berhasil"); </script>';
}
 ?>
