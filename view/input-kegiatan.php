<?php if (@$_SESSION['NIS']) { ?>
<h3 class="text-muted text-center">INPUT KEGIATAN SISWA</h3>
<?php } ?>


<?php if (@$_SESSION['NIP']) { ?>
<h3 class="text-muted text-center">INPUT KEGIATAN GURU</h3>
<?php } ?>


<center>
<div class="form-input-document">
    <form class="" action="" method="POST">

      <div class="form-group">
        <input type="text" name="kegiatan_nomor" class="form-control"   placeholder="NO Kegiatan">
        <!-- <input type="text" name="kegiatan_nomor" value="" placeholder="NO Kegiatan"> <br> -->
      </div>

      <div class="form-group">
        <input type="date" class="form-control" name="kegiatan_tanggal"  >
        <!-- <input type="date" name="kegiatan_tanggal" value=""> <br> -->
      </div>

      <div class="form-group">
          <select class="form-control" id="exampleFormControlSelect1" name="kegiatan_id_jenis">
            <?php
            $data = $objAdmin->jenis();
            while ($a = $data->fetch_object()) { ?>
            <option value="<?=$a->jenis_id; ?>"><?=$a->jenis_nama; ?></option>
            <?php } ?>
          </select>
      </div>

        <?php if (@$_SESSION['NIS']) { ?>
          <div class="form-group">
            <input type="text" name="kegiatan_nis" value="<?=@$_SESSION['NIS']; ?>" class="form-control" >
            <input type="hidden" name="kegiatan_nip" value="">
          </div>
        <?php } ?>

        <?php if (@$_SESSION['NIP']) { ?>
          <div class="form-group">
            <input type="text" name="kegiatan_nip" value="<?=@$_SESSION['NIP']; ?>" class="form-control" >
            <input type="hidden" name="kegiatan_nis" value="">
          </div>
        <?php } ?>

        <div class="form-group">
          <input type="text" name="kegiatan_nama" class="form-control"   placeholder="Nama Kegiatan">
          <!-- <input type="text" name="kegiatan_nama" value="" placeholder="Nama Kegiatan"> <br> -->
        </div>

        <div class="form-group">
          <input type="text" name="kegiatan_alamat" class="form-control" placeholder="Alamat Kegiatan">
          <!-- <input type="text" name="kegiatan_alamat" value="" placeholder="Alamat Kegiatan"> <br> -->
        </div>

        <div class="form-group">
            <select class="form-control" id="exampleFormControlSelect1" name="kegiatan_status">
              <option value="1">AKTIF</option>
              <option value="0">TIDAK AKTIF</option>
            </select>
        </div>

        <div class="form-group">
          <input type="text" name="kegiatan_keterangan" class="form-control"  placeholder="Keterangan Kegiatan">
          <!-- <input type="text" name="kegiatan_keterangan" value="" placeholder="Keterangan Kegiatan"> <br> -->
        </div>

      <button type="submit" name="simpanKegiatan"  class="btn btn-secondary btn-lg btn-block">Simpan</button>
        <!-- <input type="submit" name="simpan" value="Simpan"> -->

    </form>
</div>
</center>

<?php
if (isset($_POST['simpanKegiatan'])) {
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
