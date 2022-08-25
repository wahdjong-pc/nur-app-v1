<?php
$koneksi = new mysqli("localhost","root","","nur-app");
require_once 'bootstrap.php';



$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('format-shp/form-shp.docx');

$qrcode_id      = $_GET['qrcodeid'];
$query          = $koneksi->query("SELECT * FROM tbl_sewa WHERE qrcode_id = '$qrcode_id'");
$data_pedagang  = mysqli_fetch_assoc($query);

$nama      = $data_pedagang['nama'];
$tempat    = $data_pedagang['tmpt_lahir'];
$tgl_lahir = $data_pedagang['tgl_lahir'];
$alamat = $data_pedagang['alamat'];


$alamatrow1 = substr($alamat,0,57);
$alamatrow2 = substr($alamat,58,200);
$no_hp = $data_pedagang['no_hp'];
$nik = $data_pedagang['nik'];
$lokasi_pasar = $data_pedagang['pasar'];
$blok_nomor = $data_pedagang['blok_nomor'];
$jenis_dagangan = $data_pedagang['jenis_dagangan'];

function tgl_indo($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
	
	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun
 
	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}


$dari_shp = $data_pedagang['dari_shp'];
$sampai_shp = $data_pedagang['sampai_shp'];
$tgl_tempo = $data_pedagang['tgl_tempo'];

$templateProcessor->setValues([
    'nama' => $nama,
    'tempat' => $tempat,
    'tgl-lahir' => tgl_indo($tgl_lahir),
    'alamat-row1' => $alamatrow1,
    'alamat-row2' => $alamatrow2,
    'no-hp' => $no_hp,
    'nik' => $nik,
    'pasar' => $lokasi_pasar,
    'blok-nomor' => $blok_nomor,
    'jenis-dagangan' => $jenis_dagangan,
    'dari-shp' => tgl_indo($dari_shp),
    'sampai-shp' => tgl_indo($sampai_shp),
    'tgl-tempo' => $tgl_tempo,


]);


header('Content-Disposition: attachment;filename="shp.docx"');
$templateProcessor->saveAs('php://output');
