<?php
include 'config.php';
include 'layout/navbar.php';
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

if ($page == 'home') {
    include 'pages/home.php';
} elseif ($page == 'tambah_siswa') {
    include 'pages/tambah_siswa.php';
} elseif ($page == 'tentang') {
    include 'pages/tentang.php';
} elseif ($page == 'feli') {
    include 'pages/feli.php'; 
} elseif ($page == 'ota') {
    include 'pages/ota.php';  
} elseif ($page == 'gabut') {
    include 'pages/gabut.php';
} elseif ($page == 'galery') {
    include 'pages/galery.php';         
} else {
    echo "<p>halaman tidak ditemukan.</p>";
  
}
include 'layout/footer.php';
