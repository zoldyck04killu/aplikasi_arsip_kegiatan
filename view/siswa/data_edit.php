<?php
$id = $_GET['id'];
$data = $objAdmin->editSiswa($id);
$a = $data->fetch_object();
 ?>


<center>
<div class="form-input-document">
 <form class="" action="" method="post">

   <div class="form-group">
     <input type="text" name="siswa_nis" class="form-control" value="<?=$a->siswa_nis; ?>" readonly >
   </div>

   <div class="form-group">
     <input type="text" name="siswa_nama" class="form-control" value="<?=$a->siswa_nama; ?>">
   </div>

   <div class="form-group">
       <select class="form-control" id="exampleFormControlSelect1" name="siswa_jekel">
         <option value="<?=$a->siswa_jekel; ?>"><?=$a->siswa_jekel; ?></option>
         <option value="Laki-Laki">Laki-Laki</option>
         <option value="Perempuan">Perempuan</option>
       </select>
   </div>

   <div class="form-group">
     <input type="text" name="siswa_alamat" class="form-control" value="<?=$a->siswa_alamat; ?>">
   </div>

   <div class="form-group">
     <input type="text" name="siswa_telp" class="form-control" value="<?=$a->siswa_telp; ?>">
   </div>

   <div class="form-group">
     <input type="text" name="siswa_kelas" class="form-control" value="<?=$a->siswa_kelas; ?>">
   </div>

   <input type="submit" name="update" value="Update">

 </form>
</div>
</center>
 <?php
 if (isset($_POST['update'])) {
     $nis = $_POST['siswa_nis'];
     $nama = $_POST['siswa_nama'];
     $jekel = $_POST['siswa_jekel'];
     $alamat = $_POST['siswa_alamat'];
     $telpon = $_POST['siswa_telp'];
     $kelas = $_POST['siswa_kelas'];


         $objAdmin->updateSiswa($nis, $nama, $jekel, $alamat, $telpon, $kelas);
         echo '<script>
         alert("update Berhasil!!!");
         window.location="?view=data-siswa";
          </script>';

 }
  ?>
