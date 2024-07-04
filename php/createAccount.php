<?php
include "./dbcon.php";
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $admin = $_POST['admin'];
    $password = md5(($_POST['password']));

    if (empty($admin) || empty($password)) {
        echo "Tüm alanları doldurun.";
        exit;
    }

    // Kullanıcı verilerini veritabanına ekle
    $sql = "INSERT INTO admins (admin, password) VALUES ('$admin','$password')";

    if ($dbcon->query($sql) === TRUE) {
        echo "Kayıt başarılı!";
        header("Location: ../index.php");
    } else {
        echo "Hata: " . $sql . "<br>" . $dbcon->error;
    }

    // Veritabanı bağlantısını kapat
    $dbcon->close();
}
?>