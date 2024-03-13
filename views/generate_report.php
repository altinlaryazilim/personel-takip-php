<?php
// functions.php dosyasını dahil ediyoruz
require_once('includes/functions.php');

// Raporu oluşturmak için işlevi çağırıyoruz
$report = generateReport();

// Raporu ekrana yazdırıyoruz
echo "<h1>Personel Performans Raporu</h1>";
echo "<table border='1'>";
echo "<tr><th>Personel</th><th>Toplam Çalışma Saati (saat)</th></tr>";
foreach ($report as $employee) {
    echo "<tr>";
    echo "<td>".$employee['name']."</td>";
    echo "<td>".$employee['total_hours']."</td>";
    echo "</tr>";
}
echo "</table>";
?>

<a href="index.php">Ana Sayfa</a>
