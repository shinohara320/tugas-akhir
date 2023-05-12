<?php
       session_start();
       
       if(!isset($_SESSION["login"]) || $_SESSION["login"] !== true){
           header("location: login.php?notloggedin=true");
           exit;
       }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/footer.css">
    <link rel="stylesheet" href="../public/css/upload-img.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <div class="nav-left">
                <img src="../public/images/logo-company.png" alt="logo">
            </div>
            <div class="nav-right">
                <a href="homepage.php">HOMEPAGE</a>
                <a href="contact.html">CONTACT</a>
                <a href="logout.php">LOGOUT</a>
            </div>
        </ul>
    </nav>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="judul-produk">Judul Produk</label>
        <input type="text" id="judul-produk" name="name" required>

        <label for="harga-produk">Harga Produk</label>
        <input type="text" id="harga-produk" name="harga" required>
        
        <label for="category">Jenis Produk</label>
        <select id="category" name="category" required>
            <option></option>
            <option value="Male Shoe">Male Shoe</option>
            <option value="Female Shoe">Female Shoe</option>
            <option value="Kids Shoe">Kids Shoe</option>
        </select>

        <label for="deskripsi">Deskripsi</label>
        <textarea name="deskripsi" id="deskripsi" required></textarea>
          
        <label for="img">Gambar Produk</label>
        <input type="file" id="image" name="image" required>
    
        <button type="submit">Upload</button>
    </form>
    <!-- footer -->
    <div class="footer-container">
    <div class="footer-address">
        <h3>Alamat</h2>
        <p>
            GR8M+6G5, Jalan Aneka Tambang, Trikora, Palam, 
            Kecamatan Cempaka, Kota Banjar Baru, Kalimantan Selatan 
        </p>
        <p>
            70114
        </p>
        <p>
            08123456789
        </p>
    </div>
    <div class="footer-navigation">
        <h3>Navigasi</h3>
        <a href="homepage.php">Homepage</a>
        <a href="contact.html">Kontak Kami</a>
    </div>
    <div class="footer-subscribe">
        <h3>Subscribe!</h3>
        <p>masukan email anda untuk menerima penawaran promo dan giveaway di waktu tertentu!</p>
    </div>
    </div>
<!-- footer end -->
</body>
</html>