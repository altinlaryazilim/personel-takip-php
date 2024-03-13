<?php
// db_connection.php dosyasını dahil ediyoruz
require_once('db_connection.php');

// Tüm personel bilgilerini getiren bir işlev
function getEmployees() {
    global $conn; // Veritabanı bağlantısını kullanmak için global olarak tanımlıyoruz

    // SQL sorgusunu hazırlıyoruz
    $sql = "SELECT * FROM employees";

    // Sorguyu çalıştırıyoruz
    $result = $conn->query($sql);

    // Sorgu sonucunu kontrol ediyoruz
    if ($result->num_rows > 0) {
        // Sonuçları döndürüyoruz
        return $result->fetch_all(MYSQLI_ASSOC);
    } else {
        // Sonuç yoksa boş bir dizi döndürüyoruz
        return array();
    }
}
?>
