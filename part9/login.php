<?php
// Sabit kullanıcı bilgileri
$dogruKullanici = "b2412100001@sakarya.edu.tr";
$dogruSifre = "b2412100001";

// Formdan gelen değerleri al
$kullanici = $_POST["kullanici"] ?? "";
$sifre = $_POST["sifre"] ?? "";

// Doğrulama
if ($kullanici === $dogruKullanici && $sifre === $dogruSifre) {
  // Mailin kullanıcı adı kısmını çıkar
  $kullaniciAdi = explode("@", $kullanici)[0];
  echo "<h2>Hoşgeldiniz <strong>$kullaniciAdi</strong></h2>";
} else {
  // Başarısızsa tekrar login sayfasına yönlendir
  header("Location: login.html");
  exit();
}
?>
