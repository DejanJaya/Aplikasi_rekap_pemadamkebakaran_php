<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'sidebar.php';

require 'navbar.php';
?>

<h1 style="text-align:center" class="h3 mb-2 text-gray-800">LAPORAN BENCANA KEBAKARAN TAHUN ANGGARAN 2020</h1>
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
        <a href="" type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#importData">
            <img src="assets/img/excel.png" width="40px">
            Import Data
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table style="text-align:center" class="table table-bordered" id="dataTable" width="100%" cellspacing="0" cellpadding="0">
                <thead>
                    <tr>
                        <th rowspan="3">No.</th>
                        <th rowspan="3">Bulan</th>
                        <th rowspan="3">Frek</th>
                        <th rowspan="2" colspan="8">Wilayah Kecamatan Sektor</th>
                        <th rowspan="2" colspan="5">Obyek Bencana</th>
                        <th rowspan="2" colspan="5">Dugaan Penyebab</th>
                        <th rowspan="3">Jumlah Unit</th>
                        <th rowspan="3">Jumlah SDM</th>
                        <th colspan="4">Kerugian Jiwa</th>
                        <th colspan="6">Kerugian Harta Benda</th>
                        <th rowspan="3">Taksiran Kerugian (Rp)</th>

                    </tr>

                    <tr>
                        <th colspan="2">Petugas</th>
                        <th colspan="2">warga</th>
                        <th rowspan="2">Luas Area</th>
                        <th colspan="5">Jumlah Obyek Bencana</th>
                    </tr>
                    <tr>
                        <th>I</th>
                        <th>II</th>
                        <th>III</th>
                        <th>IV</th>
                        <th>V</th>
                        <th>VI</th>
                        <th>VII</th>
                        <th>VIII</th>
                        <th>BP</th>
                        <th>BUP</th>
                        <th>BI</th>
                        <th>KD</th>
                        <th>LN</th>
                        <th>KP</th>
                        <th>LP</th>
                        <th>LS</th>
                        <th>RK</th>
                        <th>LN</th>
                        <th>Luka</th>
                        <th>Tewas</th>
                        <th>Luka</th>
                        <th>Tewas</th>
                        <th>BP</th>
                        <th>BUP</th>
                        <th>BI</th>
                        <th>KD</th>
                        <th>LN</th>
                    </tr>
                </thead>
                <?php
                include 'functions.php';
                $no = 1;
                $data = mysqli_query($koneksi, "SELECT * FROM kebakaran");
                foreach ($data as $d) {
                ?>
                    <tbody>

                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $d["bulan"]; ?></td>
                            <td><?php echo $d["frek"]; ?></td>
                            <td><?php echo $d["i"]; ?></td>
                            <td><?php echo $d["ii"]; ?></td>
                            <td><?php echo $d["iii"]; ?></td>
                            <td><?php echo $d["iv"]; ?></td>
                            <td><?php echo $d["v"]; ?></td>
                            <td><?php echo $d["vi"]; ?></td>
                            <td><?php echo $d["vii"]; ?></td>
                            <td><?php echo $d["viii"]; ?></td>
                            <td><?php echo $d["bp"]; ?></td>
                            <td><?php echo $d["bup"]; ?></td>
                            <td><?php echo $d["bi"]; ?></td>
                            <td><?php echo $d["kd"]; ?></td>
                            <td><?php echo $d["ln"]; ?></td>
                            <td><?php echo $d["kp"]; ?></td>
                            <td><?php echo $d["lp"]; ?></td>
                            <td><?php echo $d["ls"]; ?></td>
                            <td><?php echo $d["rk"]; ?></td>
                            <td><?php echo $d["ln2"]; ?></td>
                            <td><?php echo $d["jumlah_unit"]; ?></td>
                            <td><?php echo $d["jumlah_sdm"]; ?></td>
                            <td><?php echo $d["luka"]; ?></td>
                            <td><?php echo $d["tewas"]; ?></td>
                            <td><?php echo $d["luka_w"]; ?></td>
                            <td><?php echo $d["tewas_w"]; ?></td>
                            <td><?php echo $d["luas_area"]; ?></td>
                            <td><?php echo $d["bp2"]; ?></td>
                            <td><?php echo $d["bup2"]; ?></td>
                            <td><?php echo $d["bi2"]; ?></td>
                            <td><?php echo $d["kd2"]; ?></td>
                            <td><?php echo $d["ln3"]; ?></td>
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
                <form method="post" enctype="multipart/form-data" action="upload_aksi.php">
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