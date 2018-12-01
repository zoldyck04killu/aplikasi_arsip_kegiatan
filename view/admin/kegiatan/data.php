<script type="text/javascript">
    $(document).ready( function () {
      $('#table').DataTable();
    } );
</script>

<form class="" action="" method="post">
  <select class="" name="cari_a">
    <option value="kegiatan_nis">SISWA</option>
    <option value="kegiatan_nip">GURU</option>
  </select>
  <input type="submit" name="cari" value="FILTER">
</form>

<?php
if (isset($_POST['cari'])) {
    $a = $_POST['cari_a'];
    $data = $objAdmin->showKegiatan($a);

 ?>

<table class="table table-striped text-center" id="table">
<thead>
  <tr>
    <th>Kegiatan Nomor</th>
    <th>Tanggal</th>
    <th>Jenis</th>
    <th><?php if ($a == 'kegiatan_nip') {
      echo "NIP";
    }
    else {
      echo "NIS";
    } ?></th>
    <th>Alamat Kegiatan</th>
    <th>Status</th>
    <th>Keterangan</th>
    <th>Opsi</th>
  </tr>
</thead>
<tbody>
<?php while ($b = $data->fetch_object()) { ?>
  <tr>
    <td><?=$b->kegiatan_nomor; ?></td>
    <td><?=$b->kegiatan_tanggal; ?></td>
    <td><?=$b->jenis_nama; ?></td>
    <td><?php if ($b == 'kegiatan_nis') {
        echo $b->kegiatan_nis;
    }
    else {
      echo $b->kegiatan_nip;
    }?></td>
    <td><?=$b->kegiatan_alamat; ?></td>
    <td><?php if ($b->kegiatan_status == 1) {
      echo "AKTIF";
    }
    else {
      echo "TIDAK AKTIF";
    } ?></td>
    <td><?=$b->kegiatan_keterangan; ?></td>
    <td>
      <div class="btn-group">
        <a class="btn btn-info" href="?view=edit-data-kegiatan&id=<?=$b->kegiatan_nomor; ?>">Edit</a>
        <a class="btn btn-primary" href="?view=cetak-kegiatan&id=<?=$b->kegiatan_nomor; ?>">Cetak</a>
        <a class="btn btn-danger" href="?view=hapus-data-kegiatan&id=<?=$b->kegiatan_nomor; ?>">Hapus</a>
      </div>
    </td>
  </tr>
<?php
  }
} ?>
</tbody>
 </table>
