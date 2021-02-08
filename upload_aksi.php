<!-- import excel ke mysql -->
<!-- www.malasngoding.com -->

<?php
// menghubungkan dengan koneksi
include 'functions.php';
// menghubungkan dengan library excel reader
include "excel_reader2.php";
?>

<?php
// upload file xls
$target = basename($_FILES['filepegawai']['name']);
move_uploaded_file($_FILES['filepegawai']['tmp_name'], $target);

// beri permisi agar file xls dapat di baca
chmod($_FILES['filepegawai']['name'], 0777);

// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['filepegawai']['name'], false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index = 0);

// jumlah default data yang berhasil di import
$berhasil = 0;
for ($a = 4; $a <= $jumlah_baris; $a++) {

    // menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
    $bulan     = $data->val($a, 1);
    $frek   = $data->val($a, 2);
    $i  = $data->val($a, 3);
    $ii  = $data->val($a, 4);
    $iii  = $data->val($a, 5);
    $iv  = $data->val($a, 6);
    $v  = $data->val($a, 7);
    $vi  = $data->val($a, 8);
    $vii  = $data->val($a, 9);
    $viii  = $data->val($a, 10);
    $bp = $data->val($a, 11);
    $bup = $data->val($a, 12);
    $bi = $data->val($a, 13);
    $kd = $data->val($a, 14);
    $ln = $data->val($a, 15);
    $kp = $data->val($a, 16);
    $lp = $data->val($a, 17);
    $ls = $data->val($a, 18);
    $rk = $data->val($a, 19);
    $ln2 = $data->val($a, 20);
    $jumlah_unit = $data->val($a, 21);
    $jumlah_sdm = $data->val($a, 22);
    $luka = $data->val($a, 23);
    $tewas = $data->val($a, 24);
    $luka_w = $data->val($a, 25);
    $tewas_w = $data->val($a, 26);
    $luas_area = $data->val($a, 27);
    $bp2 = $data->val($a, 28);
    $bup2 = $data->val($a, 29);
    $bi2 = $data->val($a, 30);
    $kd2 = $data->val($a, 31);
    $ln3 = $data->val($a, 32);
    $taksiran_rugi = $data->val($a, 33);

    // input data ke database (table data_pegawai)
    mysqli_query($koneksi, "INSERT INTO kebakaran VALUES('','$bulan','$frek','$i','$ii','$iii','$iv','$v','$vi','$vii','$viii','$bp','$bup','$bi','$kd','$ln','$kp','$lp','$ls',
    '$rk','$ln2','$jumlah_unit','$jumlah_sdm','$luka','$tewas','$luka_w','$tewas_w','$luas_area','$bp2','$bup2','$bi2','$kd2','$ln3','$taksiran_rugi')");
    $berhasil++;
}

// hapus kembali file .xls yang di upload tadi
unlink($_FILES['filepegawai']['name']);

// alihkan halaman ke index.php
header("location:kebakaran.php?berhasil=$berhasil");
?>