<a href="?view=input-jenis-dokument">tambah jenis dokument</a> <br>
<select class="" name="">
  <?php
  $data = $objAdmin->jenisDokument();
  while ($a = $data->fetch_object()) { ?>
    <option value="<?=$a->dokument_jenis_nama; ?>"><?=$a->dokument_jenis_nama; ?></option>
  <?php } ?>
</select>
