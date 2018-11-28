<form class="" action="" method="post">

  <input type="text" name="jenis_nama" value="" placeholder="Masukan nama jenis dokument"> <br>
  <input type="submit" name="simpan" value="Simpan">

</form>

<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['jenis_nama'];
    $objAdmin->saveJenisDokument($nama);
    echo '<script> alert("berhasil"); </script>';
}
 ?>
