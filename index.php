<?php

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}


require 'functions.php';


require 'sidebar.php';

require 'navbar.php';
?>

<div class="card shadow mb-4">
    <div class="card-header py-3">

    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <center><img src="assets/img/logo.jpeg" width="180px" alt=""></center>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h1 style="text-align:center">Visi</h1>
                <hr>
                <ol type="1">
                    <li>Terciptanya rasa aman masyarakat dari kebakaran dan bencana lain</li>
                </ol>
            </div>
            <div class="col-md-6">
                <h1 style="text-align:center">Misi</h1>
                <hr>
                <ol type="1">
                    <li>Memberikan pelayanan prima dalam bidang pencegahan dan pemadaman kebakaran, serta penyelamatan jiwa pada kebakaran dan  kejadian bencana.</li>
                    <li>Meningkatkan ketahanan lingkungan bersama masyarakat</li>
                    <li>Meningkatkan kerjasama dengan instansi terkait</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<?php
require 'footer.php';
?>