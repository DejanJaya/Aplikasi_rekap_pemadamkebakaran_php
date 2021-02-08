<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'sidebar.php';

require 'navbar.php';
?>

<h1 style="text-align:center" class="h3 mb-2 text-gray-800">REKAPITULASI KEBAKARAN DAN PENYELAMATAN/PENANGGULANGAN BENCANA TAHUN ANGGARAN 2020</h1>
<?php
if (isset($_GET['berhasil'])) {
    echo "<script>
        alert('Data berhasil di import');
    </script>";
}
?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="" type="button" class="btn btn-success" data-toggle="modal" data-target="#importData">
            <img src="assets/img/excel.png" width="40px">
            Import Data
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table style="text-align:center" class="table table-bordered" id="dataTable" width="100%" cellspacing="0" cellpadding="0">
                <thead>
                    <tr>
                        <th rowspan="2">No.</th>
                        <th rowspan="2">Bulan</th>
                        <th rowspan="2">Jumlah Kejadian</th>
                        <th colspan="5">Kategori Obyek</th>
                        <th colspan="5">Penyebab Kebakaran</th>
                        <th colspan="5">Jumlah Obyek</th>
                        <th colspan="2">Penghuni</th>
                        <th colspan="2">Korban</th>
                        <th rowspan="2">Unit</th>
                        <th rowspan="2">Luas Area (M2)</th>
                        <th rowspan="2">Taksiran Kerugian (Rp)</th>
                    </tr>
                    <tr>
                        <th>BP</th>
                        <th>BU</th>
                        <th>BI</th>
                        <th>KD</th>
                        <th>LN</th>
                        <th>KP</th>
                        <th>LP</th>
                        <th>LS</th>
                        <th>RK</th>
                        <th>LN</th>
                        <th>BP</th>
                        <th>BU</th>
                        <th>BI</th>
                        <th>KD</th>
                        <th>LN</th>
                        <th>Jiwa</th>
                        <th>KK</th>
                        <th>Mati</th>
                        <th>Luka</th>
                    </tr>
                </thead>
                <?php
                include 'functions.php';
                $no = 1;
                $data = mysqli_query($koneksi, "SELECT * FROM rekap");
                foreach ($data as $d) {
                ?>
                    <tbody>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $d["bulan"]; ?></td>
                            <td><?php echo $d["jumlah_kejadian"]; ?></td>
                            <td><?php echo $d["bp"]; ?></td>
                            <td><?php echo $d["bu"]; ?></td>
                            <td><?php echo $d["bi"]; ?></td>
                            <td><?php echo $d["kd"]; ?></td>
                            <td><?php echo $d["ln"]; ?></td>
                            <td><?php echo $d["kp"]; ?></td>
                            <td><?php echo $d["lp"]; ?></td>
                            <td><?php echo $d["ls"]; ?></td>
                            <td><?php echo $d["rk"]; ?></td>
                            <td><?php echo $d["ln2"]; ?></td>
                            <td><?php echo $d["bp2"]; ?></td>
                            <td><?php echo $d["bu2"]; ?></td>
                            <td><?php echo $d["bi2"]; ?></td>
                            <td><?php echo $d["kd2"]; ?></td>
                            <td><?php echo $d["ln3"]; ?></td>
                            <td><?php echo $d["jiwa"]; ?></td>
                            <td><?php echo $d["kk"]; ?></td>
                            <td><?php echo $d["mati"]; ?></td>
                            <td><?php echo $d["luka"]; ?></td>
                            <td><?php echo $d["unit"]; ?></td>
                            <td><?php echo $d["luas_area"]; ?></td>
                            <td><?php echo $d["taksiran_rugi"]; ?></td>
                        </tr>

                    </tbody>
                <?php
                }
                ?>
            </table>
        </div>
        </br></br>
        <div class="row">
            <div class="col-md-12">
                <h1>Keterangan</h1>
            </div>
        </div>
        </br>
        <div class="row">
            <div class="col-md-4">
                <h3>Penyebab Kebakaran</h3>
                <ul>
                    <li>KP : Kompor</li>
                    <li>LP : Lampu</li>
                    <li>LS : Listrik</li>
                    <li>RK : Rokok</li>
                    <li>LN : Lain-lain</li>
                </ul>
            </div>
            <div class="col-md-4">
                <h3>Yang Terbakar</h3>
                <ul>
                    <li>BP : Bangunan Perumahan</li>
                    <li>BU : Bangunan Umum & Perdagangan</li>
                    <li>BI : Bangunan Industri</li>
                    <li>KD : Segala Jenis Kendaraan</li>
                    <li>LN : Lain-lain</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="importData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Import Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data" action="upload_aksi3.php">
                    Pilih File:
                    <input name="filepegawai" type="file" required="required">
                    <input name="upload" type="submit" value="Import" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>

<?php
require 'footer.php';
?>