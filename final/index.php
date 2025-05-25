<?php
// index.php

$dogruKullanici = "b241210080@sakarya.edu.tr";
$dogruSifre = "b241210080";

$kullanici = isset($_POST['kullanici']) ? trim($_POST['kullanici']) : '';
$sifre = isset($_POST['sifre']) ? trim($_POST['sifre']) : '';

if (empty($kullanici) || empty($sifre)) {
    header("Location: index.html");
    exit();
}

if (!filter_var($kullanici, FILTER_VALIDATE_EMAIL)) {
    header("Location: index.html");
    exit();
}

if ($kullanici === $dogruKullanici && $sifre === $dogruSifre) {
    $kullaniciAdi = explode("@", $kullanici)[0];
    echo "<!DOCTYPE html>
    <html lang='tr'>
    <head>
        <meta charset='UTF-8' />
        <title>Hoşgeldiniz</title>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet' />
        <script>
          // 3 saniye sonra ana.html sayfasına yönlendir
          setTimeout(function() {
            window.location.href = 'ana.html';
          }, 3000);
        </script>
    </head>
    <body class='bg-light'>
      <div class='container mt-5'>
        <div class='alert alert-success text-center'>
          <h3>Hoşgeldiniz, <strong>$kullaniciAdi</strong>!</h3>
          <p>Login işleminiz başarılı oldu. Ana sayfaya yönlendiriliyorsunuz...</p>
        </div>
      </div>
    </body>
    </html>";
} else {
    header("Location: index.html");
    exit();
}
?>
