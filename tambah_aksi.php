<?php

// koneksi

include "koneksi.php";

// menangkap data dari form

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];

// menginput ke database

mysqli_query($koneksi,"insert into mahasiswa values('','$nama','$nim','$alamat')");

// mengalihkan ke halaman index.php
header("location:index.php");

?>