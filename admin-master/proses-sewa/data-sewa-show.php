<?php 
include '../../config/config.php';
session_start();
if (empty($_SESSION['nik']) or empty($_SESSION['role'])) {
      echo "<script>
         alert('Maaf anda harus login terlebih dahulu');document.location='../index.php'
     </script>";
     }

?>

<table id="example1" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th style="width: 2%;">NO.</th>
                <th>NIK</th>
                <th>NAMA</th>
                <th>TEMPAT LAHIR</th>
                <th>TANGGAL LAHIR</th>
                <th>ALAMAT</th>
                <th>NO HP</th>
                <th>PASAR</th>
                <th>JENIS PASAR</th>
                <th>BLOK - NOMOR</th>
                <th>HARGA SEWA</th>
                <th>JENIS DAGANGAN</th>
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

                    $originalDateLahir = $data['tanggal'];
                    $newDateLahir = date("l, d F Y", strtotime($originalDateLahir));
                ?>
            <tr>
                <td><?= $no++;?></td>
                <td><?= $data['nik']; ?></td>
                <td><?= $data['nama']; ?></td>
                <td><?= $data['tmpt_lahir']; ?></td>
                <td><?= $newDateLahir; ?></td>
                <td><?= $data['alamat']; ?></td>
                <td><?= $data['no_hp']; ?></td>
                <td><?= $data['pasar']; ?></td>
                <td><?= $data['jenis_pasar']; ?></td>
                <td><?= $data['blok_nomor']; ?></td>
                <td>Rp.<?= $harga_sewa; ?></td>
                <td><?= $data['jenis_dagangan']; ?></td>
                <td>
                    <a href="data-retribusi.php?id=<?= $data['id_retribusi']; ?>" class="btn btn-outline-primary btn-sm" title="Edit"><i class="fa fa-pen"></i></a> 
                    <button onclick="hapus(<?= $data['id_sewa']; ?>)" class="btn btn-outline-danger btn-sm" title="Hapus"><i class="fa fa-trash"></i></button>
                    <a onclick="return showData('<?= $data['pasar'] ;?>','<?= $data['tanggal'] ;?>')" class="btn btn-outline-warning btn-sm" title="Tambah Data Retrbusi" data-toggle="modal" data-target="#modal-retribusi"><i class="fa fa-plus"></i></a>
                    <a href="../result-laporan.php?pasar=<?= $data['pasar'];?>&tanggal=<?= $data['tanggal'];?>" class="btn btn-outline-primary btn-sm" title="Download"><i class="fa fa-download"></i></a>
                </td>
            </tr>

        <?php endwhile; ?>
                  
    </tbody>
</table>