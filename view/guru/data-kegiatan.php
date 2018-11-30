<a href="?view=input-kegiatan">
  <button type="button" class="btn btn-outline-dark">Tambah Kegiatan</button>
</a>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Nomer Kegiatan</th>
      <th>Tanggal Kegiatan</th>
      <th>Jenis Kegiatan</th>
      <th>NIP</th>
      <th>Nama Kegiatan</th>
      <th>Alamat Kegiatan</th>
      <th>Kegiatan Status</th>
      <th>Keterangan</th>
    </tr>
  </thead>
  <tbody>
  <?php
$data = $objAdmin->showKegiatanGuru();
while ($a = $data->fetch_object()) {
  ?>
    <tr>
      <td><?=$a->kegiatan_nomor; ?></td>
      <td><?=$a->kegiatan_tanggal; ?></td>
      <td><?=$a->jenis_nama; ?></td>
      <td><?=$a->kegiatan_nip; ?></td>
      <td><?=$a->kegiatan_nama; ?></td>
      <td><?=$a->kegiatan_alamat; ?></td>
      <td><?php if ($a->kegiatan_status == 1) {
        echo "Akfit";
      }
      else {
        echo "Tidak aktif";
      } ?></td>
      <td><?=$a->kegiatan_keterangan; ?></td>
    </tr>
<?php } ?>
  </tbody>
</table>
