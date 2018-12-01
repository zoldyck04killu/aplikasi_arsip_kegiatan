

<div class="">

</div>
<?php
$id = $_GET['id'];
$data = $objAdmin->editKegiatan($id);
$a = $data->fetch_array();


$content = '
<style>

#tgl{
  position: relative;
  left: 40%;
}


</style>
';

$content .= '
<page>
  <div style="padding:4mm; border:1px solid;" align="center">
    <span style="font-size:25px;"><b> Surat Kegiatan MTS </b></span>
  </div>
</page>
<br>
';
$content .= '<div id="z" style="font-size:15px; font-family: arial">';
$content .= 'No Kegiatan : ' .$a['kegiatan_nomor'];

$content .= '
<div id="tgl">'.'Banjarmasin, ' .date("d-m-Y").'</div>';

$content .='
<br><br>';
$content .= '</div>';

$content .= '<div id="z" style="font-size:15px; font-family: arial">';
$content .= '
Kepada Yth <br>
Kepala Sekolah MTS <br>
Di Tempat <br> <br> <br><br><br>
Dengan hormat,
<br><br>';
$content .= '</div>';

$content .= '<table>';
$content .= '<tr><td>Kegiatan Sekolah yaitu</td><td>:</td><td>'.$a['kegiatan_nama'].'</td></tr>';
$content .= '<tr><td>Tanggal Kegiatan</td><td> : </td><td>' .$a['kegiatan_tanggal']. '</td></tr>';
$content .= '<tr><td>Jenis Kegiatan</td><td> : </td><td>' .$a['jenis_nama']. '</td></tr>';

if ($a['kegiatan_nis'] == 0) {
$content .= '<tr><td>NIP Guru</td> <td>:</td><td>' .$a['kegiatan_nip'].'</td></tr>';
}
else {
$content .= '<tr><td>NIS Siswa</td> <td>:</td><td>' .$a['kegiatan_nis'].'</td></tr>';
}

if ($a['kegiatan_status'] == 1) {
$content .= '<tr><td>Status Kegiatan</td><td> : </td> <td>AKTIF </td></tr>';
}
else {
$content .= '<tr><td>Status Kegiatan</td><td> : </td> <td>TIDAK AKTIF </td></tr>';
}

$content .= '<tr><td>Keterangan Kegiatan</td> <td>:</td><td>' .$a['kegiatan_keterangan'].'</td></tr>';
$content .= '</table>';

$content .= '<br><br><br><br><div style="margin-left:500px; text-align:center;">Mengetahui Kepala Sekolah <br><br><br><br><br>';
$content .= 'Banjarmasin '.date("d-m-Y");
$content .= '</div>';

ob_clean();
require './vendor/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;
$html2pdf = new Html2Pdf('P','A4','en');
$html2pdf->writeHTML($content);
$html2pdf->output('Kegiatan.pdf');
?>
