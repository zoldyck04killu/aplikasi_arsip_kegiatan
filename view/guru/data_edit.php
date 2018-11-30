<?php
$id = $_GET['id'];
$data = $objAdmin->editGuru($id);
$a = $data->fetch_object();
 ?>

 <center>
 <div class="form-input-document">
     <form class="" action="" method="post">

       <div class="form-group">
         <input type="text" name="guru_nip" class="form-control" value="<?=$a->guru_nip; ?>" readonly>
       </div>

       <div class="form-group">
         <input type="text" name="guru_nama" class="form-control" value="<?=$a->guru_nama; ?>">
       </div>

       <div class="form-group">
         <input type="text" name="guru_pekerjaan"  class="form-control" value="<?=$a->guru_pekerjaan; ?>" >
       </div>

       <div class="form-group">
           <select class="form-control" id="exampleFormControlSelect1" name="guru_jekel">
             <option value="<?=$a->guru_jekel; ?>"><?=$a->guru_jekel; ?></option>
             <option value="Laki-Laki">Laki-Laki</option>
             <option value="Perempuan">Perempuan</option>
           </select>
       </div>

       <div class="form-group">
         <input type="text" name="guru_alamat" class="form-control" value="<?=$a->guru_alamat; ?>">
       </div>

       <div class="form-group">
         <input type="text" name="guru_telp" class="form-control" value="<?=$a->guru_telp; ?>">
       </div>

       <div class="form-group">
          <input type="text" name="guru_jabatan" class="form-control" value="<?=$a->guru_jabatan; ?>">
       </div>

       <div class="form-group">
         <input type="text" name="guru_golongan" class="form-control" value="<?=$a->guru_golongan; ?>">
       </div>

       <button type="submit" name="update"  class="btn btn-secondary btn-lg btn-block">Update</button>

     </form>
</div>
</center>
 <?php
 if (isset($_POST['update'])) {
     $nip = $_POST['guru_nip'];
     $nama = $_POST['guru_nama'];
     $pekerjaan = $_POST['guru_pekerjaan'];
     $jekel = $_POST['guru_jekel'];
     $alamat = $_POST['guru_alamat'];
     $telp = $_POST['guru_telp'];
     $jabatan = $_POST['guru_jabatan'];
     $golongan = $_POST['guru_golongan'];
         $objAdmin->updateGuru($nip, $nama, $pekerjaan, $jekel, $alamat, $telp, $jabatan, $golongan);
         echo '<script>
         alert("update Sukses");
         window.location="?view=data-guru";
          </script>';
       }


  ?>
