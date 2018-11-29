<table class="table table-striped">
  <thead>
    <tr>
      <th>Nomer Kegiatan</th>
      <th>Tanggal Kegiatan</th>
      <th>Jenis Kegiatan</th>
      <th>NIP</th>
      <th>NIS</th>
      <th>Nama Kegiatan</th>
      <th>Alamat Kegiatan</th>
      <th>Kegiatan Status</th>
      <th>Keterangan</th>
      <th>Opsi</th>
    </tr>
  </thead>
  <tbody>
  <?php
$data = $objAdmin->showKegiatan();
while ($a = $data->fetch_object()) {
  ?>
    <tr>
      <td><?=$a->kegiatan_nomor; ?></td>
      <td><?=$a->kegiatan_tanggal; ?></td>
      <td><?=$a->jenis_nama; ?></td>
      <td><?=$a->kegiatan_nip; ?></td>
      <td><?=$a->kegiatan_nis; ?></td>
      <td><?=$a->kegiatan_nama; ?></td>
      <td><?=$a->kegiatan_alamat; ?></td>
      <td><?=$a->kegiatan_status; ?></td>
      <td><?=$a->kegiatan_keterangan; ?></td>
      <td>
        <a href="#">Edit</a>
        <a href="#">Hapus</a>
      </td>
    </tr>
<?php } ?>
  </tbody>
</table>
