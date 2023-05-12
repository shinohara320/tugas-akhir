<?php
    session_start();
    include "koneksi.php";
    $user = [
    	'email' => $_POST['email'],
    	'password' => $_POST['password'],
    ];
    $query = "select * FROM tb_member WHERE email = ? and password = ? limit 1";
    $stmt = $mysqli->stmt_init();
    $stmt->prepare($query);
    $stmt->bind_param('ss', $user['email'], $user['password']);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_array(MYSQLI_NUM);
        if($row != null){
        	$_SESSION['login'] = true;
        	$_SESSION['email'] =  $user['email'];
        	$_SESSION['message']  = 'Berhasil login ke dalam sistem.';
        	header("Location: upload-shoe.php");
        }else{
        	$_SESSION['error'] = 'Username dan password anda tidak ditemukan.';
        	header("Location: login.php");
        }
?>