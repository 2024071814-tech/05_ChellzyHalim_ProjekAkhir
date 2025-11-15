<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form
$name = $_POST["name"];
$country   = $_POST["country"];
$menu1   = $_POST["menu1"];
$menu2   = $_POST["menu2"];
$menu3   = $_POST["menu3"];
$mealtime   = $_POST["mealtime"];
$review   = $_POST["review"];

// menginput data ke database
mysqli_query($koneksi,"insert into isidata (name, country, menu1, menu2, menu3, mealtime, review) values('$name','$country','$menu1','$menu2','$menu3','$mealtime','$review')");

// mengalihkan halaman kembali ke index.php
header("location:showdata.php");
?>