<?php
session_start();

// Cek apakah pengguna sudah login
if (empty($_SESSION['username']) || empty($_SESSION['level'])) {
   echo "<script>alert('Harap login terlebih dahulu');document.location='../login/login.php';</script>";
   exit(); // Hentikan eksekusi kode lebih lanjut jika sesi tidak valid
}

// Koneksi ke database
include '../connect.php';

// Query untuk mengambil data
$sql = "SELECT * FROM t_user";
$result = $conn->query($sql);
?>

<?php include '../head.php'; ?>

<?php include 'navbar2.php'; ?>

<div class="hero bg-base-200 min-h-screen flex items-start">
  <div class="hero-content text-center mx-auto mt-8">
    <div class="max-w-md">
      <h1 class="text-5xl font-bold">Hello there</h1>
      <p class="py-6">
        Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
        quasi. In deleniti eaque aut repudiandae et a id nisi.
      </p>
      <button class="btn btn-primary">Get Started</button>
    </div>
  </div>
</div>
