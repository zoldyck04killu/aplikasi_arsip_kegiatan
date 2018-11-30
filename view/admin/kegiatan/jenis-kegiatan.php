<center>
<div class="form-input-document">

    <a href="?view=input-jenis-kegiatan">
      <button type="button" class="btn btn-outline-dark">tambah jenis</button>
    </a>
    <table class="table table-border">
      <thead>
        <tr>
          <th>Nama Jenis Kegiatan</th>
          <th>Opsi</th>

        </tr>
      </thead>
      <tbody>
      <?php
      $data = $objAdmin->jenisKegiatan();
      while ($a = $data->fetch_object()) { ?>
        <tr>
          <td><?=$a->jenis_nama; ?></td>
          <td>
            <a href="?view=jenisKegiatan_edit&id=<?=$a->jenis_id; ?>">Edit</a>
            <a href="?view=jenisKegiatan_hapus&id=<?=$a->jenis_id; ?>">Hapus</a>
          </td>
        </tr>
    <?php } ?>
      </tbody>
    </table>
</div>
</center>
