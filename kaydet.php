<?php
// Veritabanı bağlantı bilgileri
$host = "sql113.infinityfree.com";
$dbname = "if0_36136316_forms";
$username = "if0_36136316";
$password = "6KvizF6bQGuHP";

// Veritabanına bağlanma
$db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

// Form verilerini alma
$adsoyad = $_POST['formName'];
$telefon = $_POST['1234567'];

// SQL sorgusu
$sql = "INSERT INTO kisiler (adsoyad, telefon) VALUES (?, ?)";

// Sorguyu çalıştırma
$stmt = $db->prepare($sql);
$stmt->bind_param('ss', $formName, $1234567);
$stmt->execute();

// Başarılı mesajı gösterme
echo '<p>Kayıt işlemi başarıyla tamamlandı!</p>';
?>