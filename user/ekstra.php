<?php
session_start();
if (empty($_SESSION['username']) || empty($_SESSION['level'])) {
    echo "<script>alert('harap login terlebuh dahulu');document.location='index.php';</script>";
    exit(); // Tambahkan exit() untuk menghentikan eksekusi kode lebih lanjut
}

// Koneksi ke database
include '../connect.php';

$sql = "SELECT id, image, name FROM items";
$result = $conn->query($sql);
?>


<?php
include '../head.php';
include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Film Website</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  

  <style>
        .hero-background {
          background-image: url('../assets/image/2.png');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="background text-gray-800">


  <!-- Hero Section -->
  <section class="hero-background h-100 text-white py-20 flex items-center">
        <div class="container mx-auto px-6 flex flex-col lg:flex-row items-center bg-green-600 bg-opacity-70 rounded-lg p-8">

        <div class="lg:w-1/2 mt-10 lg:mt-0 flex justify-center">
                <img src="../assets/image/bg.png" alt="School Image" class="rounded-lg" style="width: 900px;">
            </div>
            <!-- Text on the left -->
            <div class="lg:w-1/2 text-center lg:text-left   ">
                <h1 class="text-5xl font-bold">Daftarkan Dirimu Sekarang</h1>
                <p class="mt-4 text-xl">klik tombol dibawah untuk mendaftar</p>
                <button class="btn  mt-6 inline-block text-green-600 font-semibold px-6 py-3 rounded-full btn-warning">
                  <a href="pendaftaran/from_pendaftaran.php" class="text-white font-semibold">Daftar sekarang</a>
                </button>
            </div>
            <!-- Image on the right -->
        </div>
    </section> 


    <div class="hero mt-10 text-black">
  <div class="hero-content text-center">
    <div class="max-w-xl">
      <h1 class="text-5xl font-bold">Ekstrakurikuler Kami</h1>
    </div>
  </div>
</div>


  <!-- Featured Movies Section -->
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 mx-8 my-8 justify-items-center">
    <!-- Card 1 -->
    <?php 
    if ($result->num_rows > 0) {
        // Menampilkan data dalam bentuk card
        while($row = $result->fetch_assoc()) {
            echo '
            <div class="card card-compact bg-white w-80 mt-4 shadow-xl border border-green-500">
                <figure class="h-48 w-full bg-white">
                    <img class="h-full w-full object-cover" src="../assets/image/'.$row["image"].'" alt="'.$row["name"].'" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title text-green-700">'.$row["name"].'</h2>
                    <div class="card-actions justify-end">
                        <a href="item_detail.php?id='.$row["id"].'" class="btn bg-green-600 text-white hover:bg-green-700">Watch Now</a>
                    </div>
                </div>
            </div>
            ';
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
</div>

    <div class="flex justify-center mt-8 mb-20">
    <button class="btn btn-primary"> 
        <a href="pendaftaran/from_pendaftaran.php">DAFTAR SEKARANG</a>
    </button>
    </div>

  <!-- Footer -->
  <footer class="bg-green-800 text-white py-4">
        <div class="container mx-auto px-6 text-center">
            <p>&copy; 2024 Green Valley School. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
