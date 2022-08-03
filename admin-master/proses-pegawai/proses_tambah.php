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

if (isset($_POST['submit'])) {
  $nik        = $_POST['nik'];
  $nama       = $_POST['nama'];
  $jabatan    = $_POST['jabatan'];
  $username   = $_POST['username'];
  $password   = $_POST['password'];
  $role       = $_POST['role'];

  

  $pass_hash = password_hash($password, PASSWORD_DEFAULT);

  $query = $koneksi->query("INSERT INTO tbl_pegawai(nik,nama,jabatan,username,password,role) VALUES('$nik', '$nama', '$jabatan', '$username', '$pass_hash', '$role')");


if ($query) {
    // pesan jika data tersimpan
    echo "<script>
    Swal.fire({
     title: 'Berhasil',
     text: 'Data pegawai berhasil ditambah!',
     icon: 'success',
     confirmButtonColor: '#3085d6'
   }).then((result) => {
     if (result.isConfirmed) {
       window.location.href='../data-pegawai.php'
     }
   })
</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data pegawai gagal ditambahkan'); window.location.href='../data-pegawai.php'</script>";
  }
}

?>

</body>
</html>