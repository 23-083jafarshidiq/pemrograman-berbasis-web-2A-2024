<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Beranda</title>
<link rel="stylesheet" href="kedua.css">
</head>
<body>

<header>
<h1>

<?php
session_start();

// Periksa apakah pengguna telah login
if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    echo "Selamat datang, $username!";
} else {
    // Jika pengguna belum login, arahkan kembali ke halaman login
    header("Location: index.php");
    exit();
}
?>

</h1>
</header>

<nav>
    <a href="home.php">Beranda</a>
    <a href="table.php">Table</a>
    <a href="index.php">Log out</a>
</nav>

<div class="container">

    <section>
        <h2>Tentang Kami</h2>
        <p>manusia biasa</p>
    </section>

    <section>
        <h2>Layanan</h2>
        <p>mau di layani kah king</p>
    </section>

    <section>
        <h2>Kontak</h2>
        <p>Email: Jafarshdq@gmail.com</p>
        <p>Telepon: 081232251350/p>
    </section>

</div>

</body>
</html>