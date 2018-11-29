<?php if (@$_SESSION['NIS']) { ?>
<h3 class="text-muted text-center">INPUT KEGIATAN SISWA</h3>
<?php } ?>


<?php if (@$_SESSION['NIP']) { ?>
<h3 class="text-muted text-center">INPUT KEGIATAN GURU</h3>
<?php } ?>



<form class="" action="" method="POST">

<input type="number" name="kegiatan_nomor" value="" placeholder="NO Kegiatan"> <br>
<input type="date" name="kegiatan_tanggal" value=""> <br>
<select class="" name="kegiatan_id_jenis">
<?php
$data = $objAdmin->jenis();
while ($a = $data->fetch_object()) { ?>
<option value="<?=$a->jenis_id; ?>"><?=$a->jenis_nama; ?></option>
<?php } ?>
</select> <br>
<?php if (@$_SESSION['NIS']) { ?>
  <input type="hidden" name="kegiatan_nip" value="">
  <input type="text" name="kegiatan_nis" value="<?=@$_SESSION['NIS']; ?>" readonly> <br>
<?php } ?>
<?php if (@$_SESSION['NIP']) { ?>
  <input type="hidden" name="kegiatan_nis" value="">
  <input type="text" name="kegiatan_nip" value="<?=@$_SESSION['NIP']; ?>" readonly> <br>
<?php } ?>
<input type="text" name="kegiatan_nama" value="" placeholder="Nama Kegiatan"> <br>
<input type="text" name="kegiatan_alamat" value="" placeholder="Alamat Kegiatan"> <br>
<select class="" name="kegiatan_status">
  <option value="1">AKTIF</option>
  <option value="0">TIDAK AKTIF</option>
</select> <br>
<input type="text" name="kegiatan_keterangan" value="" placeholder="Keterangan Kegiatan"> <br>
<input type="submit" name="simpan" value="Simpan">

</form>

<?php
if (isset($_POST['simpan'])) {
    if (@$_SESSION['NIS']) {
        $nip = null;
    }
    elseif (@$_SESSION['NIP']) {
        $nis = null;
    }
    else {
      echo "error";
    }

  $no = $_POST['kegiatan_nomor'];
  $tgl = $_POST['kegiatan_tanggal'];
  $keg = $_POST['kegiatan_id_jenis'];
  $nis = $_POST['kegiatan_nis'];
  $nip = $_POST['kegiatan_nip'];
  $status = $_POST['kegiatan_status'];
  $keg_nama = $_POST['kegiatan_nama'];
  $alamat = $_POST['kegiatan_alamat'];
  $ket = $_POST['kegiatan_keterangan'];
    $objAdmin->saveKegiatan($no, $tgl, $keg, $nip, $keg_nama, $alamat, $nis, $status, $ket);
  echo '<script> alert("berhasil"); </script>';

}

 ?>
