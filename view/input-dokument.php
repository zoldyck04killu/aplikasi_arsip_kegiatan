<?php if (@$_SESSION['NIS']) { ?>
<h3 class="text-muted text-center">INPUT DOKUMENT SISWA</h3>
<?php } ?>


<?php if (@$_SESSION['NIP']) { ?>
<h3 class="text-muted text-center">INPUT DOKUMENT GURU</h3>
<?php } ?>



<form class="" action="" method="POST">

<!-- <input type="number" name="kegiatan_nomor" value="" placeholder="NO Kegiatan"> <br> -->
<input type="date" name="dokument_tanggal"> <br>
<input type="text" name="dokument_no_perkara" value="" placeholder="No Perkara Dokument"> <br>
<input type="text" name="dokument_no_gugatan" value="" placeholder="No Gugatan Dokument"> <br>
<input type="text" name="dokument_odner" value="" placeholder="Odner Dokument"> <br>

<select class="" name="document_id_jenis">
<?php
$data = $objAdmin->jenisDokument();
while ($a = $data->fetch_object()) { ?>
<option value="<?=$a->dokument_jenis_id; ?>"><?=$a->dokument_jenis_nama; ?></option>
<?php } ?>
</select> <br>

<select class="" name="dokument_status">
  <option value="1">AKTIF</option>
  <option value="0">TIDAK AKTIF</option>
</select> <br>
<input type="text" name="dokument_keterangan" value="" placeholder="Keterangan Dokument"> <br>
<input type="submit" name="simpan" value="Simpan">

</form>

<?php
if (isset($_POST['simpan'])) {


  // $no = $_POST['kegiatan_nomor'];
  $tgl = $_POST['dokument_tanggal'];
  $perkara = $_POST['dokument_no_perkara'];
  $gugatan = $_POST['dokument_no_gugatan'];
  $odner = $_POST['dokument_odner'];
  $jenis = $_POST['document_id_jenis'];
  $status = $_POST['dokument_status'];
  $ket = $_POST['dokument_keterangan'];


  $objAdmin->saveDocument( $tgl, $perkara, $gugatan, $odner, $jenis, $status, $ket);
  echo '<script> alert("berhasil"); </script>';

}

 ?>
