<a href="?view=input-dokument">Tambah</a>
<table class="table table-border">
  <thead>
    <tr>
      <th>Tgl</th>
      <th>No. Perkara</th>
      <th>No. Gugatan</th>
      <th>Odner</th>
      <th>Jenis</th>
      <th>Status</th>
      <th>Keterangan</th>
      <th>Opsi</th>
    </tr>
  </thead>
  <tbody>
  <?php
$data = $objAdmin->ShowDokument();
while ($a = $data->fetch_object()) {
?>
    <tr>
      <td><?=$a->dokument_tgl; ?></td>
      <td><?=$a->dokument_no_perkara; ?></td>
      <td><?=$a->dokument_no_gugatan; ?></td>
      <td><?=$a->dokument_odner; ?></td>
      <td><?=$a->dokument_jenis_nama; ?></td>
      <td><?php if ($a->dokument_status == 1) {
        echo "Aktif";
      }
      else {
        echo "Tidak Aktif";
      } ?></td>
      <td><?=$a->dokument_ket;?></td>
      <td>
        <a href="#">Edit</a>
        <a href="#">Hapus</a>
      </td>
    </tr>
<?php } ?>
  </tbody>
</table>
