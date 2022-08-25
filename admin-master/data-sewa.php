<?php 
include '../config/config.php';
session_start();
if (empty($_SESSION['nik']) or empty($_SESSION['role'])) {
      echo "<script>
         alert('Maaf anda harus login terlebih dahulu');document.location='../index.php'
     </script>";
     }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Sewa Pasar</title>

  <!-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> -->

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">

  <!-- SweatAlert -->
  <link rel="stylesheet" href="../sweatalert/dist/sweetalert2.min.css">

  <script type="text/javascript">

    function showDataSewa(qrCodeId, srcQrcode, linkQrcode, nik, nama, tmpLahir, tglLahir, jenisKelamin, alamat, noHp, pasar, jenisPasar, blokNomor, hargaSewa, pembayaranBulan, jenisDagangan, dariShp, sampaiShp, tglTempo, foto)  {
      let qrcodeId                = qrCodeId;
      let srcqrcode               = srcQrcode;
      let linkqrcode              = linkQrcode;
      let nikPenyewa              = nik;
      let namaPenyewa             = nama;
      let tempatLahirPenyewa      = tmpLahir;
      let tglLahirPenyewa         = tglLahir;
      let jenisKelaminPenyewa     = jenisKelamin
      let alamatPenyewa           = alamat;
      let noHpPenyewa             = noHp;
      let pasarPenyewa            = pasar;
      let jenisPasarPenyewa       = jenisPasar;
      let blokNomorPenyewa        = blokNomor;
      let hargaSewaPenyewa        = hargaSewa;
      let pembayaranBulanPenyewa  = pembayaranBulan;
      let jenisDagangPenyewa      = jenisDagangan;
      let dariShpPenyewa          = dariShp;
      let sampaiShpPenyewa        = sampaiShp;
      let tglTempoPenyewa         = tglTempo;  
      let fotoPenyewa             = foto;  

      document.getElementById("qrCodeId").value                 = qrcodeId;
      document.getElementById("srcQrCode").value                = srcqrcode;
      document.getElementById("linkQrCode").value               = linkqrcode;
      document.getElementById("nikPenyewa").value               = nikPenyewa;
      document.getElementById("namaPenyewa").value              = namaPenyewa;
      document.getElementById("tmpLahirPenyewa").value          = tempatLahirPenyewa;
      document.getElementById("tglLahirPenyewa").value          = tglLahirPenyewa;

      if (jenisKelaminPenyewa == 1) {
        document.getElementById("jenisKelaminPenyewa").value      = "Laki - Laki";
      }else{
        document.getElementById("jenisKelaminPenyewa").value      = "Perempuan";
      }
      
      document.getElementById("alamatPenyewa").value            = alamatPenyewa;
      document.getElementById("noHpPenyewa").value              = noHpPenyewa;
      document.getElementById("pasarPenyewa").value             = pasarPenyewa;
      document.getElementById("jenisPasarPenyewa").value        = jenisPasarPenyewa;
      document.getElementById("blokNomorPenyewa").value         = blokNomorPenyewa;
      document.getElementById("hargaSewaPenyewa").value         = hargaSewaPenyewa;
      document.getElementById("pembayaranBulanPenyewa").value   = pembayaranBulanPenyewa;
      document.getElementById("jenisDaganganPenyewa").value     = jenisDagangPenyewa;
      document.getElementById("dariShpPenyewa").value           = dariShpPenyewa;
      document.getElementById("sampaiShpPenyewa").value         = sampaiShpPenyewa;
      document.getElementById("fileFotoPenyewa").value          = fotoPenyewa;

    }

   
  </script>
</head>
<body class="hold-transition sidebar-mini layout-navbar-fixed layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="../logout.php" role="button">
          Logout
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="data-user.html" class="brand-link">
      <span class="brand-text font-weight-light">APP Version 1.0.0</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a class="d-block"><b><?= $_SESSION['nik']; ?></b></a>
          <a class="d-block"><b><?= $_SESSION['nama']; ?></b></a>
          <a class="d-block"><b><?= $_SESSION['jabatan']; ?></b></a>
          <a class="d-block"><?= $_SESSION['role']; ?></a>
        </div>
      </div>

      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="home.php" class="nav-link">
                  <p>Home</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="data-pegawai.php" class="nav-link">
                  <p>Data Pegawai</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="data-retribusi.php" class="nav-link">
                  <p>Data Retribusi</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
                <p> Database
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="data-sewa.php" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Sewa</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="data-sewa.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Denah</p>
                    </a>
                </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data <b>Sewa Pasar</b></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-md-12">
          <?php if(empty($_GET)) { ?>
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Tambah data sewa</h3>
              </div>
              <?php 
              // mengambil id qrcode dengan id paling besar
              $queryQrCode = $koneksi->query("SELECT max(qrcode_id) as qrcodeId FROM tbl_sewa");

              $data_qrcode = mysqli_fetch_array($queryQrCode);
              $id_qrcode = $data_qrcode['qrcodeId'];
              
              // mengambil angka dari id qrcode terbesar, menggunakan fungsi substr
              // dan diubah ke integer dengan (int)
              $urutan = (int) substr($id_qrcode, 6, 6);
              
              // bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
              $urutan++;
              
              // membentuk id qrcode baru
              // perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
              // misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
              // angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
              
              $huruf = "T-";
              
              $id_qrcode = $huruf . sprintf("%06s", $urutan);
              
              
              ?>

              <form action="proses-sewa/proses_tambah.php" enctype="multipart/form-data" id="formDataSewa" method="post">
              <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                        <label>QRCODE ID :</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                            </div>
                            <input type="text" class="form-control" id="qrcodeId" name="qrcode_id" value="<?= $id_qrcode; ?>" readonly>
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <div class="form-group">
                        <label>NIK :</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                            </div>
                            <input type="number" class="form-control" id="nik" name="nik">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <div class="form-group">
                        <label>NAMA :</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                            </div>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                    
                    <div class="form-group">
                        <label>TEMPAT LAHIR :</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                            </div>
                            <input type="text" class="form-control" id="tmpLahir" name="tmpLahir">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <div class="form-group">
                        <label>TANGGAL LAHIR:</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                            </div>
                            <input type="date" class="form-control" id="tglLahir" name="tglLahir">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <div class="form-group">
                        <label>JENIS KELAMIN:</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                            </div>
                            <select class="custom-select form-control-border" id="jenisKelamin" name="jenisKelamin" >
                            <option value="" hidden>Pilih Jenis Kelamin</option>
                            <option value="1">Laki - Laki</option>
                            <option value="2">Perempuan</option>
                            </select>
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    

                    <div class="form-group">
                        <label>ALAMAT :</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                            </div>
                            <textarea class="form-control" rows="3" id="alamat" name="alamat"></textarea>
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <div class="form-group">
                        <label>NO HP :</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                            </div>
                            <input type="number" class="form-control" id="noHp" name="noHp">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    </div>

                    <div class="col-md-6">
                    <div class="form-group">  
                        <label>PASAR :</label>

                        <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                        </div>
                            <select class="custom-select form-control-border" id="pasar" name="pasar" onchange="pilihPasar()">
                            <option value="" hidden>Pilih Pasar</option>
                            <option value="KOBA">KOBA</option>
                            <option value="NAMANG">NAMANG</option>
                            <option value="SUNGAI SELAN">SUNGAI SELAN</option>
                            <option value="SIMPANG KATIS">SIMPANG KATIS</option>
                            <option value="AIR MESU">AIR MESU</option>
                            <option value="KAYU BESI">KAYU BESI</option>
                            </select>
                        </div>
                    <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <div class="form-group">  
                        <label>JENIS PASAR :</label>

                        <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                        </div>
                            <select class="custom-select form-control-border" id="jenisPasar" name="jenisPasar" onchange="pilihJenisPasar()">
                            <option value="" hidden>Pilih Jenis Pasar</option>
                            </select>
                        </div>
                    <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <div class="form-group">  
                        <label>BLOK - NOMOR:</label>
                        <div class="row">
                          <div class="col-md-4">
                            <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                            </div>

                              <select class="custom-select form-control-border" id="blok" name="blok" onchange="pilihBlok()">
                              </select>
                            </div>
                            <!-- /.input group -->
                          </div>
-
                          <div class="col-md-6">
                            <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                            </div>
                              <select class="custom-select form-control-border" id="nomor" name="nomor">
                              </select>
                            </div>
                            <!-- /.input group -->
                          </div>
                        </div>
                    </div>
                    <!-- /.form group -->

                    <div class="form-group">
                      <label>HARGA SEWA / BULAN :</label>

                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Rp.</span>
                        </div>
                        <input type="number" class="form-control" id="hargaSewa" name="hargaSewa">
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <div class="form-group">
                      <label>PEMBAYARAN BULAN - TAHUN:</label>
                      <div class="row">
                        <div class="col-md-6">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                          </div>

                          <select class="custom-select form-control-border" id="pembayaranBulan" name="pembayaranBulan">
                              <option value="" hidden>Pilih Bulan</option>
                              <option value="Januari">Januari</option>
                              <option value="Februari">Februari</option>
                              <option value="Maret">Maret</option>
                              <option value="April">April</option>
                              <option value="Mei">Mei</option>
                              <option value="Juni">Juni</option>
                              <option value="Juli">Juli</option>
                              <option value="Agustus">Agustus</option>
                              <option value="September">September</option>
                              <option value="Oktober">Oktober</option>
                              <option value="November">November</option>
                              <option value="Desember">Desember</option>
                          </select>
                        </div>
                        <!-- /.input group -->
                        </div>
                        <div class="col-md-6">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                          </div>

                          <input type="text" class="form-control" id="pembayaranTahun" name="pembayaranTahun" value="<?= date("Y");?>" readonly>
                          
                        </div>
                        <!-- /.input group -->
                        </div>
                      </div>

                      
                    </div>
                    <!-- /.form group -->

                    <div class="form-group">
                        <label>JENIS DAGANGAN :</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                            </div>
                            <input type="text" class="form-control" id="jenisDagangan" name="jenisDagangan">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <div class="form-group">  
                        <label>MASA BERLAKU - SHP :</label>
                        <div class="row">
                          <div class="col-md-5">
                            <div class="input-group">
                            <input type="date" class="form-control" id="dariShp" name="dariShp">
                            </div>
                            <!-- /.input group -->
                          </div>
                            <span>s/d</span>
                          <div class="col-md-5">
                            <div class="input-group">
                            <input type="date" class="form-control" id="sampaiShp" name="sampaiShp">
                            </div>
                            <!-- /.input group -->
                          </div>
                        </div>
                    </div>
                    <!-- /.form group -->

                    <div class="form-group">
                        <label>TANGGAL JATUH TEMPO :</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                            </div>
                            <input type="text" class="form-control" id="tglTempo" name="tglTempo" value="Tanggal 28 Setiap Bulan" readonly>
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <div class="form-group">
                        <label>UPLOAD FOTO :</label>

                        <div class="custom-file input-group">
                         <input type="file" class="custom-file-input" id="fileFoto" name="fileFoto">
                         <label class="custom-file-label" for="customFile">Choose file</label>
                       </div>
                    </div>
                    <!-- /.form group -->
                        
                    </div>
                </div>

                <button type="submit" class="btn btn-block btn-outline-success" name="submit-sewa">Tambah Data Sewa</button>
              </div>  
              <!-- /.card-body -->
            </form>
            </div>
            <!-- /.card -->
            <?php }else {
            
            $id_sewa = $_GET['id'];
             
            $query = $koneksi->query("SELECT * FROM tbl_sewa WHERE id_sewa = '$id_sewa'");

            foreach($query as $data_sewa) : 

              

              $blokeExplode = explode(".", $data_sewa['blok_nomor']);

              $blok         = $blokeExplode[0];
              $nomor        = $blokeExplode[1];

            
            ?>

            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Edit data sewa</h3>
              </div>

              <form action="proses-sewa/proses_edit.php" id="formDataSewa" method="post" enctype="multipart/form-data">
              <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                    <input hidden type="text" class="form-control" id="idSewa" name="idSewa" value="<?= $data_sewa['id_sewa']; ?>">
                        <label>NIK :</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                            </div>
                            <input type="number" class="form-control" id="nik" name="nik" value="<?= $data_sewa['nik']; ?>">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <div class="form-group">
                        <label>NAMA :</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                            </div>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $data_sewa['nama']; ?>">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                    
                    <div class="form-group">
                        <label>TEMPAT LAHIR :</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                            </div>
                            <input type="text" class="form-control" id="tmpLahir" name="tmpLahir" value="<?= $data_sewa['tmpt_lahir'];?>">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <div class="form-group">
                        <label>TANGGAL LAHIR:</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                            </div>
                            <input type="date" class="form-control" id="tglLahir" name="tglLahir" value="<?= $data_sewa['tgl_lahir']; ?>">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <div class="form-group">
                        <label>JENIS KELAMIN:</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                            </div>
                            <select class="custom-select form-control-border" id="jenisKelamin" name="jenisKelamin" >
                            <?php if($data_sewa['jenis_kelamin'] == 1) {?>
                              <option value="" hidden>Pilih Jenis Kelamin</option>
                              <option value="1" selected>Laki - Laki</option>
                              <option value="2">Perempuan</option>
                              <?php }else{ ?>
                                <option value="" hidden>Pilih Jenis Kelamin</option>
                                <option value="1">Laki - Laki</option>
                                <option value="2" selected>Perempuan</option>
                                <?php } ?>
                            </select>
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <div class="form-group">
                        <label>ALAMAT :</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                            </div>
                            <textarea class="form-control" rows="3" id="alamat" name="alamat"><?= $data_sewa['alamat']; ?></textarea>
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <div class="form-group">
                        <label>NO HP :</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                            </div>
                            <input type="number" class="form-control" id="noHp" name="noHp" value="<?= $data_sewa['no_hp']; ?>">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">  
                        <label>PASAR :</label>

                        <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                        </div>
                        <select class="custom-select form-control-border" id="pasar" name="pasar" onchange="pilihPasar()">
                          <option value="" hidden>Pilih Pasar</option>
                          <?php if ($data_sewa['pasar'] == "KOBA") { ?>
                            
                            <option value="KOBA" selected>KOBA</option>
                            <option value="NAMANG">NAMANG</option>
                            <option value="SUNGAI SELAN">SUNGAI SELAN</option>
                            <option value="SIMPANG KATIS">SIMPANG KATIS</option>
                            <option value="AIR MESU">AIR MESU</option>
                            <option value="KAYU BESI">KAYU BESI</option>
                          <?php }else if($data_sewa['pasar'] == "NAMANG"){ ?>
                            <option value="KOBA">KOBA</option>
                            <option value="NAMANG" selected>NAMANG</option>
                            <option value="SUNGAI SELAN">SUNGAI SELAN</option>
                            <option value="SIMPANG KATIS">SIMPANG KATIS</option>
                            <option value="AIR MESU">AIR MESU</option>
                            <option value="KAYU BESI">KAYU BESI</option>
                          <?php }else if($data_sewa['pasar'] == "SUNGAI SELAN"){ ?>
                            <option value="KOBA">KOBA</option>
                            <option value="NAMANG">NAMANG</option>
                            <option value="SUNGAI SELAN" selected>SUNGAI SELAN</option>
                            <option value="SIMPANG KATIS">SIMPANG KATIS</option>
                            <option value="AIR MESU">AIR MESU</option>
                            <option value="KAYU BESI">KAYU BESI</option>
                          <?php }else if($data_sewa['pasar'] == "SIMPANG KATIS"){ ?>
                            <option value="KOBA">KOBA</option>
                            <option value="NAMANG">NAMANG</option>
                            <option value="SUNGAI SELAN">SUNGAI SELAN</option>
                            <option value="SIMPANG KATIS" selected>SIMPANG KATIS</option>
                            <option value="AIR MESU">AIR MESU</option>
                            <option value="KAYU BESI">KAYU BESI</option>
                          <?php }else if($data_sewa['pasar'] == "AIR MESU"){ ?>
                            <option value="KOBA">KOBA</option>
                            <option value="NAMANG">NAMANG</option>
                            <option value="SUNGAI SELAN">SUNGAI SELAN</option>
                            <option value="SIMPANG KATIS">SIMPANG KATIS</option>
                            <option value="AIR MESU" selected>AIR MESU</option>
                            <option value="KAYU BESI">KAYU BESI</option>
                          <?php }else if($data_sewa['pasar'] == "KAYU BESI"){ ?>
                            <option value="KOBA">KOBA</option>
                            <option value="NAMANG" >NAMANG</option>
                            <option value="SUNGAI SELAN">SUNGAI SELAN</option>
                            <option value="SIMPANG KATIS">SIMPANG KATIS</option>
                            <option value="AIR MESU">AIR MESU</option>
                            <option value="KAYU BESI" selected>KAYU BESI</option>
                          <?php } ?>
                        </select>
                        </div>
                    <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <div class="form-group">  
                        <label>JENIS PASAR :</label>

                        <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                        </div>
                            <select class="custom-select form-control-border" id="jenisPasar" name="jenisPasar" onchange="pilihJenisPasar()">
                            <option value="" hidden>Pilih Jenis Pasar</option>
                            <option value="<?= $data_sewa['jenis_pasar']; ?>" selected><?= $data_sewa['jenis_pasar']; ?></option>
                            </select>
                        </div>
                    <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <div class="form-group">  
                        <label>BLOK - NOMOR:</label>
                        <div class="row">
                          <div class="col-md-4">
                            <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                            </div>

                              <select class="custom-select form-control-border" id="blok" name="blok" onchange="pilihBlok()">
                              <option value="<?= $blok; ?>" selected><?= $blok; ?></option>
                              </select>
                            </div>
                            <!-- /.input group -->
                          </div>
-
                          <div class="col-md-6">
                            <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                            </div>
                              <select class="custom-select form-control-border" id="nomor" name="nomor">
                              <option value="<?= $nomor; ?>" selected><?= $nomor; ?></option>
                              </select>
                            </div>
                            <!-- /.input group -->
                          </div>
                        </div>
                    </div>
                    <!-- /.form group -->

                    <div class="form-group">
                      <label>HARGA SEWA :</label>

                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Rp.</span>
                        </div>
                        <input type="number" class="form-control" id="hargaSewa" name="hargaSewa" value="<?= $data_sewa['harga_sewa']; ?>" readonly>
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <div class="form-group">
                      <label>PEMBAYARAN BULAN - TAHUN:</label>

                      <div class="row">
                        <div class="col-md-6">
                        <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                        </div>

                        <select class="custom-select form-control-border" id="pembayaranBulan" name="pembayaranBulan">
                          <?php if ($data_sewa['pembayaran_bulan'] == 'Januari') { ?>
                            <option value="" hidden>Pilih Bulan</option>
                            <option value="Januari" selected>Januari</option>
                            <option value="Februari">Februari</option>
                            <option value="Maret">Maret</option>
                            <option value="April">April</option>
                            <option value="Mei">Mei</option>
                            <option value="Juni">Juni</option>
                            <option value="Juli">Juli</option>
                            <option value="Agustus">Agustus</option>
                            <option value="September">September</option>
                            <option value="Oktober">Oktober</option>
                            <option value="November">November</option>
                            <option value="Desember">Desember</option>

                            <?php }else if($data_sewa['pembayaran_bulan'] == 'Februari') { ?>
                            <option value="" hidden>Pilih Bulan</option>
                            <option value="Januari" >Januari</option>
                            <option value="Februari" selected>Februari</option>
                            <option value="Maret">Maret</option>
                            <option value="April">April</option>
                            <option value="Mei">Mei</option>
                            <option value="Juni">Juni</option>
                            <option value="Juli">Juli</option>
                            <option value="Agustus">Agustus</option>
                            <option value="September">September</option>
                            <option value="Oktober">Oktober</option>
                            <option value="November">November</option>
                            <option value="Desember">Desember</option>
                            <?php }else if($data_sewa['pembayaran_bulan'] == 'Maret') { ?>
                            <option value="" hidden>Pilih Bulan</option>
                            <option value="Januari" >Januari</option>
                            <option value="Februari">Februari</option>
                            <option value="Maret" selected>Maret</option>
                            <option value="April">April</option>
                            <option value="Mei">Mei</option>
                            <option value="Juni">Juni</option>
                            <option value="Juli">Juli</option>
                            <option value="Agustus">Agustus</option>
                            <option value="September">September</option>
                            <option value="Oktober">Oktober</option>
                            <option value="November">November</option>
                            <option value="Desember">Desember</option>
                            <?php }else if($data_sewa['pembayaran_bulan'] == 'April') { ?>
                            <option value="" hidden>Pilih Bulan</option>
                            <option value="Januari" >Januari</option>
                            <option value="Februari" >Februari</option>
                            <option value="Maret">Maret</option>
                            <option value="April" selected>April</option>
                            <option value="Mei">Mei</option>
                            <option value="Juni">Juni</option>
                            <option value="Juli">Juli</option>
                            <option value="Agustus">Agustus</option>
                            <option value="September">September</option>
                            <option value="Oktober">Oktober</option>
                            <option value="November">November</option>
                            <option value="Desember">Desember</option>
                            <?php }else if($data_sewa['pembayaran_bulan'] == 'Mei') { ?>
                            <option value="" hidden>Pilih Bulan</option>
                            <option value="Januari" >Januari</option>
                            <option value="Februari">Februari</option>
                            <option value="Maret">Maret</option>
                            <option value="April">April</option>
                            <option value="Mei" selected>Mei</option>
                            <option value="Juni">Juni</option>
                            <option value="Juli">Juli</option>
                            <option value="Agustus">Agustus</option>
                            <option value="September">September</option>
                            <option value="Oktober">Oktober</option>
                            <option value="November">November</option>
                            <option value="Desember">Desember</option>
                            <?php }else if($data_sewa['pembayaran_bulan'] == 'Juni') { ?>
                            <option value="" hidden>Pilih Bulan</option>
                            <option value="Januari" >Januari</option>
                            <option value="Februari">Februari</option>
                            <option value="Maret">Maret</option>
                            <option value="April">April</option>
                            <option value="Mei">Mei</option>
                            <option value="Juni" selected>Juni</option>
                            <option value="Juli">Juli</option>
                            <option value="Agustus">Agustus</option>
                            <option value="September">September</option>
                            <option value="Oktober">Oktober</option>
                            <option value="November">November</option>
                            <option value="Desember">Desember</option>
                            <?php }else if($data_sewa['pembayaran_bulan'] == 'Juli') { ?>
                            <option value="" hidden>Pilih Bulan</option>
                            <option value="Januari" >Januari</option>
                            <option value="Februari">Februari</option>
                            <option value="Maret">Maret</option>
                            <option value="April">April</option>
                            <option value="Mei">Mei</option>
                            <option value="Juni">Juni</option>
                            <option value="Juli" selected>Juli</option>
                            <option value="Agustus">Agustus</option>
                            <option value="September">September</option>
                            <option value="Oktober">Oktober</option>
                            <option value="November">November</option>
                            <option value="Desember">Desember</option>
                            <?php }else if($data_sewa['pembayaran_bulan'] == 'Agustus') { ?>
                            <option value="" hidden>Pilih Bulan</option>
                            <option value="Januari" >Januari</option>
                            <option value="Februari">Februari</option>
                            <option value="Maret">Maret</option>
                            <option value="April">April</option>
                            <option value="Mei">Mei</option>
                            <option value="Juni">Juni</option>
                            <option value="Juli">Juli</option>
                            <option value="Agustus" selected>Agustus</option>
                            <option value="September">September</option>
                            <option value="Oktober">Oktober</option>
                            <option value="November">November</option>
                            <option value="Desember">Desember</option>
                            <?php }else if($data_sewa['pembayaran_bulan'] == 'September') { ?>
                            <option value="" hidden>Pilih Bulan</option>
                            <option value="Januari" >Januari</option>
                            <option value="Februari">Februari</option>
                            <option value="Maret">Maret</option>
                            <option value="April">April</option>
                            <option value="Mei">Mei</option>
                            <option value="Juni">Juni</option>
                            <option value="Juli">Juli</option>
                            <option value="Agustus">Agustus</option>
                            <option value="September" selected>September</option>
                            <option value="Oktober">Oktober</option>
                            <option value="November">November</option>
                            <option value="Desember">Desember</option>
                            <?php }else if($data_sewa['pembayaran_bulan'] == 'Oktober') { ?>
                            <option value="" hidden>Pilih Bulan</option>
                            <option value="Januari" >Januari</option>
                            <option value="Februari">Februari</option>
                            <option value="Maret">Maret</option>
                            <option value="April">April</option>
                            <option value="Mei">Mei</option>
                            <option value="Juni">Juni</option>
                            <option value="Juli">Juli</option>
                            <option value="Agustus">Agustus</option>
                            <option value="September">September</option>
                            <option value="Oktober" selected>Oktober</option>
                            <option value="November">November</option>
                            <option value="Desember">Desember</option>
                            <?php }else if($data_sewa['pembayaran_bulan'] == 'November') { ?>
                            <option value="" hidden>Pilih Bulan</option>
                            <option value="Januari" >Januari</option>
                            <option value="Februari">Februari</option>
                            <option value="Maret">Maret</option>
                            <option value="April">April</option>
                            <option value="Mei">Mei</option>
                            <option value="Juni">Juni</option>
                            <option value="Juli">Juli</option>
                            <option value="Agustus">Agustus</option>
                            <option value="September">September</option>
                            <option value="Oktober">Oktober</option>
                            <option value="November" selected>November</option>
                            <option value="Desember">Desember</option>
                            <?php }else if($data_sewa['pembayaran_bulan'] == 'Desember') { ?>
                            <option value="" hidden>Pilih Bulan</option>
                            <option value="Januari" >Januari</option>
                            <option value="Februari">Februari</option>
                            <option value="Maret">Maret</option>
                            <option value="April">April</option>
                            <option value="Mei">Mei</option>
                            <option value="Juni">Juni</option>
                            <option value="Juli">Juli</option>
                            <option value="Agustus">Agustus</option>
                            <option value="September">September</option>
                            <option value="Oktober">Oktober</option>
                            <option value="November">November</option>
                            <option value="Desember" selected>Desember</option>
                            <?php } ?>
                        </select>
                      </div>
                      <!-- /.input group -->
                        </div>

                        <div class="col-md-6">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                          </div>

                          <input type="text" class="form-control" id="pembayaranTahun" name="pembayaranTahun" value="<?= $data_sewa['pembayaran_tahun']; ?>" readonly>
                          
                        </div>
                        <!-- /.input group -->
                        </div>
                      </div>

                      
                    </div>
                    <!-- /.form group -->

                    <div class="form-group">
                        <label>JENIS DAGANGAN :</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                            </div>
                            <input type="text" class="form-control" id="jenisDagangan" name="jenisDagangan" value="<?= $data_sewa['jenis_dagangan']; ?>">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <div class="form-group">  
                        <label>MASA BERLAKU - SHP :</label>
                        <div class="row">
                          <div class="col-md-5">
                            <div class="input-group">
                            <input type="date" class="form-control" id="dariShp" name="dariShp" value="<?= $data_sewa['dari_shp']; ?>">
                            </div>
                            <!-- /.input group -->
                          </div>
                            <span>s/d</span>
                          <div class="col-md-5">
                            <div class="input-group">
                            <input type="date" class="form-control" id="sampaiShp" name="sampaiShp" value="<?= $data_sewa['sampai_shp']; ?>">
                            </div>
                            <!-- /.input group -->
                          </div>
                        </div>
                    </div>
                    <!-- /.form group -->

                    <div class="form-group">
                        <label>TANGGAL JATUH TEMPO :</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                            </div>
                            <input type="text" class="form-control" id="tglTempo" name="tglTempo" value="Tanggal 28 Setiap Bulan" readonly>
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <div class="form-group">
                        <label>UPLOAD FOTO :</label>

                        <div class="custom-file input-group">
                         <input type="file" class="custom-file-input" id="fileFoto" name="fileFoto" value="<?= $data_sewa['foto']; ?>">
                         <input type="text" name="fotoLama" value="<?= $data_sewa['foto']; ?>" hidden>
                         <label class="custom-file-label" for="customFile">Choose file</label>
                       </div>
                    </div>
                    <!-- /.form group -->
                    

                        
                    </div>
                </div>

                <div class="row">
                 <div class="col-md-6">
                  <button type="submit" class="btn btn-block btn-outline-success" name="submit-edit-sewa">Edit Data Sewa</button>
                 </div>
                 <div class="col-md-6">
                  <a href="data-sewa.php" class="btn btn-block btn-outline-danger">Cancel</a> 
                 </div>
                </div>
                
              </div>  
              <!-- /.card-body -->
            </form>
            <?php endforeach; ?>
            </div>
            <!-- /.card -->
            <?php } ?>


          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <!-- modal sewa -->
  
    <div class="modal fade" id="modal-sewa">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data Sewa Bulanan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="proses-sewa/proses_tambah_lanjutan.php" id="formSewaLanjutan" method="post">
              <div class="card-body">
                <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>QRCODE ID :</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                            </div>
                            <input type="text" class="form-control" id="qrCodeId" name="qrCodeId" readonly>
                            <input type="text" class="form-control" id="srcQrCode" name="srcQrCode" hidden>
                            <input type="text" class="form-control" id="linkQrCode" name="linkQrCode" hidden>
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <div class="form-group">
                        <label>NIK :</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                            </div>
                            <input type="number" class="form-control" id="nikPenyewa" name="nik" readonly>
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <div class="form-group">
                        <label>NAMA :</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                            </div>
                            <input type="text" class="form-control" id="namaPenyewa" name="nama" readonly>
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                    
                    <div class="form-group">
                        <label>TEMPAT LAHIR :</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                            </div>
                            <input type="text" class="form-control" id="tmpLahirPenyewa" name="tmpLahir" readonly>
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <div class="form-group">
                        <label>TANGGAL LAHIR :</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                            </div>
                            <input type="date" class="form-control" id="tglLahirPenyewa" name="tglLahir" readonly>
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <div class="form-group">
                        <label>JENIS KELAMIN :</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                            </div>
                            <input type="text" class="form-control" id="jenisKelaminPenyewa" name="jenisKelamin" readonly>
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <div class="form-group">
                        <label>ALAMAT :</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                            </div>
                            <textarea class="form-control" rows="3" id="alamatPenyewa" name="alamat" readonly></textarea>
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <div class="form-group">
                        <label>NO HP :</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                            </div>
                            <input type="number" class="form-control" id="noHpPenyewa" name="noHp" readonly>
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                    

                    </div>

                    <div class="col-md-6">
                    <div class="form-group">  
                        <label>PASAR :</label>

                        <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                        </div>
                        <input type="text" class="form-control" id="pasarPenyewa" name="pasar" readonly>
                        </div>
                    <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <div class="form-group">  
                        <label>JENIS PASAR :</label>

                        <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                        </div>
                        <input type="text" class="form-control" id="jenisPasarPenyewa" name="jenisPasar" readonly>
                        </div>
                    <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <div class="form-group">  
                        <label>BLOK - NOMOR:</label>
                        <div class="row">
                          <div class="col-md-5">
                            <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                            </div>

                            <input type="text" class="form-control" id="blokNomorPenyewa" name="blokNomor" readonly>
                            </div>
                            <!-- /.input group -->
                          </div>
                          
                        </div>
                    </div>
                    <!-- /.form group -->

                    <div class="form-group">
                      <label>HARGA SEWA :</label>

                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Rp.</span>
                        </div>
                        <input type="number" class="form-control" id="hargaSewaPenyewa" name="hargaSewa" readonly>
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <div class="form-group">
                      <label>PEMBAYARAN BULAN :</label>
                      <div class="row">
                        <div class="col-md-6">
                        <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                        </div>

                          <select class="custom-select form-control-border" id="pembayaranBulanPenyewa" name="pembayaranBulan" readonly>
                              <option value="" hidden>Pilih Bulan</option>
                              <option value="Januari">Januari</option>
                              <option value="Februari">Februari</option>
                              <option value="Maret">Maret</option>
                              <option value="April">April</option>
                              <option value="Mei">Mei</option>
                              <option value="Juni">Juni</option>
                              <option value="Juli">Juli</option>
                              <option value="Agustus">Agustus</option>
                              <option value="September">September</option>
                              <option value="Oktober">Oktober</option>
                              <option value="November">November</option>
                              <option value="Desember">Desember</option>
                          </select>
                        </div>
                        <!-- /.input group -->
                        </div>
                        <div class="col-md-6">
                        <div class="input-group">
                          <input type="number" class="form-control" id="pembayaranTahunPenyewa" name="pembayaranTahun" value="<?= date("Y"); ?>" readonly>
                        </div>
                        <!-- /.input group -->
                        </div>
                      </div>

                      
                    </div>
                    <!-- /.form group -->

                    <div class="form-group">
                        <label>JENIS DAGANGAN :</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                            </div>
                            <input type="text" class="form-control" id="jenisDaganganPenyewa" name="jenisDagangan" readonly>
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <div class="form-group">  
                        <label>MASA BERLAKU - SHP :</label>
                        <div class="row">
                          <div class="col-md-5">
                            <div class="input-group">
                            <input type="date" class="form-control" id="dariShpPenyewa" name="dariShp" readonly>
                            </div>
                            <!-- /.input group -->
                          </div>
                            <span>s/d</span>
                          <div class="col-md-5">
                            <div class="input-group">
                            <input type="date" class="form-control" id="sampaiShpPenyewa" name="sampaiShp" readonly>
                            </div>
                            <!-- /.input group -->
                          </div>
                        </div>
                    </div>
                    <!-- /.form group -->

                    <div class="form-group">
                        <label>TANGGAL JATUH TEMPO :</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                            </div>
                            <input type="text" class="form-control" id="tglTempo" name="tglTempo" value="Tanggal 28 Setiap Bulan" readonly>
                            
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                    <input type="text" class="form-control" id="fileFotoPenyewa" name="fileFotoPenyewa" hidden>
                    </div>
                </div>
                

                <button type="submit" class="btn btn-block btn-outline-primary" name="submit-sewa-lanjutan">Tambah Data Pembayaran Sewa Selanjutnya</button>
              </div>
              <!-- /.card-body -->
            </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal sewa -->

    <!-- modal qrcode -->
  
    <div class="modal fade" id="modal-qrcode">
        <div class="modal-dialog modal-default">
          <div class="modal-content" style="background-image: radial-gradient(circle at 67% 83%, hsla(317,0%,96%,0.05) 0%, hsla(317,0%,96%,0.05) 1%,transparent 1%, transparent 5%,transparent 5%, transparent 100%),radial-gradient(circle at 24% 80%, hsla(317,0%,96%,0.05) 0%, hsla(317,0%,96%,0.05) 27%,transparent 27%, transparent 63%,transparent 63%, transparent 100%),radial-gradient(circle at 23% 5%, hsla(317,0%,96%,0.05) 0%, hsla(317,0%,96%,0.05) 26%,transparent 26%, transparent 82%,transparent 82%, transparent 100%),radial-gradient(circle at 21% 11%, hsla(317,0%,96%,0.05) 0%, hsla(317,0%,96%,0.05) 35%,transparent 35%, transparent 45%,transparent 45%, transparent 100%),radial-gradient(circle at 10% 11%, hsla(317,0%,96%,0.05) 0%, hsla(317,0%,96%,0.05) 21%,transparent 21%, transparent 81%,transparent 81%, transparent 100%),radial-gradient(circle at 19% 61%, hsla(317,0%,96%,0.05) 0%, hsla(317,0%,96%,0.05) 20%,transparent 20%, transparent 61%,transparent 61%, transparent 100%),radial-gradient(circle at 13% 77%, hsla(317,0%,96%,0.05) 0%, hsla(317,0%,96%,0.05) 63%,transparent 63%, transparent 72%,transparent 72%, transparent 100%),radial-gradient(circle at 30% 93%, hsla(317,0%,96%,0.05) 0%, hsla(317,0%,96%,0.05) 33%,transparent 33%, transparent 82%,transparent 82%, transparent 100%),linear-gradient(90deg, rgb(255,115,150),rgb(243,120,120));">
            <div class="modal-header">
             <h4 class="modal-title text-center" style="margin-left: 10px;"><b>UPTD PELAYANAN PASAR BANGKA TENGAH</b></h4>
              
            </div>
            <div class="modal-body">
             <div class="row">
              <div class="col-md-5">
               <h2 id="pasarQr" style="
                       position: absolute;
                       top: 60px;
                       left: 155%;">
               </h2>
               <img src="../img-qrcode/logo.png" style="
                       position: absolute;
                       width: 120px;
                       top: 130px;
                       left: 95px;
               
               
               ">
               
               <img src="" alt="" id="qrcodeImage" class="qrcodeImage" style="
                       width: 250px;
                       border: 2px solid black;
                       padding: 25px;
                       margin-left: 20px;
                       margin-top: 40px;
                 
                 ">
               <h1 id="blokNomorQr"style="
                       position: relative;
                       top: -30%;
                       left: 165%;
                       color: blue;
                       font-weight: bold;
                       ">
               </h1>
                 
              </div>
              
             </div>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal qrcode -->
    
    

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h1 style="text-align: center; padding: 10px 0;"><b>Seluruh Data Sewa Pasar</b></h1>
              </div>
              <!-- /.card-header -->
              <div class="card-body" id="card-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th style="width: 2%;">NO.</th>
                        <th>NIK</th>
                        <th>NAMA</th>
                        <th>ALAMAT</th>
                        <th>PASAR</th>
                        <th>JENIS PASAR</th>
                        <th>BLOK - NOMOR</th>
                        <th>HARGA SEWA</th>
                        <th>JENIS DAGANGAN</th>
                        <th>PEMBAYARAN BULAN - TAHUN</th>
                        <th>FOTO PEDAGANG</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $query = $koneksi->query("SELECT * FROM tbl_sewa ORDER BY id_sewa DESC");
                        $no = 1;

                        while($data = $query->fetch_assoc()) :
                            $harga_sewa_first = $data['harga_sewa'];
                          
                            $harga_sewa = number_format($harga_sewa_first,2,",",".");

                            $originalDateLahir = $data['tgl_lahir'];
                            $newDateLahir = date("l, d F Y", strtotime($originalDateLahir));

                            $srcQrcode = $data['src_qrcode'];
                            $blok = $data['blok_nomor'];
                            $pasar = $data['pasar'];
                        ?>
                    <tr>
                        <td><?= $no++;?></td>
                        <td><?= $data['nik']; ?></td>
                        <td><?= $data['nama']; ?></td>
                        <td><?= $data['alamat']; ?></td>
                        <td><?= $data['pasar']; ?></td>
                        <td><?= $data['jenis_pasar']; ?></td>
                        <td><?= $data['blok_nomor']; ?></td>
                        <td>Rp.<?= $harga_sewa; ?></td>
                        <td><?= $data['jenis_dagangan']; ?></td>
                        <td><?= $data['pembayaran_bulan'];?> <?= $data['pembayaran_tahun'];?></td>
                        <td><img src="../foto-pedagang/<?= $data['foto']; ?>" style="width: 70px;height: 70px;" alt=""></td>
                        <?php if ($data['file_shp'] == "-") { ?>
                        <td>
                            <a href="data-sewa.php?id=<?= $data['id_sewa']; ?>" class="btn btn-outline-primary btn-sm" title="Edit"><i class="fa fa-pen"></i></a> 
                            <button onclick="hapus(<?= $data['id_sewa']; ?>)" class="btn btn-outline-danger btn-sm" title="Hapus"><i class="fa fa-trash"></i></button>
                            <a onclick="return showDataSewa('<?= $data['qrcode_id'] ;?>',
                                                            '<?= $data['src_qrcode'] ;?>',
                                                            '<?= $data['link_qrcode'] ;?>',
                                                            '<?= $data['nik'] ;?>',
                                                            '<?= $data['nama'] ;?>',
                                                            '<?= $data['tmpt_lahir'] ;?>',
                                                            '<?= $data['tgl_lahir'] ;?>',
                                                            '<?= $data['jenis_kelamin'] ;?>',
                                                            '<?= $data['alamat'] ;?>',
                                                            '<?= $data['no_hp'] ;?>',
                                                            '<?= $data['pasar'] ;?>',
                                                            '<?= $data['jenis_pasar'] ;?>',
                                                            '<?= $data['blok_nomor'] ;?>',
                                                            '<?= $data['harga_sewa'] ;?>',
                                                            '<?= $data['pembayaran_bulan'] ;?>',
                                                            '<?= $data['jenis_dagangan'] ;?>',
                                                            '<?= $data['dari_shp'] ;?>',
                                                            '<?= $data['sampai_shp'] ;?>',
                                                            '<?= $data['tgl_tempo'] ;?>',
                                                            '<?= $data['foto'] ;?>')" class="btn btn-outline-warning btn-sm" title="Tambah Data Retrbusi" data-toggle="modal" data-target="#modal-sewa"><i class="fa fa-plus"></i></a>
                            <a onclick='document.getElementById("qrcodeImage").src="../img-qrcode/<?= $srcQrcode; ?>";
                                        document.getElementById("blokNomorQr").innerHTML = "<?= $blok; ?>" 
                                        document.getElementById("pasarQr").innerHTML = "PASAR MODERN <b><?= $pasar; ?></b>"'; 
                                        class="btn btn-outline-success btn-sm" title="Show QrCode" data-toggle="modal" data-target="#modal-qrcode"><i class="fa fa-qrcode"></i></a>

                            
                             <a href="../result-shp.php?qrcodeid=<?= $data['qrcode_id']; ?>" class="btn btn-primary btn-xs" title="Dokumen SHP">File SHP</i></a> 
                             <a href="data-sewa.php?id=<?= $data['id_sewa']; ?>" class="btn btn-warning btn-xs" title="Upload File SHP">Upload File SHP</a> 
                            
                        </td>
                        <?php }else{ ?>
                        <td>
                            <a href="data-sewa.php?id=<?= $data['id_sewa']; ?>" class="btn btn-outline-primary btn-sm" title="Edit"><i class="fa fa-pen"></i></a> 
                            <button onclick="hapus(<?= $data['id_sewa']; ?>)" class="btn btn-outline-danger btn-sm" title="Hapus"><i class="fa fa-trash"></i></button>
                            <a onclick="return showDataSewa('<?= $data['qrcode_id'] ;?>',
                                                            '<?= $data['src_qrcode'] ;?>',
                                                            '<?= $data['link_qrcode'] ;?>',
                                                            '<?= $data['nik'] ;?>',
                                                            '<?= $data['nama'] ;?>',
                                                            '<?= $data['tmpt_lahir'] ;?>',
                                                            '<?= $data['tgl_lahir'] ;?>',
                                                            '<?= $data['jenis_kelamin'] ;?>',
                                                            '<?= $data['alamat'] ;?>',
                                                            '<?= $data['no_hp'] ;?>',
                                                            '<?= $data['pasar'] ;?>',
                                                            '<?= $data['jenis_pasar'] ;?>',
                                                            '<?= $data['blok_nomor'] ;?>',
                                                            '<?= $data['harga_sewa'] ;?>',
                                                            '<?= $data['pembayaran_bulan'] ;?>',
                                                            '<?= $data['jenis_dagangan'] ;?>',
                                                            '<?= $data['dari_shp'] ;?>',
                                                            '<?= $data['sampai_shp'] ;?>',
                                                            '<?= $data['tgl_tempo'] ;?>',
                                                            '<?= $data['foto'] ;?>')" class="btn btn-outline-warning btn-sm" title="Tambah Data Retrbusi" data-toggle="modal" data-target="#modal-sewa"><i class="fa fa-plus"></i></a>
                            <a onclick='document.getElementById("qrcodeImage").src="../img-qrcode/<?= $srcQrcode; ?>";
                                        document.getElementById("blokNomorQr").innerHTML = "<?= $blok; ?>" 
                                        document.getElementById("pasarQr").innerHTML = "PASAR MODERN <b><?= $pasar; ?></b>"'; 
                                        class="btn btn-outline-success btn-sm" title="Show QrCode" data-toggle="modal" data-target="#modal-qrcode"><i class="fa fa-qrcode"></i></a>
                            
                        </td>
                        <?php } ?>
                    </tr>

                <?php endwhile; ?>
                          
            </tbody>
        </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.1.0
    </div>
    <strong>Copyright &copy; 2022  All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- DataTables  & Plugins -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>

<!-- bs-custom-file-input -->
<script src="../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>


<!-- jquery-validation -->
<script src="../plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../plugins/jquery-validation/additional-methods.min.js"></script>

<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>

<!-- SweetAlert -->
<script src="../sweatalert/dist/sweetalert2.all.min.js"></script>

<!-- Page specific script -->
<script type="text/javascript">
 $(function () {
  bsCustomFileInput.init();
});

  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });

  $(function () {
  $('#formDataSewa').validate({
    rules: {
      nik: {
        required: true,
        minlength: 16,
        maxlength: 16,
      },
      nama: {
        required: true,
      },
      tmpLahir: {
        required: true,
      },
      tglLahir: {
        required: true,
      },
      jenisKelamin: {
        required: true,
      },
      alamat: {
        required: true,
      },
      noHp: {
        required: true,
      },
      pasar: {
        required: true,
      },
      jenisPasar: {
        required: true,
      },
      blok: {
        required: true,
      },
      pembayaranBulan: {
        required: true,
      },
      nomor: {
        required: true,
      },
      jenisDagangan: {
        required: true,
      },
      dariShp: {
        required: true,
      },
      sampaiShp: {
        required: true,
      },
      fileFoto: {
        required: true,
      },

    },
    messages: {
      nik: {
        required: "Mohon diisi nik nya",
        minlength: "Minimal 16 angka",
        maxlength: "Maksimal 16 angka",
      },
      nama: {
        required: "Mohon diisi nama nya!",
      },
      tmpLahir: {
        required: "Mohon diisi tempat lahir nya!",
      },
      tglLahir: {
        required: "Mohon dipilih tanggal lahir nya!",
      },
      jenisKelamin: {
        required: "Mohon dipilih jenis kelamin nya!",
      },
      alamat: {
        required: "Mohon diisi alamat nya!",
      },
      noHp: {
        required: "Mohon diisi no hp nya!",
      },
      pasar: {
        required: "Mohon dipilih pasar nya!",
      },
      jenisPasar: {
        required: "Mohon dipilih jenis pasar nya!",
      },
      blok: {
        required: "Mohon dipilih blok nya!",
      },
      nomor: {
        required: "Mohon dipilih nomor nya!",
      },
      pembayaranBulan: {
        required: "Mohon dipilih bulan pembayaran nya!",
      },
      jenisDagangan: {
        required: "Mohon diisi jenis dagangan nya!",
      },
      dariShp: {
        required: "Mohon dipilih dari tanggal shp nya!",
      },
      sampaiShp: {
        required: "Mohon dipilih sampai tanggal shp nya!",
      },
      fileFoto: {
        required: "Mohon dipilih foto nya!",
      },
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });

 

  
});




function hapus(id){
 Swal.fire({
  title: 'Apakah anda yakin menghapus data sewa ini?',
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Ya'
}).then((result) => {
  if (result.isConfirmed) {
    window.location.href='proses-sewa/proses_hapus.php?id='+id
  }
})
}

// start function choice add data sewa
function pilihPasar(){
  let pasar = document.getElementById('pasar');
  let value = pasar.options[pasar.selectedIndex].value;
  let jenisPasar = "";



  if (value == "KOBA") {
    jenisPasar = "<option value='' hidden>Pilih Jenis Pasar</option><option value='Pasar Kering'>Pasar Kering</option><option value='Pasar Basah'>Pasar Basah</option><option value='Kios'>Kios</option>";
    document.getElementById('jenisPasar').innerHTML = jenisPasar;
    
  }else if(value == "NAMANG"){
    jenisPasar = "<option value='' hidden>Pilih Jenis Pasar</option><option value='Pasar Kering'>Pasar Kering</option><option value='Pasar Basah'>Pasar Basah</option><option value='Kios'>Kios</option>";
    document.getElementById('jenisPasar').innerHTML = jenisPasar;
  }else if(value == "SUNGAI SELAN"){
    jenisPasar = "<option value='' hidden>Pilih Jenis Pasar</option><option value='Pasar Kering'>Pasar Kering</option><option value='Pasar Basah'>Pasar Basah</option><option value='Kios'>Kios</option>";
    document.getElementById('jenisPasar').innerHTML = jenisPasar;
  }else if(value == "SIMPANG KATIS"){
    jenisPasar = "<option value='' hidden>Pilih Jenis Pasar</option><option value='Pasar Kering'>Pasar Kering</option><option value='Pasar Basah'>Pasar Basah</option><option value='Kios'>Kios</option>";
    document.getElementById('jenisPasar').innerHTML = jenisPasar;
  }else if(value == "AIR MESU"){  
    jenisPasar = "<option value='' hidden>Pilih Jenis Pasar</option><option value='Pasar Kering'>Pasar Kering</option><option value='Pasar Basah'>Pasar Basah</option><option value='Kios'>Kios</option>";
    document.getElementById('jenisPasar').innerHTML = jenisPasar;
  }else if(value == "KAYU BESI"){
    jenisPasar = "<option value='' hidden>Pilih Jenis Pasar</option><option value='Pasar Kering'>Pasar Kering</option><option value='Pasar Basah'>Pasar Basah</option><option value='Kios'>Kios</option>";
    document.getElementById('jenisPasar').innerHTML = jenisPasar;
  }

}

function pilihJenisPasar(){
  let valuePasar = pasar.options[pasar.selectedIndex].value;
  let elementJenisPasar = document.getElementById('jenisPasar');
  let valueJenisPasar = elementJenisPasar.options[elementJenisPasar.selectedIndex].value;
  let blok = "";

  if(valueJenisPasar == "Pasar Kering" && valuePasar == "KOBA") {
    blok = "<option value='' hidden>Pilih Blok</option><option value='A'>A</option><option value='B'>B</option><option value='C'>C</option><option value='D'>D</option><option value='K'>K</option>";
    document.getElementById('blok').innerHTML = blok;
  }else if(valueJenisPasar == "Pasar Basah" && valuePasar == "KOBA") {
    blok = "<option value='' hidden>Pilih Blok</option><option value='A'>A</option><option value='B'>B</option><option value='C'>C</option><option value='D'>D</option><option value='E'>E</option>";
    document.getElementById('blok').innerHTML = blok;
  }else if(valueJenisPasar == "Kios" && valuePasar == "KOBA"){
    blok = "<option value='' hidden>Pilih Blok</option><option value='L'>L</option><option value='K'>K</option>";
    document.getElementById('blok').innerHTML = blok;
  }else if(valueJenisPasar == "Pasar Kering" && valuePasar == "NAMANG") {
    blok = "<option value='' hidden>Pilih Blok</option><option value='A'>Namang A</option>";
    document.getElementById('blok').innerHTML = blok;
  }else if(valueJenisPasar == "Pasar Basah" && valuePasar == "NAMANG") {
    blok = "<option value='' hidden>Pilih Blok</option><option value='A'>Namang B</option>";
    document.getElementById('blok').innerHTML = blok;
  }else if(valueJenisPasar == "Kios" && valuePasar == "NAMANG"){
    blok = "<option value='' hidden>Pilih Blok</option><option value='L'>Namang C</option>";
    document.getElementById('blok').innerHTML = blok;
  }else if(valueJenisPasar == "Pasar Kering" && valuePasar == "SUNGAI SELAN") {
    blok = "<option value='' hidden>Pilih Blok</option><option value='A'>Sungai Selan A</option>";
    document.getElementById('blok').innerHTML = blok;
  }else if(valueJenisPasar == "Pasar Basah" && valuePasar == "SUNGAI SELAN") {
    blok = "<option value='' hidden>Pilih Blok</option><option value='A'>Sungai Selan B</option>";
    document.getElementById('blok').innerHTML = blok;
  }else if(valueJenisPasar == "Kios" && valuePasar == "SUNGAI SELAN"){
    blok = "<option value='' hidden>Pilih Blok</option><option value='L'>Sungai Selan C</option>";
    document.getElementById('blok').innerHTML = blok;
  }else if(valueJenisPasar == "Pasar Kering" && valuePasar == "SIMPANG KATIS") {
    blok = "<option value='' hidden>Pilih Blok</option><option value='A'>Simpang Katis A</option>";
    document.getElementById('blok').innerHTML = blok;
  }else if(valueJenisPasar == "Pasar Basah" && valuePasar == "SIMPANG KATIS") {
    blok = "<option value='' hidden>Pilih Blok</option><option value='A'>Simpang Katis B</option>";
    document.getElementById('blok').innerHTML = blok;
  }else if(valueJenisPasar == "Kios" && valuePasar == "SIMPANG KATIS"){
    blok = "<option value='' hidden>Pilih Blok</option><option value='L'>Simpang Katis C</option>";
    document.getElementById('blok').innerHTML = blok;
  }else if(valueJenisPasar == "Pasar Kering" && valuePasar == "AIR MESU") {
    blok = "<option value='' hidden>Pilih Blok</option><option value='A'>Air Mesu A</option>";
    document.getElementById('blok').innerHTML = blok;
  }else if(valueJenisPasar == "Pasar Basah" && valuePasar == "AIR MESU") {
    blok = "<option value='' hidden>Pilih Blok</option><option value='A'>Air Mesu B</option>";
    document.getElementById('blok').innerHTML = blok;
  }else if(valueJenisPasar == "Kios" && valuePasar == "AIR MESU"){
    blok = "<option value='' hidden>Pilih Blok</option><option value='L'>Air Mesu C</option>";
    document.getElementById('blok').innerHTML = blok;
  }else if(valueJenisPasar == "Pasar Kering" && valuePasar == "KAYU BESI") {
    blok = "<option value='' hidden>Pilih Blok</option><option value='A'>Kayu Besi A</option>";
    document.getElementById('blok').innerHTML = blok;
  }else if(valueJenisPasar == "Pasar Basah" && valuePasar == "KAYU BESI") {
    blok = "<option value='' hidden>Pilih Blok</option><option value='A'>Kayu Besi B</option>";
    document.getElementById('blok').innerHTML = blok;
  }else if(valueJenisPasar == "Kios" && valuePasar == "KAYU BESI"){
    blok = "<option value='' hidden>Pilih Blok</option><option value='L'>Kayu Besi C</option>";
    document.getElementById('blok').innerHTML = blok;
  }
  
}

function pilihBlok(){
  let valuePasar        = pasar.options[pasar.selectedIndex].value;

  let elementJenisPasar = document.getElementById('jenisPasar');
  let valueJenisPasar = elementJenisPasar.options[elementJenisPasar.selectedIndex].value;

  let elementBlok       = document.getElementById('blok');
  let elementHargaSewa  = document.getElementById('hargaSewa');
  let valueBlok         = elementBlok.options[elementBlok.selectedIndex].value;
  let nomor             = "";
  

  if (valueBlok == "A" && valuePasar == "KOBA" && valueJenisPasar == "Pasar Kering") {
    for (let i = 1; i <= 2; i++){
      nomor += "<option value="+i+">"
      nomor += i
      nomor +="</option>";
      document.getElementById('nomor').innerHTML = nomor;
    }
  }else if(valueBlok == "B" && valuePasar == "KOBA" && valueJenisPasar == "Pasar Kering"){
    for (let i = 1; i <= 3; i++){
      nomor += "<option value="+i+">"
      nomor += i
      nomor +="</option>";
      document.getElementById('nomor').innerHTML = nomor;
    }
  }else if(valueBlok == "C" && valuePasar == "KOBA" && valueJenisPasar == "Pasar Kering"){
    for (let i = 1; i <= 4; i++){
      nomor += "<option value="+i+">"
      nomor += i
      nomor +="</option>";
      document.getElementById('nomor').innerHTML = nomor;
    }
  }else if(valueBlok == "D" && valuePasar == "KOBA" && valueJenisPasar == "Pasar Kering"){
    for (let i = 1; i <= 5; i++){
      nomor += "<option value="+i+">"
      nomor += i
      nomor +="</option>";
      document.getElementById('nomor').innerHTML = nomor;
    }
  }else if(valueBlok == "K" && valuePasar == "KOBA" && valueJenisPasar == "Pasar Kering"){
    for (let i = 1; i <= 6; i++){
      nomor += "<option value="+i+">"
      nomor += i
      nomor +="</option>";
      document.getElementById('nomor').innerHTML = nomor;
    }
  }else if(valueBlok == "A" && valuePasar == "KOBA" && valueJenisPasar == "Pasar Basah"){
    for (let i = 1; i <= 7; i++){
      nomor += "<option value="+i+">"
      nomor += i
      nomor +="</option>";
      document.getElementById('nomor').innerHTML = nomor;
    }
  }else if(valueBlok == "B" && valuePasar == "KOBA" && valueJenisPasar == "Pasar Basah"){
    for (let i = 1; i <= 8; i++){
      nomor += "<option value="+i+">"
      nomor += i
      nomor +="</option>";
      document.getElementById('nomor').innerHTML = nomor;
    }
  }else if(valueBlok == "C" && valuePasar == "KOBA" && valueJenisPasar == "Pasar Basah"){
    for (let i = 1; i <= 9; i++){
      nomor += "<option value="+i+">"
      nomor += i
      nomor +="</option>";
      document.getElementById('nomor').innerHTML = nomor;
    }
  }else if(valueBlok == "D" && valuePasar == "KOBA" && valueJenisPasar == "Pasar Basah"){
    for (let i = 1; i <= 10; i++){
      nomor += "<option value="+i+">"
      nomor += i
      nomor +="</option>";
      document.getElementById('nomor').innerHTML = nomor;
    }
  }else if(valueBlok == "E" && valuePasar == "KOBA" && valueJenisPasar == "Pasar Basah"){
    for (let i = 1; i <= 11; i++){
      nomor += "<option value="+i+">"
      nomor += i
      nomor +="</option>";
      document.getElementById('nomor').innerHTML = nomor;
    }
  }else if(valueBlok == "L" && valuePasar == "KOBA" && valueJenisPasar == "Kios"){
    for (let i = 1; i <= 12; i++){
      nomor += "<option value="+i+">"
      nomor += i
      nomor +="</option>";
      document.getElementById('nomor').innerHTML = nomor;
    }
  }else if(valueBlok == "K" && valuePasar == "KOBA" && valueJenisPasar == "Kios"){
    for (let i = 1; i <= 13; i++){
      nomor += "<option value="+i+">"
      nomor += i
      nomor +="</option>";
      document.getElementById('nomor').innerHTML = nomor;
    }
  }


} 
// end function choice add data sewa



</script>

</body>
</html>
