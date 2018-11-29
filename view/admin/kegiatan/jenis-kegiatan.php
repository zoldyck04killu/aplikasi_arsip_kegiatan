<a href="?view=input-jenis-kegiatan">tambah jenis</a> <br>
<select class="" name="">
  <?php
$data = $objAdmin->jenisKegiatan();
while ($a = $data->fetch_object()) { ?>
<option value="<?=$a->jenis_nama; ?>"><?=$a->jenis_nama; ?></option>
<?php } ?>
</select>
