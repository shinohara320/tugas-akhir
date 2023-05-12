<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shoedb";

$koneksidb = mysqli_connect($servername, $username, $password, $dbname);

if ($koneksidb) {
    echo "Sukses Terhubung <br>";
} else {
    echo "Gagal Terhubung";
}

// Ambil data dari form
$name = mysqli_real_escape_string($koneksidb, $_POST['name']);
$price = mysqli_real_escape_string($koneksidb, $_POST['harga']);
$category = mysqli_real_escape_string($koneksidb, $_POST['category']);
$desc = mysqli_real_escape_string($koneksidb, $_POST['deskripsi']);
$image = base64_encode(file_get_contents($_FILES['image']['tmp_name']));

// Query untuk memasukkan data ke dalam tabel tb_product
$sql = "INSERT INTO tb_product (name, price, category, description, image) VALUES ('$name', '$price', '$category', '$desc', '$image')";

if ($koneksidb->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Error: " . $sql . "<br>" . $koneksidb->error;
}

mysqli_close($koneksidb);
?>
