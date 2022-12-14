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
    function pilihBiaya(){
      const tiket = document.getElementById("jenis_tiket");
      const tiketDipilih = tiket.value;
      
      if (tiketDipilih == "LAPAK") {
        document.getElementById("biaya").value = 2000;
      }else if (tiketDipilih == "KIOS") {
        document.getElementById("biaya").value = 3000;
      }else{
        document.getElementById("biaya").value = 5000;
      }
    }

    function pilihBiayaLanjutan(){
      const tiket = document.getElementById("jenis-tiket-lanjutan");
      const tiketDipilih = tiket.value;
      
      if (tiketDipilih == "LAPAK") {
        document.getElementById("biaya-lanjutan").value = 2000;
      }else if (tiketDipilih == "KIOS") {
        document.getElementById("biaya-lanjutan").value = 3000;
      }else{
        document.getElementById("biaya-lanjutan").value = 5000;
      }
    }


    

    function showData(pasar, tanggal){
      let pasarLanjutan = pasar;
      let tanggalLanjutan = tanggal;

      document.getElementById("pasar-lanjutan").value = pasarLanjutan;
      document.getElementById("tanggal-lanjutan").value = tanggalLanjutan;
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
                <a href="data-retribusi.html" class="nav-link active">
                  <p>Data Retribusi</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <p>
                    Database
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="data-sewa.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Data Sewa</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/charts/flot.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Data Denah</p>
                    </a>
                  </li>
                </ul>
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
            <h1 class="m-0">Data <b>Retribusi</b></h1>
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
          <div class="col-md-4">
          <?php if(empty($_GET)) { ?>
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Tambah data retribusi</h3>
              </div>

              <form action="proses-retribusi/proses_tambah.php" id="formRetribusi" method="post">
              <div class="card-body">
                <div class="form-group">  
                  <label>PASAR :</label>

                  <div class="input-group">
                    <select class="custom-select form-control-border" id="pasar" name="pasar">
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
                  <label>TANGGAL :</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                    </div>
                    <input type="date" class="form-control" id="tanggal" name="tanggal">
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <div class="form-group">
                  <label>JENIS TIKET :</label>

                  <div class="input-group">
                    <select onchange="pilihBiaya()" class="custom-select form-control-border" id="jenis_tiket" name="jenis_tiket">
                      <option value="" hidden>Pilih Jenis Tiket</option>
                      <option value="LAPAK">LAPAK</option>
                      <option value="KIOS">KIOS</option>
                      <option value="MUSIMAN">MUSIMAN</option>
                    </select>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <div class="form-group">
                  <label>BIAYA :</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Rp.</span>
                    </div>
                    <input type="number" class="form-control" id="biaya" name="biaya" readonly>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <div class="form-group">
                  <label>NOMOR KIOS :</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                    </div>
                    <input type="text" class="form-control" id="no_kios" name="no_kios">
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <div class="form-group">
                  <label>KODE KARCIS :</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                    </div>
                    <input type="text" class="form-control" id="kode_karcis" name="kode_karcis">
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <button type="submit" class="btn btn-block btn-outline-primary" name="submit-retribusi">Tambah Data Retribusi</button>
              </div>
              <!-- /.card-body -->
            </form>
            </div>
            <!-- /.card -->
            <?php }else{

            $id_retribusi = $_GET['id'];
             
            $query = $koneksi->query("SELECT * FROM tbl_retribusi WHERE id_retribusi = '$id_retribusi'");

            foreach($query as $data_retribusi) :    
              
            
            ?>

            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Edit data retribusi</h3>
              </div>

              <form action="proses-retribusi/proses_edit.php" id="formRetribusi" method="post">
              <div class="card-body">
              <input type="number" class="form-control" id="id_retribusi" name="id_retribusi" value="<?= $data_retribusi['id_retribusi']; ?>" hidden>
                <div class="form-group">  
                  <label>PASAR :</label>

                  <div class="input-group">
                    <select class="custom-select form-control-border" id="pasar" name="pasar">
                      <option value="" hidden>Pilih Pasar</option>
                      <?php if ($data_retribusi['pasar'] == "KOBA") { ?>
                        
                        <option value="KOBA" selected>KOBA</option>
                        <option value="NAMANG">NAMANG</option>
                        <option value="SUNGAI SELAN">SUNGAI SELAN</option>
                        <option value="SIMPANG KATIS">SIMPANG KATIS</option>
                        <option value="AIR MESU">AIR MESU</option>
                        <option value="KAYU BESI">KAYU BESI</option>
                      <?php }else if($data_retribusi['pasar'] == "NAMANG"){ ?>
                        <option value="KOBA">KOBA</option>
                        <option value="NAMANG" selected>NAMANG</option>
                        <option value="SUNGAI SELAN">SUNGAI SELAN</option>
                        <option value="SIMPANG KATIS">SIMPANG KATIS</option>
                        <option value="AIR MESU">AIR MESU</option>
                        <option value="KAYU BESI">KAYU BESI</option>
                      <?php }else if($data_retribusi['pasar'] == "SUNGAI SELAN"){ ?>
                        <option value="KOBA">KOBA</option>
                        <option value="NAMANG">NAMANG</option>
                        <option value="SUNGAI SELAN" selected>SUNGAI SELAN</option>
                        <option value="SIMPANG KATIS">SIMPANG KATIS</option>
                        <option value="AIR MESU">AIR MESU</option>
                        <option value="KAYU BESI">KAYU BESI</option>
                      <?php }else if($data_retribusi['pasar'] == "SIMPANG KATIS"){ ?>
                        <option value="KOBA">KOBA</option>
                        <option value="NAMANG">NAMANG</option>
                        <option value="SUNGAI SELAN">SUNGAI SELAN</option>
                        <option value="SIMPANG KATIS" selected>SIMPANG KATIS</option>
                        <option value="AIR MESU">AIR MESU</option>
                        <option value="KAYU BESI">KAYU BESI</option>
                      <?php }else if($data_retribusi['pasar'] == "AIR MESU"){ ?>
                        <option value="KOBA">KOBA</option>
                        <option value="NAMANG">NAMANG</option>
                        <option value="SUNGAI SELAN">SUNGAI SELAN</option>
                        <option value="SIMPANG KATIS">SIMPANG KATIS</option>
                        <option value="AIR MESU" selected>AIR MESU</option>
                        <option value="KAYU BESI">KAYU BESI</option>
                      <?php }else if($data_retribusi['pasar'] == "KAYU BESI"){ ?>
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
                  <label>TANGGAL :</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                    </div>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= $data_retribusi['tanggal']; ?>">
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <div class="form-group">
                  <label>JENIS TIKET :</label>

                  <div class="input-group">
                    <select onchange="pilihBiaya()" class="custom-select form-control-border" id="jenis_tiket" name="jenis_tiket">
                      <option value="" hidden>Pilih Jenis Tiket</option>
                      <?php if ($data_retribusi['jenis_tiket'] == "LAPAK") { ?>
                        
                        <option value="LAPAK" selected>LAPAK</option>
                        <option value="KIOS">KIOS</option>
                        <option value="MUSIMAN">MUSIMAN</option>
                      <?php }else if($data_retribusi['jenis_tiket'] == "KIOS"){ ?>
                        <option value="LAPAK">LAPAK</option>
                        <option value="KIOS" selected>KIOS</option>
                        <option value="MUSIMAN">MUSIMAN</option>
                      <?php }else if($data_retribusi['jenis_tiket'] == "MUSIMAN"){ ?>
                        <option value="LAPAK">LAPAK</option>
                        <option value="KIOS">KIOS</option>
                        <option value="MUSIMAN" selected>MUSIMAN</option>
                      <?php } ?>
                      
                    </select>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <div class="form-group">
                  <label>BIAYA :</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Rp.</span>
                    </div>
                    <input type="number" class="form-control" id="biaya" name="biaya" value="<?= $data_retribusi['biaya']; ?>" readonly >
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <div class="form-group">
                  <label>NOMOR KIOS :</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                    </div>
                    <input type="text" class="form-control" id="no_kios" name="no_kios" value="<?= $data_retribusi['no_kios']; ?>">
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <div class="form-group">
                  <label>KODE KARCIS :</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                    </div> 
                    <input type="text" class="form-control" id="kode_karcis" name="kode_karcis" value="<?= $data_retribusi['kode_karcis']; ?>">
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <button type="submit" class="btn btn-block btn-outline-primary" name="submit-edit-retribusi">Edit Data Retribusi</button>
              </div>
              <!-- /.card-body -->
            </form>
            <?php endforeach; ?>
            </div>
            <!-- /.card -->
            <?php }?>
            
          </div>
        </div>
        <!-- /.row -->

        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    
    <!-- modal -->
  
    <div class="modal fade" id="modal-retribusi">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data Rertribusi Lanjutan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="proses-retribusi/proses_tambah.php" id="formRetribusi2" method="post">
              <div class="card-body">
                <div class="form-group">  
                  <label>PASAR :</label>

                  <div class="input-group">
                  <input type="text" class="form-control" id="pasar-lanjutan" name="pasar" readonly>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <div class="form-group">
                  <label>TANGGAL :</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                    </div>
                    <input type="date" class="form-control" id="tanggal-lanjutan" name="tanggal" readonly>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <div class="form-group">
                  <label>JENIS TIKET :</label>

                  <div class="input-group">
                    <select onchange="pilihBiayaLanjutan()" class="custom-select form-control-border" id="jenis-tiket-lanjutan" name="jenis_tiket">
                      <option value="" hidden>Pilih Jenis Tiket</option>
                      <option value="LAPAK">LAPAK</option>
                      <option value="KIOS">KIOS</option>
                      <option value="MUSIMAN">MUSIMAN</option>
                    </select>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <div class="form-group">
                  <label>BIAYA :</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Rp.</span>
                    </div>
                    <input type="number" class="form-control" id="biaya-lanjutan" name="biaya" readonly>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <div class="form-group">
                  <label>NOMOR KIOS :</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                    </div>
                    <input type="text" class="form-control" id="no_kios" name="no_kios">
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <div class="form-group">
                  <label>KODE KARCIS :</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                    </div>
                    <input type="text" class="form-control" id="kode_karcis" name="kode_karcis">
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <button type="submit" class="btn btn-block btn-outline-primary" name="submit-retribusi">Tambah Data Retribusi Selanjutnya</button>
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
                <h1 style="text-align: center; padding: 10px 0;"><b>Seluruh Data Retribusi</b></h1>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th style="width: 2%;">NO.</th>
                    <th>PASAR</th>
                    <th>TANGGAL</th>
                    <th>JENIS TIKET</th>
                    <th>BIAYA</th>
                    <th>NOMOR KIOS</th>
                    <th>KODE KARCIS</th>
                    <th>NIK</th>
                    <th>NAMA</th>
                    <th>AKSI</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $query = $koneksi->query("SELECT * FROM tbl_retribusi ORDER BY id_retribusi DESC");
                  $no = 1;

                  while($data = $query->fetch_assoc()) :
                    $biayaFirst = $data['biaya'];
                  
                    $biaya = number_format($biayaFirst,2,",",".");

                    $originalDate = $data['tanggal'];
                    $newDate = date("l, d F Y", strtotime($originalDate));
                  ?>
                  <tr>
                    <td><?= $no++;?></td>
                    <td><?= $data['pasar']; ?></td>
                    <td><?= $newDate; ?></td>
                    <td><?= $data['jenis_tiket']; ?></td>
                    <td>Rp. <?= $biaya; ?></td>
                    <td><?= $data['no_kios']; ?></td>
                    <td><?= $data['kode_karcis']; ?></td>
                    <td><?= $data['nik']; ?></td>
                    <td><?= $data['nama_pegawai']; ?></td>
                    <td>
                      <a href="data-retribusi.php?id=<?= $data['id_retribusi']; ?>" class="btn btn-outline-primary btn-sm" title="Edit"><i class="fa fa-pen"></i></a> 
                      <button onclick="hapus(<?= $data['id_retribusi']; ?>)" class="btn btn-outline-danger btn-sm" title="Hapus"><i class="fa fa-trash"></i></button>
                      <a onclick="return showData('<?= $data['pasar'] ;?>','<?= $data['tanggal'] ;?>')" class="btn btn-outline-warning btn-sm" title="Tambah Data Retrbusi" data-toggle="modal" data-target="#modal-retribusi"><i class="fa fa-plus"></i></a>
                      <a href="../result-laporan.php?pasar=<?= $data['pasar'];?>&tanggal=<?= $data['tanggal'];?>" class="btn btn-outline-primary btn-sm" title="Download"><i class="fa fa-download"></i></a>
                    </td>
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
  $('#formRetribusi').validate({
    rules: {
      pasar: {
        required: true,
      },
      tanggal: {
        required: true,
      },
      jenis_tiket: {
        required: true,
      },
      biaya: {
        required: true,
      },
      no_kios: {
        required: true,
      },
      kode_karcis: {
        required: true,
      },
    },
    messages: {
      pasar: {
        required: "Mohon dipilih pasar nya!",
      },
      tanggal: {
        required: "Mohon diisi tanggal nya!",
      },
      jenis_tiket: {
        required: "Mohon dipilih jenis tiket nya!",
      },
      biaya: {
        required: "Mohon diisi biaya nya!",
      },
      no_kios: {
        required: "Mohon diisi nomor kios nya!",
      },
      kode_karcis: {
        required: "Mohon diisi kode karcis nya!",
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

  $('#formRetribusi2').validate({
    rules: {
      pasar: {
        required: true,
      },
      tanggal: {
        required: true,
      },
      jenis_tiket: {
        required: true,
      },
      biaya: {
        required: true,
      },
      no_kios: {
        required: true,
      },
      kode_karcis: {
        required: true,
      },
    },
    messages: {
      pasar: {
        required: "Mohon dipilih pasar nya!",
      },
      tanggal: {
        required: "Mohon diisi tanggal nya!",
      },
      jenis_tiket: {
        required: "Mohon dipilih jenis tiket nya!",
      },
      biaya: {
        required: "Mohon diisi biaya nya!",
      },
      no_kios: {
        required: "Mohon diisi nomor kios nya!",
      },
      kode_karcis: {
        required: "Mohon diisi kode karcis nya!",
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
  title: 'Apakah anda yakin menghapus data retribusi ini?',
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Ya'
}).then((result) => {
  if (result.isConfirmed) {
    window.location.href='proses-retribusi/proses_hapus.php?id='+id
  }
})
}

</script>




</body>
</html>
