<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Data</title>
    <link rel="icon" type="image/x-icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRr8Szl9KUcaryGTAjvSVPFq5aUFkDth-NMQ&s">
    <link rel="stylesheet" href="show.css?v=<?= time()?>">
</head>
<body>
    <!-- header -->
    <div id="nav">
        <div id="links">
            <!-- kiri atas lp au -->
            <a href="inputdata.php" class="linknav">Input Data </a>
            <a href="showdata.php" class="linknav">Show Data</a>
        </div>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRr8Szl9KUcaryGTAjvSVPFq5aUFkDth-NMQ&s" id="logo" alt="logo">
        <a href="landingpage.html" class="cartparent">
                <!-- login here button kanan atas -->
            <img src="https://www.freeiconspng.com/uploads/basket-cart-icon-27.png" class="cart" alt="">
            Logout
        </a>
    </div>
    

    <!-- kayak index.php nya mahasiswa -->
    <div id="form">
        <a href="inputdata.php">+ ADD DATA</a>
        <div id="title">Customers' Data</div>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Country</th>
                <th>Menu 1</th>
                <th>Menu 2</th>
                <th>Menu 3</th>
                <th>Mealtime</th>
                <th>Review</th>
                <th>OPSI</th>
            </tr>
            <?php
            include 'koneksi.php';
            $no = 1;
            $data=mysqli_query($koneksi,"select * from isidata");
            while($d = mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['name']; ?></td>
                    <td><?php echo $d['country']; ?></td>
                    <td><?php echo $d['menu1']; ?></td>
                    <td><?php echo $d['menu2']; ?></td>
                    <td><?php echo $d['menu3']; ?></td>
                    <td><?php echo $d['mealtime']; ?></td>
                    <td><?php echo $d['review']; ?></td>
                    <td>
                        <a href="update.php?id=<?php echo $d['id']; ?>">UPDATE</a>
                        <a href="delete.php?id=<?php echo $d['id']; ?>">DELETE</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
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