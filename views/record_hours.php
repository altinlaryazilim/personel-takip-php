<?php
// functions.php dosyasını dahil ediyoruz
require_once('includes/functions.php');

// Form gönderildiğinde
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan gelen verileri alıyoruz
    $employee_id = $_POST['employee_id'];
    $entry_time = $_POST['entry_time'];
    $exit_time = $_POST['exit_time'];

    // Çalışma saatlerini kaydetmek için işlevi çağırıyoruz
    recordHours($employee_id, $entry_time, $exit_time);

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
    <title>Çalışma Saatlerini Kaydet</title>
</head>
<body>
    <h1>Çalışma Saatlerini Kaydet</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="employee_id">Personel Seçin:</label>
        <select id="employee_id" name="employee_id" required>
            <?php foreach ($employees as $employee): ?>
                <option value="<?php echo $employee['id']; ?>"><?php echo $employee['name']; ?></option>
            <?php endforeach; ?>
        </select><br><br>
        <label for="entry_time">Giriş Saati:</label>
        <input type="time" id="entry_time" name="entry_time" required><br><br>
        <label for="exit_time">Çıkış Saati:</label>
        <input type="time" id="exit_time" name="exit_time" required><br><br>
        <input type="submit" value="Kaydet">
    </form>
    <a href="index.php">Ana Sayfa</a>
</body>
</html>
