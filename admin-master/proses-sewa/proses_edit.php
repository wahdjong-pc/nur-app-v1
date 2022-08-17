<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <!-- SweatAlert -->
  <link rel="stylesheet" href="../../sweatalert/dist/sweetalert2.min.css">
  <!-- SweetAlert -->
<script src="../../sweatalert/dist/sweetalert2.all.min.js"></script>
</head>
<body>

<?php
include '../../config/config.php';
session_start();
if (empty($_SESSION['nik']) or empty($_SESSION['role'])) {
      echo "<script>
         alert('Maaf anda harus login terlebih dahulu');document.location='../../index.php'
     </script>";
     }

if (isset($_POST['submit-edit-sewa'])) {
  $id_sewa = $_POST['idSewa'];

  $nik              = $_POST['nik'];
  $nama             = $_POST['nama'];
  $tmp_lahir        = $_POST['tmpLahir'];
  $tgl_lahir        = $_POST['tglLahir'];
  $jenis_kelamin    = $_POST['jenisKelamin'];
  $alamat           = $_POST['alamat'];
  $no_hp            = $_POST['noHp'];
  $pasar            = $_POST['pasar'];
  $jenis_pasar      = $_POST['jenisPasar'];

  $blok             = $_POST['blok'];
  $nomor            = $_POST['nomor'];
  $data_blok_nomor  = array($blok,$nomor);
  $blok_nomor       = implode(".",$data_blok_nomor);

  $harga_sewa       = $_POST['hargaSewa'];
  $pembayaran_bulan = $_POST['pembayaranBulan'];
  $pembayaran_tahun = $_POST['pembayaranTahun'];
  $jenis_dagangan   = $_POST['jenisDagangan'];
  $dari_shp         = $_POST['dariShp'];
  $sampai_shp       = $_POST['sampaiShp'];
  $tgl_tempo        = $_POST['tglTempo'];

  $author_nik              = $_SESSION['nik'];
  $author_nama             = $_SESSION['nama'];


$query = $koneksi->query("UPDATE tbl_sewa SET 
nik              = '$nik', 
nama             = '$nama', 
tmpt_lahir       = '$tmp_lahir', 
tgl_lahir        = '$tgl_lahir',
jenis_kelamin    = '$jenis_kelamin',
alamat           = '$alamat',
no_hp            = '$no_hp',
pasar            = '$pasar',
jenis_pasar      = '$jenis_pasar',
blok_nomor       = '$blok_nomor',
harga_sewa       = '$harga_sewa',
pembayaran_bulan = '$pembayaran_bulan',
pembayaran_tahun = '$pembayaran_tahun',
jenis_dagangan   = '$jenis_dagangan',
dari_shp         = '$dari_shp',
sampai_shp       = '$sampai_shp',
tgl_tempo        = '$tgl_tempo',
author_nik       = '$author_nik',
author_nama      = '$author_nama' WHERE nik = '$nik'");

if ($query) {
    // pesan jika data berubah
    echo "<script>
    Swal.fire({
     title: 'Berhasil',
     text: 'Data sewa berhasil diubah!',
     icon: 'success',
     confirmButtonColor: '#3085d6'
   }).then((result) => {
     if (result.isConfirmed) {
       window.location.href='../data-sewa.php'
     }
   })
</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data sewa gagal diubah'); window.location.href='../data-sewa.php'</script>";
  }
}
?>
</body>
</html>