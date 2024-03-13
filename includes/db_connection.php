<?php
$servername = "localhost";
$username = "worl_personel";
$password = "BuRSe@vi7";
$database = "personnel_tracker_db";

// Bağlantı oluşturma
$conn = new mysqli($servername, $username, $password, $database);

// Bağlantıyı kontrol etme
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}
?>
