<?php

$host = "localhost";
$db_name = "db_app_5731";
$username_db = "root"; 
$password_db = "";
try {$conn = new PDO("mysql:host={$host};dbname={$db_name}", $username_db, $password_db);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch(PDOException $exception) {
// Tampilkan pesan error jika koneksi gagal
die("Koneksi error: " . $exception->getMessage());
}
?>