<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shoedb";

$koneksidb = mysqli_connect($servername, $username, $password, $dbname);

if ($koneksidb) {
    echo"Sukses Terhubung <br>";
} else {
    echo"Gagal Terhubung";
}

$name = $_POST["name"];
$phone = $_POST["phone-number"];
$birthday = $_POST["birthday"];
$email = $_POST["email"];
$password = $_POST["password"];
$gender = $_POST["gender"];

$sql = "INSERT INTO tb_member (name,phone,birthday,email,password, gender)
VALUES ('$name','$phone','$birthday','$email','$password','$gender')";

if (mysqli_query($koneksidb, $sql)) {
    echo "Data berhasil disimpan";
} else {
    echo "Terjadi kesalahan: " . $sql . "<br>" . mysqli_error($koneksidb);
}

mysqli_close($koneksidb);
