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

if (isset($_GET['id'])) {
  $id_sewa = $_GET['id'];
  
  $showData = $koneksi->query("SELECT * FROM tbl_sewa WHERE id_sewa = '$id_sewa'");
  foreach($showData as $data){
   unlink("../../foto-pedagang/". $data['foto']);
   unlink("../../img-qrcode/". $data['src_qrcode']);
  } 
  
// perintah hapus data berdasarkan id yang dikirimkan
  $query = $koneksi->query("DELETE FROM tbl_sewa WHERE id_sewa = '$id_sewa'");
// cek perintah
  if ($query) {
    // pesan apabila hapus berhasil
    echo "<script>Swal.fire(
      'Terhapus!',
      'Data sewa berhasil di hapus!',
      'success' 
    ).then((result) => {
       window.location.href='../data-sewa.php'
   })</script>";
  } else {
    // pesan apabila hapus gagal
    echo "<script>alert('Data retribusi gagal dihapus'); window.location.href='../data-sewa.php'</script>";
  }
}

?>
</body>
</html>