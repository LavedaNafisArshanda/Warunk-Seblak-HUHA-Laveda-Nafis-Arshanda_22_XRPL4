<?php
session_start();

$connect=mysqli_connect("localhost","root","","db_beli");

$nama_costumer=$_POST['nama_costumer'];
$no_meja=$_POST['no_meja'];
$no_tlp=$_POST['no_tlp'];

$input="INSERT INTO beli(nama_costumer, no_meja, no_tlp)
        VALUES ('$nama_costumer', '$no_meja', '$no_tlp')";
$hasil=mysqli_query($connect, $input);
if (!$hasil) {
    echo "Gagal tambah data";
} else {
    include 'finish.php';
}
?>