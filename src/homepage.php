<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/hero.css">
    <link rel="stylesheet" href="../public/css/testimoni.css">
    <link rel="stylesheet" href="../public/css/footer.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <!-- navbar -->
    <nav>
        <ul>
            <div class="nav-left">
                    <img src="../public/images/logo-company.png" alt="logo">
            </div>
            <div class="nav-right">
                    <a href="#">HOMEPAGE</a>
                    <a href="contact.html">CONTACT</a>
            </div>
        </ul>
    </nav>
    <!-- navbar end -->
    <!-- slider -->
    <div class="slider">
        <div class="slider-container">
            <div>
                <img src="show.php?id=3" style="width: 600px;" alt="Image 1">
            </div>
            <div>
                <img src="show.php?id=1" style="width: 600px;" alt="Image 2">
            </div>
            <div>
                <img src="show.php?id=19" style="width: 600px;" alt="Image 3">
            </div>
            <div>
                <img src="show.php?id=20" style="width: 600px;" alt="Image 4">
            </div>
            <div>
                <img src="show.php?id=34" style="width: 600px;" alt="Image 5">
            </div>
            <div>
                <img src="show.php?id=35" style="width: 600px;" alt="Image 6">
            </div>
        </div>
        <div class="prev" id="prev">&#10094;</div>
        <div class="next" id="next">&#10095;</div>
    </div>
    <h2>NEW ARIVALL</h2>
    <p style="width: 900px;margin: 10px auto;text-align: center;">Lorem ipsum dolor sit amet consectetur adipisicing 
    elit. Ducimus dignissimos incidunt molestias minus 
    perferendis illo ipsum voluptates minima harum veritatis 
    iste, laudantium dicta quos. Placeat vel accusamus maxime 
    fuga error.</p>
    <!-- slider end -->
    <!-- best-sell -->
    <div class="ads-container">
        <div class="left-side">
            <img src="show.php?id=19" alt="">
        </div>
        <div class="right-side">
            <img src="show.php?id=21" alt="">
            <img src="show.php?id=34" alt="">
        </div>
    </div>
    <!-- best-sell end -->
    <!-- section sale -->
    <div class="section-container">
        <div class="male-section">
            <img src="../public/images/nike-air.jpg" alt="">
            <div class="text-container">
                <h3>Male</h3>
                <a href="male-section.php">Shop</a>
            </div>
        </div>
        <div class="male-section">
            <img src="../public/images/nike-zoom.jpg" alt="">
            <div class="text-container">
                <h3>Female</h3>
                <a href="female-section.php">Shop</a>
            </div>
        </div>
        <div class="kids-section">
            <img src="../public/images/nike-idk.jpg" alt="">
            <div class="text-container">
                <h3>Kids</h3>
                <a href="kids-section.php">Shop</a>
            </div>
        </div>
    </div>
    <!-- section sale end -->
    <!-- testmoni -->
    <div class="container">
        <div class="card-carousel">
          <div class="card" id="1">
            <div class="image-container"></div>
            <p>Pengiriman cepat, Ramah konsumen</p>
          </div>
          <div class="card" id="2">
            <div class="image-container"></div>
            <p>Barang asli!</p>
          </div>
          <div class="card" id="3">
            <div class="image-container"></div>
            <p>mantapp</p>
          </div>  
          <div class="card" id="4">
            <div class="image-container"></div>
            <p>aseek</p>
          </div>
          <div class="card" id="5">
            <div class="image-container"></div>
            <h3>cahyadi</h3>
            <p>mantep</p>
          </div>
        </div>
        <a href="#" class="visuallyhidden card-controller">Carousel controller</a>
      </div>
    <!-- testmoni end -->
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
            <a href="#">Homepage</a>
            <a href="contact.html">Kontak Kami</a>
        </div>
        <div class="footer-subscribe">
            <h3>Subscribe!</h3>
            <p>masukan email anda untuk menerima penawaran promo dan giveaway di waktu tertentu!</p>
            <form action="">
                <input type="email" placeholder="Ketik email anda">
                <button type="submit">Ikuti!</button>
            </form>
        </div>
    </div>
    <!-- footer end -->
    <script src="../public/js/hero.js"></script>
    <script src="../public/js/testimoni.js"></script>
</body>
</html>