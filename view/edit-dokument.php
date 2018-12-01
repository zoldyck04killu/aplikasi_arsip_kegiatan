<?php
$id = $_GET['id'];
$data = $objAdmin->editDocument($id);
$a = $data->fetch_object();
 ?>

 <center>
 <div class="form-input-document">
   <form class="" action="" method="POST">

   <div class="form-group">
     <input type="hidden" name="id" value="<?=$a->dokument_id; ?>">
     <input class="form-control" name="dokument_tanggal" type="date" id="example-date-input" value="<?=$a->dokument_tgl; ?>">
   </div>

   <div class="form-group">
     <input type="text" name="dokument_no_perkara" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?=$a->dokument_no_perkara; ?>">
   </div>

   <div class="form-group">
     <input type="text" name="dokument_no_gugatan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?=$a->dokument_no_gugatan; ?>">
   </div>

   <div class="form-group">
     <input type="text" name="dokument_odner" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?=$a->dokument_odner; ?>">
   </div>

   <div class="form-group">
       <select class="form-control" id="exampleFormControlSelect1" name="document_id_jenis">
         <option value="<?=$a->dokument_jenis_id; ?>"><?=$a->dokument_jenis_nama; ?></option>
         <?php
         $data = $objAdmin->jenisDokument();
         while ($b = $data->fetch_object()) { ?>
         <option value="<?=$b->dokument_jenis_id; ?>"><?=$b->dokument_jenis_nama; ?></option>
         <?php } ?>
       </select>
   </div>

   <div class="form-group">
       <select class="form-control" id="exampleFormControlSelect1" name="dokument_status">
         <option value="<?=$a->dokument_status; ?>"><?php if ($a->dokument_status == 1) {
           echo "AKTIF";
         }
         else {
           echo "TIDAK AKTIF";
         } ?></option>
         <option value="1">AKTIF</option>
         <option value="0">TIDAK AKTIF</option>
       </select>
   </div>

   <div class="form-group">
     <input type="text" name="dokument_keterangan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?=$a->dokument_ket; ?>">
   </div>

   <button type="submit" name="simpanKegiatan"  class="btn btn-secondary btn-lg btn-block">Simpan</button>
   </form>
 </div>
 </center>

 <?php
 if (isset($_POST['simpanKegiatan'])) {
   $id = $_POST['id'];
   $tgl = $_POST['dokument_tanggal'];
   $perkara = $_POST['dokument_no_perkara'];
   $gugatan = $_POST['dokument_no_gugatan'];
   $odner = $_POST['dokument_odner'];
   $jenis = $_POST['document_id_jenis'];
   $status = $_POST['dokument_status'];
   $ket = $_POST['dokument_keterangan'];


   $objAdmin->updateDocument( $id, $tgl, $perkara, $gugatan, $odner, $jenis, $status, $ket);
   echo '<script>
   alert("berhasil");
   window.location="?view=data-dokument";
   </script>';

 }

  ?>
