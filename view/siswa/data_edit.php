<?php
$id = $_GET['id'];
$data = $objAdmin->editSiswa($id);
$a = $data->fetch_object();
 ?>


 <form class="" action="" method="post">

   <input type="number" name="siswa_nis" value="<?=$a->siswa_nis; ?>" readonly > <br>
   <input type="text" name="siswa_nama" value="<?=$a->siswa_nama; ?>"> <br>
   <select class="" name="siswa_jekel">
     <option value="<?=$a->siswa_jekel; ?>"><?=$a->siswa_jekel; ?></option>
     <option value="Laki-Laki">Laki-Laki</option>
     <option value="Perempuan">Perempuan</option>
   </select>
   <input type="text" name="siswa_alamat" value="<?=$a->siswa_alamat; ?>"> <br>
   <input type="number" name="siswa_telp" value="<?=$a->siswa_telp; ?>"> <br>
   <input type="number" name="siswa_kelas" value="<?=$a->siswa_kelas; ?>"> <br>
   <input type="submit" name="update" value="Update">

 </form>

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
