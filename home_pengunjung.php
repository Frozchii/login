<?php
session_start();
if (empty($_SESSION['username']) || empty($_SESSION['level'])) {
    echo "<script>alert('harap login terlebuh dahulu');document.location='index.php';</script>";
    exit(); // Tambahkan exit() untuk menghentikan eksekusi kode lebih lanjut
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<!-- navbar-->
<div>
<?php include 'navbar.php';?>
</div>

<!-- jumbotron -->
<div class="jumbotron ms-5">
  <h1 class="display-4"><?=$_SESSION['nama_lengkap']; ?></h1>
  <p class="lead">Selamat datang, Anda berhasil masuk ke halaman admin</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
