<?php
$id = $_GET['id'];
$data = $objAdmin->editKegiatan($id);
$a = $data->fetch_object();
 ?>

<center>
<div class="form-input-document">
  <form class="" action="" method="POST">

  <div class="form-group">
    <input class="form-control" name="kegiatan_nomor" type="text" id="example-date-input" value="<?=$a->kegiatan_nomor; ?>" readonly>
  </div>

  <div class="form-group">
    <input type="date" name="kegiatan_tanggal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?=$a->kegiatan_tanggal; ?>">
  </div>

  <div class="form-group">
    <select class="form-control" name="kegiatan_id_jenis">
      <option value="<?=$a->kegiatan_id_jenis; ?>"><?=$a->jenis_nama; ?></option>
    </select>
  </div>

  <div class="form-group">
    <input type="text" name="kegiatan_nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?=$a->kegiatan_nama; ?>">
  </div>

  <div class="form-group">
    <input type="text" name="kegiatan_alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?=$a->kegiatan_alamat; ?>">
  </div>

  <div class="form-group">
    <select class="form-control" name="kegiatan_status">
      <option value="<?=$a->kegiatan_status; ?>"><?php if ($a->kegiatan_status == 1) {

        echo "AKTIF";
      }
      else {
        echo "TIDA KATIF";
      } ?></option>
      <option value="1">AKTIF</option>
      <option value="0">TIDAK AKTIF</option>
    </select>
  </div>

  <div class="form-group">
    <input type="text" name="kegiatan_keterangan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?=$a->kegiatan_keterangan; ?>">
  </div>

  <button type="submit" name="simpanKegiatan"  class="btn btn-secondary btn-lg btn-block">Simpan</button>
  </form>
</div>
</center>

<?php
if (isset($_POST['simpanKegiatan'])) {


  $no = $_POST['kegiatan_nomor'];
  $tgl = $_POST['kegiatan_tanggal'];
  $jenis = $_POST['kegiatan_id_jenis'];
  $nama = $_POST['kegiatan_nama'];
  $alamat = $_POST['kegiatan_alamat'];
  $status = $_POST['kegiatan_status'];
  $ket = $_POST['kegiatan_keterangan'];


  $objAdmin->updateKegiatan($no, $tgl, $jenis, $nama, $alamat, $status, $ket);
  echo '<script>
  alert("berhasil");
  window.location="?view=data-kegiatan";
  </script>';

}

 ?>
