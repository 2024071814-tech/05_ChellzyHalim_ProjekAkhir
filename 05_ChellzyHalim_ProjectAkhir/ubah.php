<?php
//koneksi database
include 'koneksi.php';

//menangkap data yang dikirim dari form
$id = $_POST['id'];
$name = $_POST['name'];
$country = $_POST['country'];
$menu1 = $_POST['menu1'];
$menu2 = $_POST['menu2'];
$menu3 = $_POST['menu3'];
$mealtime = $_POST['mealtime'];
$review = $_POST['review'];
    
//update data ke database
mysqli_query($koneksi,"update isidata set name='$name', country='$country', menu1='$menu1', menu2='$menu2', menu3='$menu3', mealtime='$mealtime', review='$review' where id='$id'");

//mengendalikan halaman kembali ke index.php
header("location:showdata.php");
// exit;
?>