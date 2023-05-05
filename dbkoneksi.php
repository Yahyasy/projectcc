<?php
$host = "localhost";
$dbname = "ecommerce";
$username = "root";
$password = "";

// buat koneksi PDO, menggunakan try catch
try {
    // buat objek koneksi yang di dalam nya ada parameter berupa
    // variable host, dbname, username dan password
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "<h1>koneksi database berhasil</h1>";
} catch (PDOException $e) {
    echo "database tidak terhubung : " .$e->getMessage();
}
?>