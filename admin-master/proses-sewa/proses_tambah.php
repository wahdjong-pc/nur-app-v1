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
include '../../phpqrcode/qrlib.php';
session_start();
if (empty($_SESSION['nik']) or empty($_SESSION['role'])) {
      echo "<script>
         alert('Maaf anda harus login terlebih dahulu');document.location='../../index.php'
     </script>";
     }
 

if (isset($_POST['submit-sewa'])) {

  //create folder
  $qrcode_id        = $_POST['qrcode_id'];   
  $qrcode_data      = "https://nur-app.000webhostapp.com/admin-master/e-sapa.php?qrcodeid=".$qrcode_id;
  $tempdir          = "../../img-qrcode/";
                      if (!file_exists($tempdir))
                      mkdir($tmpdir, 0755);
  $file_name        = date("Ymd").rand().".png";
  $file_path        = $tempdir.$file_name;

  QRcode::png($qrcode_data, $file_path, "H", 6, 0, 0);

  
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

  $cekData = $koneksi->query("SELECT * FROM tbl_sewa WHERE pasar = '$pasar' AND jenis_pasar = '$jenis_pasar' AND blok_nomor = '$blok_nomor'");

  $resultCek = mysqli_num_rows($cekData);

  if($resultCek > 0){
    // pesan jika data tersimpan
    echo "<script>
    Swal.fire({
        title: 'Berhasil',
        text: 'Maaf data pasar ". $pasar ." blok nomor ". $blok_nomor ." sudah ada yang menyewa!',
        icon: 'error',
        confirmButtonColor: '#3085d6'
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href='../data-sewa.php'
        }
      })
    </script>";
  }else{

$query = $koneksi->query("INSERT INTO tbl_sewa(qrcode_id,nik,nama,tmpt_lahir,tgl_lahir,jenis_kelamin,alamat,no_hp,pasar,jenis_pasar,blok_nomor,harga_sewa,pembayaran_bulan,pembayaran_tahun,jenis_dagangan,dari_shp,sampai_shp,tgl_tempo,src_qrcode,link_qrcode,author_nik,author_nama) VALUES('$qrcode_id','$nik', '$nama', '$tmp_lahir', '$tgl_lahir', '$jenis_kelamin', '$alamat', '$no_hp', '$pasar', '$jenis_pasar', '$blok_nomor', '$harga_sewa', '$pembayaran_bulan', '$pembayaran_tahun', '$jenis_dagangan', '$dari_shp', '$sampai_shp', '$tgl_tempo', '$file_name', '$qrcode_data', '$author_nik', '$author_nama')");

  // $query = $koneksi->query("INSERT INTO tbl_test(nama,pasar,harga) VALUES('$nama', '$pasar', '$harga_sewa')");


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