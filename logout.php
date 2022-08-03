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
session_start();
if (empty($_SESSION['nik']) or empty($_SESSION['role'])) {
      echo "<script>
         alert('Maaf anda harus login terlebih dahulu');document.location='index.php'
     </script>";
     }

unset($_SESSION['nik']);
unset($_SESSION['nama']);
unset($_SESSION['jabatan']);
unset($_SESSION['role']);

session_destroy();
echo "<script>
    Swal.fire({
     title: 'Berhasil ',
     text: 'Anda telah logout!',
     icon: 'success',
     confirmButtonColor: '#3085d6'
   }).then((result) => {
     if (result.isConfirmed) {
       window.location.href='index.php'
     }
   })
</script>";






?>