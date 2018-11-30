

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
$content .= 'No Kegiatan :' .$a['kegiatan_nomor'];

$content .= '
<div id="tgl">'.'Banjarmasin' .date("Y-m-d").'</div>';

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

$content .= '<div id="z" style="font-size:15px; padding: 15px; font-family: arial">';
$content .= 'Kegiatan Sekolah yaitu :'                .$a['kegiatan_nama']. '<br><br>';
$content .= 'Tanggal Kegiatan :' .$a['kegiatan_tanggal']. '<br><br>';
$content .= 'Jenis Kegiatan :' .$a['jenis_nama']. '<br><br>';

if ($a['kegiatan_nis'] == 0) {
$content .= 'NIP Guru :' .$a['kegiatan_nip'].'<br><br>';
}
else {
$content .= 'NIS Siswa :' .$a['kegiatan_nis'].'<br><br>';
}

if ($a['kegiatan_status'] == 1) {
$content .= 'Status Kegiatan : AKTIF <br><br>';
}
else {
$content .= 'Status Kegiatan : TIDAK AKTIF <br><br>';
}

$content .= 'Keterangan Kegiatan :' .$a['kegiatan_keterangan'].'<br><br><br><br><br><br><br><br>';
$content .= 'Mengetahui Kepala Sekolah <br><br><br><br>';
$content .= 'Banjarmasin '.date("Y-m-d");
$content .= '</div>';

ob_clean();
require './vendor/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;
$html2pdf = new Html2Pdf('P','A4','en');
$html2pdf->writeHTML($content);
$html2pdf->output('a.pdf');
?>
