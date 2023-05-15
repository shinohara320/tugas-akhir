<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/hero.css">
    <link rel="stylesheet" href="../assets/css/testimoni.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <!-- navbar -->
    <nav>
        <ul>
            <div class="nav-left">
            <a href="homepage.php">
              <img src="../assets/images/logo-company.png" alt="logo">
            </a>
            </div>
            <div class="nav-right">
                    <a href="#">HOMEPAGE</a>
                    <a href="contact.php">CONTACT</a>
            </div>
        </ul>
    </nav>
    <!-- navbar end -->
    <!-- slider -->
    <h2 style="text-align:center; margin:50px 0;font-weight: 700;font-size:36px">All You NEED!</h2>
    <p style="text-align:center;padding: 0 60px;">Discover the perfect fit for every occasion with our wide range of shoes! 
    We've got everything you need to complete your shoe collection. 
    From trendy sneakers to classy loafers, we've got it all. Shop now and
    experience the ultimate convenience of having all your shoe needs 
    in one place!</p>
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
    <!-- slider end -->
    <!-- best-sell -->
    <h2 style="text-align:left; margin:40px 0 40px 50px;font-weight: 700;font-size:36px">HOT Sale!</h2>
    <p style="text-align:left; padding: 0 600px 0 50px;">
    Get ready to turn heads with our hot selling collection - 
    the perfect blend of style and comfort! Don't miss out on owning 
    the most sought-after shoes in the market. Shop now and be the 
    envy of all your friends!
    </p>
    <div class="ads-container" >
        <div class="left-side" >
            <img src="show.php?id=19" alt="">
            <div class="right-txt" style="position: absolute; top: 1300px;">
                <h3>Air Jordan Retro 6</h3>
                <a href="detail-product.php?id=19">Order</a>
            </div>
        </div>
        <div class="right-side">
            <div class="right-1" >
                <img src="show.php?id=21" alt="">
                <div id="txt-1" style="position: absolute; top: 1100px;">
                    <h3>Nike Air Max Penny</h3>
                    <a href="detail-product.php?id=21">Order</a>
                </div>
            </div>
            <div class="right-2">
                <img src="show.php?id=34" alt="">
                <div id="txt-2" style="position: absolute; top: 1480px; right: 250px;">
                    <h3>Nike Dunk Low</h3>
                    <a href="detail-product.php?id=34">Order</a>
                </div>
            </div>
        </div>
    </div>
    <!-- best-sell end -->
    <!-- section sale -->
    <h2 id="txt-category">For EVERYONE!</h2>
    <p style="text-align:center; padding: 0 60px;">
    Find the perfect shoes for everyone with our wide range of 
    sizes, styles, and colors! Our collection offers trendy and comfortable 
    shoes for kids, men, and women, ensuring that everyone gets the perfect 
    fit!
    </p>
    <div class="section-container">
        <div class="male-section">
            <img src="../assets/images/nike-air.jpg" alt="">
            <div class="text-container">
                <h3>Man</h3>
                <a href="male-section.php">Shop</a>
            </div>
        </div>
        <div class="male-section">
            <img src="../assets/images/nike-zoom.jpg" alt="">
            <div class="text-container">
                <h3>Woman</h3>
                <a href="female-section.php">Shop</a>
            </div>
        </div>
        <div class="kids-section">
            <img src="../assets/images/nike-idk.jpg" alt="">
            <div class="text-container">
                <h3>Kids</h3>
                <a href="kids-section.php">Shop</a>
            </div>
        </div>
    </div>
    <!-- section sale end -->
    <!-- testmoni -->
    <h2 style="text-align:center; margin:40px 0;font-weight: 700;font-size:36px">What they said?</h2>
    <p style="text-align:center;padding: 0 60px;">
    Customer satisfaction is our top priority! We pride ourselves on providing exceptional service that keeps our customers coming back time and time again
    </p>
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
            <h3>Alamat</h3>
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
            <a href="contact.php">Kontak Kami</a>
            <a href="male-section.php">Man</a>
            <a href="female-section.php">Woman</a>
            <a href="kids-section.php">Kids</a>
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
    <script src="../assets/js/hero.js"></script>
    <script src="../assets/js/testimoni.js"></script>
</body>
</html>