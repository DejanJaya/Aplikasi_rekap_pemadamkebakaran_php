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
    $nk1 = $data->val($a, 16);
    $nk2 = $data->val($a, 17);
    $nk3 = $data->val($a, 18);
    $nk4 = $data->val($a, 19);
    $nk5 = $data->val($a, 20);
    $nk6 = $data->val($a, 21);
    $nk7 = $data->val($a, 22);
    $jumlah_unit = $data->val($a, 23);
    $jumlah_sdm = $data->val($a, 24);
    $luka = $data->val($a, 25);
    $tewas = $data->val($a, 26);
    $luka_w = $data->val($a, 27);
    $tewas_w = $data->val($a, 28);
    $luas_area = $data->val($a, 29);
    $bp2 = $data->val($a, 30);
    $bup2 = $data->val($a, 31);
    $bi2 = $data->val($a, 32);
    $kd2 = $data->val($a, 33);
    $ln2 = $data->val($a, 34);
    $taksiran_rugi = $data->val($a, 35);

    // input data ke database (table data_pegawai)
    mysqli_query($koneksi, "INSERT INTO penyelamatan VALUES('','$bulan','$frek','$i','$ii','$iii','$iv','$v','$vi','$vii','$viii','$bp','$bup','$bi','$kd','$ln','$nk1','$nk2','$nk3',
    '$nk4','$nk5','$nk6','$nk7','$jumlah_unit','$jumlah_sdm','$luka','$tewas','$luka_w','$tewas_w','$luas_area','$bp2','$bup2','$bi2','$kd2','$ln2','$taksiran_rugi')");
    $berhasil++;
}

// hapus kembali file .xls yang di upload tadi
unlink($_FILES['filepegawai']['name']);

// alihkan halaman ke index.php
header("location:penyelamatan.php?berhasil=$berhasil");
?>