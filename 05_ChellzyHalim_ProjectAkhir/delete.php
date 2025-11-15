<?php
//koneksi database
include 'koneksi.php';

//menangkap data id yang dikirim dari url
$id = $_GET['id'];

//menghapus data dari database
mysqli_query($koneksi,"delete from isidata where id='$id'");

//mengalihkan halaman kembali ke showdata.php
header("location:showdata.php");

?>