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

if (isset($_POST['submit-sewa-lanjutan'])) {
  $id_sewa          = $_POST['idSewa'];
  $nik              = $_POST['nik'];
  $nama             = $_POST['nama'];
  $tmp_lahir        = $_POST['tmpLahir'];
  $tgl_lahir        = $_POST['tglLahir'];
  $alamat           = $_POST['alamat'];
  $no_hp            = $_POST['noHp'];
  $pasar            = $_POST['pasar'];
  $jenis_pasar      = $_POST['jenisPasar'];
  $blok_nomor       = $_POST['blokNomor'];
  $harga_sewa       = $_POST['hargaSewa'];
  $pembayaran_bulan = $_POST['pembayaranBulan'];
  $jenis_dagangan   = $_POST['jenisDagangan'];
  $dari_shp         = $_POST['dariShp'];
  $sampai_shp       = $_POST['sampaiShp'];
  $tgl_tempo        = $_POST['tglTempo'];

  $author_nik              = $_SESSION['nik'];
  $author_nama             = $_SESSION['nama'];

  $cekData = $koneksi->query("SELECT * FROM tbl_sewa WHERE id_sewa = '$id_sewa' AND blok_nomor = '$blok_nomor' AND pembayaran_bulan = '$pembayaran_bulan'");

  $resultCek = mysqli_num_rows($cekData);


  if($resultCek > 0){
    // pesan jika data tersimpan
    echo "<script>
    Swal.fire({
        title: 'Berhasil',
        text: 'Maaf data pembayaran sewa bulan ". $pembayaran_bulan ." sudah dibayar!',
        icon: 'error',
        confirmButtonColor: '#3085d6'
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href='../data-sewa.php'
        }
      })
    </script>";
  }else{

  $query = $koneksi->query("INSERT INTO tbl_sewa(nik,nama,tmpt_lahir,tgl_lahir,alamat,no_hp,pasar,jenis_pasar,blok_nomor,harga_sewa,pembayaran_bulan,jenis_dagangan,dari_shp,sampai_shp,tgl_tempo,author_nik,author_nama) VALUES('$nik', '$nama', '$tmp_lahir', '$tgl_lahir', '$alamat', '$no_hp', '$pasar', '$jenis_pasar', '$blok_nomor', '$harga_sewa', '$pembayaran_bulan', '$jenis_dagangan', '$dari_shp', '$sampai_shp', '$tgl_tempo', '$author_nik', '$author_nama')");




if ($query) {
    // pesan jika data tersimpan
    echo "<script>
    Swal.fire({
     title: 'Berhasil',
     text: 'Data sewa berhasil ditambah!',
     icon: 'success',
     confirmButtonColor: '#3085d6'
   }).then((result) => {
     if (result.isConfirmed) {
       window.location.href='../data-sewa.php'
     }
   })
</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data sewa gagal ditambahkan'); window.location.href='../data-sewa.php'</script>";
  }
}
}

?>

</body>
</html>