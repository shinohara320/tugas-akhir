<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/contact.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <title>Document</title>
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
                    <a href="homepage.php">HOMEPAGE</a>
                    <a href="contact.php">CONTACT</a>
            </div>
        </ul>
      </nav>
    <!-- navbar end -->
    <!-- form -->
    <form>
        <div class="first">
            <label for="name">Name</label>
            <input id="name" type="text">
        </div>
        <div class="email">
                    <label for="email">Email</label>
                    <input id="email" type="text">
        </div>
        <div class="phone">
                    <label for="phone">Phone Number</label>
                    <input id="phone" type="text">
        </div>
        <div class="subject">
            <label for="subject">Subject</label>
            <select name="" id="subject">
                <option value="Collaboration">Pemesanan</option>
                <option value="Discussion">Diskusi</option>
                <option value="Hiring">Bisnis</option>
            </select>
        </div>
        <div class="adress">
                    <label for="address">Adress</label>
                    <textarea name="" id="address"style="resize: none;"></textarea>
        </div>
        <div class="btn">
            <button type="button" onclick="getData()">Submit Here</button>
        </div>
        

    </form>
    <!-- form end -->
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
        <a href="contact.php">Kontak Kami</a>
        <a href="male-section.php">Man</a>
        <a href="female-section.php">Woman</a>
        <a href="kids-section.php">Kids</a>
    </div>
    <div class="footer-subscribe">
        <h3>Subscribe!</h3>
        <p>masukan email anda untuk menerima penawaran promo dan giveaway di waktu tertentu!</p>
    </div>
    </div>
<!-- footer end -->
<script src="../assets/js/contact.js"></script>
</body>
</html>