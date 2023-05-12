<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shoedb";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Ambil ID gambar dari parameter GET
$id = $_GET['id'];

// Ambil data gambar dari database
$sql = "SELECT * FROM tb_product WHERE id = $id";
$result = mysqli_query($conn, $sql);
if (!$result) {
    die("Error retrieving image data: " . mysqli_error($conn));
}
$row = mysqli_fetch_assoc($result);

// Decode isi kolom image dan tampilkan gambar
header("Content-type: " . $row['image_type']);
echo base64_decode($row['image']);

// Tutup koneksi dan keluar skrip
mysqli_close($conn);
exit;
?>
