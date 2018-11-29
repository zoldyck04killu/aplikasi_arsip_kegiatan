<form class="" action="" method="post">

  <input type="text" name="jenis_nama" value="" placeholder="Masukan nama jenis kegiatan"> <br>
  <input type="text" name="jenis_keterangan" value="" placeholder="Masukan Keterangan"> <br>
  <input type="submit" name="simpan" value="Simpan">

</form>

<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['jenis_nama'];
    $ket = $_POST['jenis_keterangan'];
    $objAdmin->saveJenis($nama, $ket);
    echo '<script> alert("berhasil"); </script>';
}
 ?>
