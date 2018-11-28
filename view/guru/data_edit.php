<?php
$id = $_GET['id'];
$data = $objAdmin->editGuru($id);
$a = $data->fetch_object();
 ?>

 <form class="" action="" method="post">

 <input type="number" name="guru_nip" value="<?=$a->guru_nip; ?>" readonly> <br>
 <input type="text" name="guru_nama" value="<?=$a->guru_nama; ?>"> <br>
 <input type="text" name="guru_pekerjaan" value="<?=$a->guru_pekerjaan; ?>" > <br>
 <select class="" name="guru_jekel">
     <option value="<?=$a->guru_jekel; ?>"><?=$a->guru_jekel; ?></option>
     <option value="Laki-Laki">Laki-Laki</option>
     <option value="Perempuan">Perempuan</option>
 </select> <br>
 <input type="text" name="guru_alamat" value="<?=$a->guru_alamat; ?>"> <br>
 <input type="number" name="guru_telp" value="<?=$a->guru_telp; ?>"> <br>
 <input type="text" name="guru_jabatan" value="<?=$a->guru_jabatan; ?>"> <br>
 <input type="text" name="guru_golongan" value="<?=$a->guru_golongan; ?>"> <br>
 <input type="submit" name="update" value="Update">

 </form>

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
