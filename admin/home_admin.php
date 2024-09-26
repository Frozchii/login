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

      <!-- Hero Section with Background Image -->
      <section class="hero-background min-h-screen text-white py-20 flex items-center">
        <div class="container mx-auto px-6 flex flex-col lg:flex-row items-center bg-green-600 bg-opacity-70 rounded-lg p-8">
            <!-- Text on the left -->
            <div class="lg:w-1/2 text-center lg:text-left">
                <h1 class="text-5xl font-bold">Welcome to Halaman Admin</h1>
                <p class="mt-4 text-xl">Kendali ada di genggaman tanggan anda</p>
            </div>
            <!-- Image on the right -->
            <div class="lg:w-1/2 mt-10 lg:mt-0 flex justify-center">
                <img src="../assets/image/bg.png" alt="School Image" class="rounded-lg" style="width: 900px;">
            </div>
        </div>
    </section>  