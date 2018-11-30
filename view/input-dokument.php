<?php if (@$_SESSION['NIS']) { ?>
<h3 class="text-muted text-center">INPUT DOKUMENT SISWA</h3>
<?php } ?>


<?php if (@$_SESSION['NIP']) { ?>
<h3 class="text-muted text-center">INPUT DOKUMENT GURU</h3>
<?php } ?>

<center>
<div class="form-input-document">
  <form class="" action="" method="POST">

  <div class="form-group">
    <input class="form-control" name="dokument_tanggal" type="date" id="example-date-input">
  </div>

  <div class="form-group">
    <input type="text" name="dokument_no_perkara" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Perkara Dokument">
  </div>

  <div class="form-group">
    <input type="text" name="dokument_no_gugatan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Gugatan Dokument">
  </div>

  <div class="form-group">
    <input type="text" name="dokument_odner" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Odner Dokument">
  </div>

  <div class="form-group">
      <select class="form-control" id="exampleFormControlSelect1" name="document_id_jenis">
        <?php
        $data = $objAdmin->jenisDokument();
        while ($a = $data->fetch_object()) { ?>
        <option value="<?=$a->dokument_jenis_id; ?>"><?=$a->dokument_jenis_nama; ?></option>
        <?php } ?>
      </select>
  </div>

  <div class="form-group">
      <select class="form-control" id="exampleFormControlSelect1" name="dokument_status">
        <option value="1">AKTIF</option>
        <option value="0">TIDAK AKTIF</option>
      </select>
  </div>

  <div class="form-group">
    <input type="text" name="dokumdokument_keteranganent_odner" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Keterangan Dokument">
  </div>

  <button type="submit" name="simpanKegiatan"  class="btn btn-secondary btn-lg btn-block">Simpan</button>
  </form>
</div>
</center>

<?php
if (isset($_POST['simpanKegiatan'])) {


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
