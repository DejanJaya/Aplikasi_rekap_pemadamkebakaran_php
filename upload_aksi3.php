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
for ($a = 3; $a <= $jumlah_baris; $a++) {

    // menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
    $bulan     = $data->val($a, 1);
    $jumlah_kejadian   = $data->val($a, 2);
    $bp = $data->val($a, 3);
    $bu = $data->val($a, 4);
    $bi = $data->val($a, 5);
    $kd = $data->val($a, 6);
    $ln = $data->val($a, 7);
    $kp = $data->val($a, 8);
    $lp = $data->val($a, 9);
    $ls = $data->val($a, 10);
    $rk = $data->val($a, 11);
    $ln2 = $data->val($a, 12);
    $bp2 = $data->val($a, 13);
    $bu2 = $data->val($a, 14);
    $bi2 = $data->val($a, 15);
    $kd2 = $data->val($a, 16);
    $ln3 = $data->val($a, 17);
    $jiwa = $data->val($a, 18);
    $kk = $data->val($a, 19);
    $mati = $data->val($a, 20);
    $luka = $data->val($a, 21);
    $unit = $data->val($a, 22);
    $luas_area = $data->val($a, 23);
    $taksiran_rugi = $data->val($a, 24);

    // input data ke database (table data_pegawai)
    mysqli_query($koneksi, "INSERT INTO rekap VALUES('','$bulan','$jumlah_kejadian','$bp','$bu','$bi','$kd','$ln','$kp','$lp','$ls',
    '$rk','$ln2','$bp2','$bu2','$bi2','$kd2','$ln3','$jiwa','$kk','$mati','$luka','$unit','$luas_area','$taksiran_rugi')");
    $berhasil++;
}

// hapus kembali file .xls yang di upload tadi
unlink($_FILES['filepegawai']['name']);

// alihkan halaman ke index.php
header("location:rekap.php?berhasil=$berhasil");
?>