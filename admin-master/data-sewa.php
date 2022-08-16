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
  <title>Data Retribusi</title>

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

    function showDataSewa(idSewa, nik, nama, tmpLahir, tglLahir, alamat, noHp, pasar, jenisPasar, blokNomor, hargaSewa, pembayaranBulan, jenisDagangan, dariShp, sampaiShp, tglTempo)  {
      let idsewa                  = idSewa;
      let nikPenyewa              = nik;
      let namaPenyewa             = nama;
      let tempatLahirPenyewa      = tmpLahir;
      let tglLahirPenyewa         = tglLahir;
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

      document.getElementById("idSewa").value                   = idSewa;
      document.getElementById("nikPenyewa").value               = nikPenyewa;
      document.getElementById("namaPenyewa").value              = namaPenyewa;
      document.getElementById("tmpLahirPenyewa").value          = tempatLahirPenyewa;
      document.getElementById("tglLahirPenyewa").value          = tglLahirPenyewa;
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

              <form action="proses-sewa/proses_tambah.php" id="formDataSewa" method="post">
              <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
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

                    </div>

                    <div class="col-md-6">

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
                      <label>HARGA SEWA :</label>

                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Rp.</span>
                        </div>
                        <input type="number" class="form-control" id="hargaSewa" name="hargaSewa" readonly>
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <div class="form-group">
                      <label>PEMBAYARAN BULAN :</label>

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

              <form action="proses-sewa/proses_edit.php" id="formDataSewa" method="post">
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

                    </div>

                    <div class="col-md-6">

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
                      <label>PEMBAYARAN BULAN :</label>

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
                    

                        
                    </div>
                </div>

                <button type="submit" class="btn btn-block btn-outline-success" name="submit-edit-sewa">Edit Data Sewa</button>
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

    <!-- modal -->
  
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
                        <label>ID SEWA :</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                            </div>
                            <input type="number" class="form-control" id="idSewa" name="idSewa" readonly>
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
                        <label>TANGGAL LAHIR:</label>

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
      <!-- /.modal -->
    
    

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h1 style="text-align: center; padding: 10px 0;"><b>Seluruh Data Sewa</b></h1>
              </div>
              <!-- /.card-header -->
              <div class="card-body" id="card-body">
                
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


  if(valueJenisPasar == "Pasar Kering" && valueBlok == "A" && valuePasar == "KOBA"){
    elementHargaSewa.value = 100000;
  }else if(valueJenisPasar == "Pasar Kering" && valueBlok == "B" && valuePasar == "KOBA"){
    elementHargaSewa.value = 100000;
  }else if(valueJenisPasar == "Pasar Kering" && valueBlok == "C" && valuePasar == "KOBA"){
    elementHargaSewa.value = 100000;
  }else if(valueJenisPasar == "Pasar Kering" && valueBlok == "D" && valuePasar == "KOBA"){
    elementHargaSewa.value = 100000;
  }else if(valueJenisPasar == "Pasar Kering" && valueBlok == "K" && valuePasar == "KOBA"){
    elementHargaSewa.value = 230000;
  }else if(valueJenisPasar == "Pasar Basah" && valueBlok == "A" && valuePasar == "KOBA"){
    elementHargaSewa.value = 233000;
  }else if(valueJenisPasar == "Pasar Basah" && valueBlok == "B" && valuePasar == "KOBA"){
    elementHargaSewa.value = 233000;
  }else if(valueJenisPasar == "Pasar Basah" && valueBlok == "C" && valuePasar == "KOBA"){
    elementHargaSewa.value = 233000;
  }else if(valueJenisPasar == "Pasar Basah" && valueBlok == "D" && valuePasar == "KOBA"){
    elementHargaSewa.value = 233000;
  }else if(valueJenisPasar == "Pasar Basah" && valueBlok == "E" && valuePasar == "KOBA"){
    elementHargaSewa.value = 100000;
  }else if(valueJenisPasar == "Kios" && valuePasar == "KOBA" && valueBlok == "L" || valueBlok == "K"){
    elementHargaSewa.value = 233000;
  }

} 
// end function choice add data sewa



function loadXMLDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("card-body").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "proses-sewa/data-sewa-show.php", true);
  xhttp.send();
}

setInterval(() => {
    loadXMLDoc();
}, 1000);
window.onload = loadXMLDoc;

</script>

</body>
</html>
