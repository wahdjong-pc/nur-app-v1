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
  <title>Data Pegawai</title>

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
                <a href="data-pegawai.php" class="nav-link active">
                  <p>Data Pegawai</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="data-retribusi.php" class="nav-link">
                  <p>Data Retribusi</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <p>Database <b>(Coming Soon)</b></p>
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
            <h1 class="m-0">Data <b>Pegawai</b></h1>
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
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah data pegawai</h3>
              </div>

              <form action="proses-pegawai/proses_tambah.php" id="formPegawai" method="post">
              <div class="card-body">
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
                  <label>JABATAN :</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                    </div>
                    <input type="text" class="form-control" id="jabatan" name="jabatan">
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <div class="form-group">
                  <label>USERNAME :</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                    </div>
                    <input type="text" class="form-control" id="username" name="username">
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <div class="form-group">
                  <label>PASSWORD :</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                    </div>
                    <input type="password" class="form-control" id="password" name="password">
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <div class="form-group">
                  <label>ROLE :</label>

                  <div class="input-group">
                    <select class="custom-select form-control-border" id="role" name="role">
                      <option value="" hidden>Pilih Role</option>
                      <option value="Admin Master">Admin Master</option>
                      <option value="Pegawai">Pegawai</option>
                    </select>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <button type="submit" class="btn btn-block btn-outline-primary" name="submit">Tambah Data Pegawai</button>
              </div>
              <!-- /.card-body -->
            </form>
            </div>
            <!-- /.card -->

            <?php } else { 

            $id_pegawai = $_GET['id'];
             
            $query = $koneksi->query("SELECT * FROM tbl_pegawai WHERE id_pegawai = '$id_pegawai'");

            foreach($query as $data_pegawai) :  
              
            ?>

            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit data pegawai</h3>
              </div>

              <form action="proses-pegawai/proses_edit.php" id="formPegawai" method="post">
              <div class="card-body">
              <input type="number" class="form-control" id="id_pegawai" name="id_pegawai" value="<?= $data_pegawai['id_pegawai']; ?>" hidden>
                <div class="form-group">
                  <label>NIK :</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                    </div>
                    
                    <input type="number" class="form-control" id="nik" name="nik" value="<?= $data_pegawai['nik']; ?>">
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
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $data_pegawai['nama']; ?>">
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <div class="form-group">
                  <label>JABATAN :</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                    </div>
                    <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?= $data_pegawai['jabatan']; ?>">
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <div class="form-group">
                  <label>USERNAME :</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                    </div>
                    <input type="text" class="form-control" id="username" name="username" value="<?= $data_pegawai['username']; ?>">
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <div class="form-group">
                  <label>PASSWORD :</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-dot-circle"></i></span>
                    </div>
                    <input type="password" class="form-control" id="password" name="password">
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <div class="form-group">
                  <label>ROLE :</label>

                  <div class="input-group">
                    <select class="custom-select form-control-border" id="role" name="role">
                    <option value="" hidden>Pilih Role</option>
                      <?php if ($data_pegawai['role'] == "Admin Master") { ?>
                        
                        <option value="Admin Master" selected>Admin Master</option>
                        <option value="Pegawai">Pegawai</option>
                      <?php }else{ ?>
                        <option value="Admin Master" >Admin Master</option>
                        <option value="Pegawai" selected>Pegawai</option>
                      <?php } ?>
                    </select>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <button type="submit" class="btn btn-block btn-outline-warning" name="submit-edit">Edit Data Pegawai</button>
              </div>
              <!-- /.card-body -->
              <?php endforeach; ?>
            </form>
            </div>
            <!-- /.card -->
            <?php } ?>
          </div>
        </div>
        <!-- /.row -->

        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h1 style="text-align: center; padding: 10px 0;"><b>Seluruh Data Pegawai</b></h1>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th style="width: 2%;">No.</th>
                    <th>NIK</th>
                    <th>NAMA</th>
                    <th>JABATAN</th>
                    <th>USERNAME</th>
                    <th>PASSWORD</th>
                    <th>ROLE</th>
                    <th>AKSI</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $query = $koneksi->query("SELECT * FROM tbl_pegawai ORDER BY id_pegawai DESC");
                  
                  $no = 1;

                  while($data = $query->fetch_assoc()) :
                  
                  
                  ?>
                  <tr>
                    <td><?= $no++;?></td>
                    <td><?= $data['nik']; ?></td>
                    <td><?= $data['nama']; ?></td>
                    <td><?= $data['jabatan']; ?></td>
                    <td><?= $data['username']; ?></td>
                    <td><?= $data['password']; ?></td>
                    <td><?= $data['role']; ?></td>
                    <td>
                      <a href="data-pegawai.php?id=<?= $data['id_pegawai']; ?>" class="btn btn-outline-primary btn-sm" title="Edit"><i class="fa fa-pen"></i></a> 
                      <button onclick="hapus(<?= $data['id_pegawai']; ?>)" class="btn btn-outline-danger btn-sm" title="Hapus"><i class="fa fa-trash"></i></button>
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
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });

  $(function () {
  $('#formPegawai').validate({
    rules: {
      nik: {
        required: true,
        minlength: 16,
        maxlength: 16,
      },
      nama: {
        required: true,
      },
      jabatan: {
        required: true,
      },
      username: {
        required: true,
      },
      password: {
        required: true,
        minlength: 4
      },
      role: {
        required: true,
      },
    },
    messages: {
      nik: {
        required: "Mohon diisi nik nya!",
        minlength: "Minimal 16 angka",
        maxlength: "Maksimal 16 angka",
      },
      nama: {
        required: "Mohon diisi nama nya!",
      },
      jabatan: {
        required: "Mohon diisi jabatan nya!",
      },
      username: {
        required: "Mohon diisi username nya!",
      },
      password: {
        required: "Mohon diisi password nya!",
        minlength: "minimal 4 karakter"
      },
      role: {
        required: "Mohon dipilih role nya!",
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
  title: 'Apakah anda yakin menghapus data pegawai ini?',
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Ya'
}).then((result) => {
  if (result.isConfirmed) {
    window.location.href='proses-pegawai/proses_hapus.php?id='+id
  }
})
}


</script>
</body>
</html>
