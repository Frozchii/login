<?php

session_start();
if (empty($_SESSION['username']) || empty($_SESSION['level'])) {
    echo "<script>alert('harap login terlebuh dahulu');document.location='index.php';</script>";
    exit(); // Tambahkan exit() untuk menghentikan eksekusi kode lebih lanjut
}
  
// Koneksi ke database
include '../connect.php';

include '../head.php';
include 'navbar.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "SELECT * FROM items WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Tampilkan detail item dengan struktur hero
        echo '
        <div class="hero  min-h-screen">
          <div class="hero-content flex-col lg:flex-row-reverse items-start">
            <div class="w-full lg:w-1/2">
              <h1 class="text-5xl font-bold text-black">'.$row["name"].'</h1>
              <p class="py-6 text-black">'.$row["description"].'</p>
              <button class="btn btn-primary">
              <a href="pendaftaran/from_pendaftaran.php"> Daftar </a>
              </button>
              <button class="btn btn-warning">
              <a href="ekstra.php"> kembali </a>
              </button>
            </div>
            <div class="w-full lg:w-1/2 flex justify-center lg:justify-end mt-6 lg:mt-0">
              <iframe class="w-[1000px] h-[400px]"
                      src="'.$row["youtube_link"].'"
                      frameborder="0"
                      allowfullscreen>
              </iframe>
            </div>
          </div>
        </div>
        ';
    } else {
        echo "Item not found.";
    }
} else {
    echo "Invalid item ID.";
}

$conn->close();
?>


<footer class="bg-green-800 text-white py-4">
        <div class="container mx-auto px-6 text-center">
            <p>&copy; 2024 Green Valley School. All rights reserved.</p>
        </div>
    </footer>