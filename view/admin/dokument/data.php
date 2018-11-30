
<center>
<div class="form-input-document">

    <a href="?view=input-jenis-dokument">
      <button type="button" class="btn btn-outline-dark">tambah jenis dokument</button>
    </a>
    <table class="table table-border">
      <thead>
        <tr>
          <th>Nama Jenis Dokument</th>
        </tr>
      </thead>
      <tbody>
      <?php
      $data = $objAdmin->jenisDokument();
      while ($a = $data->fetch_object()) { ?>
        <tr>
          <td><?=$a->dokument_jenis_nama; ?></td>
          <td>
            <a href="<?=$a->dokument_jenis_id; ?>">Edit</a>
            <a href="<?=$a->dokument_jenis_id; ?>">Hapus</a>
          </td>
        </tr>
    <?php } ?>
      </tbody>
    </table>
</div>
</center>
