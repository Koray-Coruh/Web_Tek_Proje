<?php
session_start(); // Oturumu başlatıyoruz

// Sabit kullanıcı bilgileri (örnek)
$dogruKullanici = "b2412100001@sakarya.edu.tr";
$dogruSifre = "b2412100001";

// Formdan gelen değerleri alıyoruz
$kullanici = $_POST["kullanici"] ?? "";
$sifre = $_POST["sifre"] ?? "";

// Kullanıcı adı ve şifre kontrolü
if ($kullanici === $dogruKullanici && $sifre === $dogruSifre) {
    // Kullanıcı adı kısmını (@ öncesi) alıyoruz
    $kullaniciAdi = explode("@", $kullanici)[0];

    // Kullanıcı adını session'a kaydet
    $_SESSION['kullaniciAdi'] = $kullaniciAdi;

    // Giriş başarılı, index.html sayfasına yönlendir
    header("Location: ana.html");
    exit();
} else {
    // Giriş başarısızsa login sayfasına geri dön
    header("Location: index.html");
    exit();
}
?>

