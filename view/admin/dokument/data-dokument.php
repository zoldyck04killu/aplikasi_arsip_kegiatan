<a href="?view=input-dokument">
  <button type="button" class="btn btn-outline-dark">Tambah Dokument</button>
</a>

<table class="table table-border" id="table">
  <thead>
    <tr>
      <th>Tgl</th>
      <th>No. Perkara</th>
      <th>No. Gugatan</th>
      <th>Odner</th>
      <th>Jenis</th>
      <th>Status</th>
      <th>Keterangan</th>
      <?php if (@$_SESSION['user']) { ?>
      <th>Opsi</th>
      <?php } ?>
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
      <?php if (@$_SESSION['user']) { ?>
      <td>
        <a href="?view=edit-document&id=<?=$a->dokument_id; ?>">Edit</a>
        <a href="?view=hapus-document&id=<?=$a->dokument_id; ?>">Hapus</a>
      </td>
      <?php } ?>
    </tr>
<?php } ?>
  </tbody>
</table>
