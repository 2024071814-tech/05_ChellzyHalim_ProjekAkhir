<?php
//area php (backend)
session_start();
include 'koneksi.php';
//tangkap data dari bagian frontend
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    //cek data di database
    $query = "SELECT * FROM regist WHERE email='$email'";
    $result = mysqli_query($koneksi, $query);
    //cek apakah email ditemukan
    $regist=mysqli_fetch_assoc($result); 
    // ???
    if($regist && password_verify($password, $regist['password'])){
        //jika email dan password benar
        $_SESSION['email'] = $regist['email'];
        $_SESSION['name']= $regist['name'];
        header("Location: inputdata.php");
    } else {
        //jika email atau password salah
        echo "<script>alert('Email atau password salah!');</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRr8Szl9KUcaryGTAjvSVPFq5aUFkDth-NMQ&s">
    <link rel = "stylesheet" href="logins.css?v=<?= time()?>">
    <!-- buat style nanti -->
</head>
<body>
    <!-- header -->
    <div id="nav">
        <div id="links">
            <!-- kiri atas lp au -->
            <a href="landingpage.html" class="linknav">Landing Page </a>
            <a href="aboutus.html" class="linknav">About Us </a>
        </div>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRr8Szl9KUcaryGTAjvSVPFq5aUFkDth-NMQ&s" id="logo" alt="logo">
        <a href="login.php" class="cartparent">
                <!-- login here button kanan atas -->
            <img src="https://www.freeiconspng.com/uploads/basket-cart-icon-27.png" class="cart" alt="">
            Login Here!
        </a>
    </div>


    <div id="form">
        <div id="title">Login</div>
    <!-- pembuatan form dan mengirimkan data ke backend -->
    <form action="" method="post">
        <table>
            <tr class="art">
                <td>
                    <label for="email">Email</label>
                </td>
                <td>:</td>
                <td><input type="text" name="email" placeholder="Enter your email" required></td>
            </tr>
            <tr class="art">
                <td>
                    <label for="password">Password</label>
                </td>
                <td>:</td>
                <td><input type="password" name="password" placeholder="Enter your password" required></td>
            </tr>
            
            <tr>
                <td colspan="3" style="text-align: center;">
                    <!-- button submit -->
                    <button type="submit" name="login" class="order">submit</button>
                </td>
            </tr>
        </table>
    </form>
    <div id="little">Don't have an account? <a href="regist.php">Register here</a></div>
    </div>
    <footer id="footer">
        <div>Burger Queen <sup>&copy</sup> 2025</div>
        <div id="contact">
            <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg> 151972</div>
            <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7 .3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2 .4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"/></svg> burger@queen.us</div>
        </div>
        <div class="tm">
            <a href="">About Us</a> | 
            <a href="">Privacy and Policies</a> | 
            <a href="">Terms and Conditions</a> | 
            TM & © 2025 Burger Queen Corporation. Used Under License. All rights reserved.
        </div>
        <div class="tm">
            <div>
                Chellzy Halim <br>
                XII-5/05 <br>
            </div>
        </div>
    </footer>
</body>
</html>