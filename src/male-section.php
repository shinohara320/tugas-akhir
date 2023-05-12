<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Male Collection</title>
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/card-shoe.css">
    <link rel="stylesheet" href="../public/css/footer.css">
</head>
<body>
    <!-- navbar -->
    <nav>
      <ul>
          <div class="nav-left">
                  <img src="../public/images/logo-company.png" alt="logo">
          </div>
          <div class="nav-right">
                  <a href="homepage.php">HOMEPAGE</a>
                  <a href="contact.html">CONTACT</a>
          </div>
      </ul>
    </nav>
    <!-- detail product -->
    <h1 style="text-align: center;">NEW PICK</h1>
    <div class="newpick">
    <?php
    $koneksi = mysqli_connect("localhost","root", "", "shoedb");

    $ids = array(19,20,21);
    foreach ($ids as $id) {
        $query = "SELECT * FROM tb_product WHERE id = '$id'";
        $result = mysqli_query($koneksi, $query);
        $data = mysqli_fetch_array($result);
      
        echo '<div class="container" style="margin: 20px">
            <div class="card">
                <div class="imgBx">
                    <img src="show.php?id='.$id.'" alt="nike-air-shoe">
                </div>
                <div class="contentBx">
                    <h2>'.$data['name'].'</h2>
                    <div class="size">
                        <h3>Size :</h3>
                        <span>7</span>
                        <span>8</span>
                        <span>9</span>
                        <span>10</span>
                        </div>
                    <a href="detail-product.php?id='.$id.'">Cek Produk</a>
                    </div>
                    </div>
                    </div>';
        }
        mysqli_close($koneksi);
    ?>
    </div>
    <!-- card-product -->
    <h1 style="text-align: center;">Our Collection</h1>
    <div class="mini-card">
    <?php
    $koneksi = mysqli_connect("localhost","root", "", "shoedb");

    $ids = array(24,25,26,27,28,29,30,31,32,33);
    foreach ($ids as $id) {
        $query = "SELECT * FROM tb_product WHERE id = '$id'";
        $result = mysqli_query($koneksi, $query);
        $data = mysqli_fetch_array($result);
      
        echo '<div class="container page-wrapper">
        <div class="page-inner">
          <div class="row">
            <div class="el-wrapper">
              <div class="box-up">
                <img class="img" src="show.php?id='.$id.'" alt="">
                <div class="img-info">
                  <div class="info-inner">
                    <span class="p-name">'.$data['name'].'</span>
                    <span class="p-company">'.$data['category'].'</span>
                  </div>
                </div>
              </div>
      
              <div class="box-down">
                <div class="h-bg">
                  <div class="h-bg-inner"></div>
                </div>
      
                <a class="cart" href="detail-product.php?id='.$id.'">
                  <span class="price">Rp '.$data['price'].'</span>
                  <span class="add-to-cart">
                    <span class="txt">Cek Produk</span>
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
    </div>
      ';
        }
        mysqli_close($koneksi);
    ?>
    </div>
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
        <form action="">
            <input type="email" placeholder="Ketik email anda">
            <button type="submit">Ikuti!</button>
        </form>
    </div>
</div>
<!-- footer end -->
</body>
</html>