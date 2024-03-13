<?php
// functions.php dosyasını dahil ediyoruz
require_once('includes/functions.php');

// Form gönderildiğinde
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan gelen verileri alıyoruz
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $start_date = $_POST['start_date'];

    // Yeni personeli veritabanına eklemek için işlevi çağırıyoruz
    addEmployee($name, $surname, $start_date);

    // Yönlendirme yapabiliriz veya bir mesaj gösterebiliriz
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yeni Personel Ekle</title>
</head>
<body>
    <h1>Yeni Personel Ekle</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="name">Ad:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="surname">Soyad:</label>
        <input type="text" id="surname" name="surname" required><br><br>
        <label for="start_date">İşe Başlama Tarihi:</label>
        <input type="date" id="start_date" name="start_date" required><br><br>
        <input type="submit" value="Kaydet">
    </form>
    <a href="index.php">Ana Sayfa</a>
</body>
</html>
