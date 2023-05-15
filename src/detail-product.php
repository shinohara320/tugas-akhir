<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Male</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/css/detail-product.css">
</head>
<body>
    <nav>
    <ul>
        <div class="nav-left">
            <a href="homepage.php">
              <img src="../assets/images/logo-company.png" alt="logo">
            </a>
        </div>
        <div class="nav-right">
            <a href="homepage.php">HOMEPAGE</a>
            <a href="contact.php">CONTACT</a>
        </div>
    </ul>
    </nav>
    <div class="page-container">
        <?php
            $koneksi = mysqli_connect("localhost","root", "", "shoedb");
            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                exit();
            }

            // ambil data produk dari basis data
            $id_produk = $_GET['id'];
            $query = "SELECT * FROM tb_product WHERE id = '$id_produk'";
            $result = mysqli_query($koneksi, $query);
            $data = mysqli_fetch_array($result);
            // menampilkan data produk dalam struktur HTML yang sesuai
            echo '<div class="card-shoe">';
            echo '<img src="show.php?id=' . $id_produk . '" alt="" style="width: 70%; margin: 30px 50px;">';
            echo '</div>';
            echo '<div class="desc-product">
            <div class="title">
                <h1>' . $data['name'] . '</h1>
            </div>
            <div class="price">
                <h2>Rp' . $data['price'] . '</h2>
            </div>
            <div class="desc">
                <p>' . $data['description'] . '</p>
            </div>
            <div class="category">
                <h3>' . $data['category'] . '</h3>
            </div>
            <a href="contact.php">Pesan</a>
            </div>';
            echo '</div>';
            
            mysqli_close($koneksi);
            ?>
    </div>
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
</body>
</html>
