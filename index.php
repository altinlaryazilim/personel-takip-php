<?php
// functions.php dosyasını dahil ediyoruz
require_once('includes/functions.php');

// Tüm personel bilgilerini alıyoruz
$employees = getEmployees();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personel Takip Sistemi</title>
</head>
<body>
    <h1>Personel Listesi</h1>
    <ul>
        <?php foreach ($employees as $employee): ?>
            <li><?php echo $employee['name']; ?></li>
        <?php endforeach; ?>
    </ul>
    <a href="add_employee.php">Yeni Personel Ekle</a>
</body>
</html>
