<?php

// koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "aplikasi_fahmi");


function registrasi($data)
{
    global $koneksi;

    $email = strtolower(stripslashes($data["email"]));
    $password = mysqli_real_escape_string($koneksi, $data["password"]);
    $password2 = mysqli_real_escape_string($koneksi, $data["password2"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($koneksi, "SELECT email FROM user WHERE email = '$email'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
				alert('username sudah terdaftar!')
		      </script>";
        return false;
    }


    // cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
				alert('konfirmasi password tidak sesuai!');
		      </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan userbaru ke database
    mysqli_query($koneksi, "INSERT INTO user VALUES('', '$email', '$password')");

    return mysqli_affected_rows($koneksi);
}
