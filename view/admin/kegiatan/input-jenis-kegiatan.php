<center>
<div class="form-input-document">
    <form class="" action="" method="post">

      <div class="form-group">
        <input type="text" name="jenis_nama" class="form-control" placeholder="Masukan nama jenis kegiatan">
      </div>

      <div class="form-group">
        <input type="text" name="jenis_keterangan" class="form-control" placeholder="Masukan Keterangan">
      </div>

      <button type="submit" name="simpanJenisKegiatan"  class="btn btn-secondary btn-lg btn-block">Simpan</button>
    </form>
</div>
</center>

<?php
if (isset($_POST['simpanJenisKegiatan'])) {
    $nama = $_POST['jenis_nama'];
    $ket = $_POST['jenis_keterangan'];
    $objAdmin->saveJenis($nama, $ket);
    echo '<script> alert("berhasil"); </script>';
}
 ?>
