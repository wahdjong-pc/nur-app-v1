<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <!-- SweatAlert -->
  <link rel="stylesheet" href="sweatalert/dist/sweetalert2.min.css">
  <!-- SweetAlert -->
  <script src="sweatalert/dist/sweetalert2.all.min.js"></script>
</head>
<body>

<?php 
include 'config/config.php';
session_start();
if (empty($_POST)) {
      echo "<script>
         alert('Maaf anda harus login terlebih dahulu');document.location='index.php'
     </script>";
     }

$nik = mysqli_escape_string($koneksi, $_POST['nik']);
$pass = mysqli_escape_string($koneksi, $_POST['password']);


// cek nik terdaftar atau tidak
$cek_user = $koneksi->query("SELECT * FROM tbl_pegawai WHERE nik = '$nik'");

$user_valid = mysqli_fetch_array($cek_user);
// uji jika nik terdaftar
if ($user_valid) {
  //jika nik terdaftar
  //cek password sesuai atau tidak
  if (password_verify($pass, $user_valid['password'])) {
   //jika password sesuai
   //buat session
   session_start();
   $_SESSION['nik'] = $user_valid['nik'];
   $_SESSION['nama'] = $user_valid['nama'];
   $_SESSION['jabatan'] = $user_valid['jabatan'];
   $_SESSION['username'] = $user_valid['username'];
   $_SESSION['role'] = $user_valid['role'];

   //uji role
   if ($user_valid['role'] == "Admin Master") {
    header('location:admin-master/home.php');
   }else{
    header('location:pegawai/home.php');
   }

  }else{
   echo "<script>
    Swal.fire({
     title: 'Access Failed',
     text: 'Maaf login gagal! password salah!.',
     icon: 'error',
     confirmButtonColor: '#3085d6'
   }).then((result) => {
     if (result.isConfirmed) {
       window.location.href='index.php'
     }
   })
</script>";
  }
}else {
  echo "<script>
    Swal.fire({
     title: 'Access Failed',
     text: 'Maaf login gagal! nik tidak terdaftar...',
     icon: 'error',
     confirmButtonColor: '#3085d6'
   }).then((result) => {
     if (result.isConfirmed) {
       window.location.href='index.php'
     }
   })
</script>";
}






?>