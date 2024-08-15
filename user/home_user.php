<?php
session_start();
if (empty($_SESSION['username']) || empty($_SESSION['level'])) {
    echo "<script>alert('harap login terlebuh dahulu');document.location='index.php';</script>";
    exit(); // Tambahkan exit() untuk menghentikan eksekusi kode lebih lanjut
}


// Koneksi ke database  
include '../connect.php';

$sql = "SELECT id, image, name, description FROM items";
$result = $conn->query($sql);?>

<?php include '../head.php'?>
<?php include 'navbar.php';?>


  <!-- content -->

  <!-- hero -->
  <div class="hero">
    <div class="hero-content text-center">
      <div class="max-w-md">
        <h2 class="text-5xl font-bold">Hello there</h2>
        <button class="btn btn-primary">
          <a href="pendaftaran/from_pendaftaran.php">daftar</a>
        </button>
      </div>
    </div>
  </div>

  
  <div class="carousel w-full my-8">
  <div id="slide1" class="carousel-item relative w-full">
    <img
      src="https://img.daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.webp"
      class="w-full" />
    <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
      <a href="#slide4" class="btn btn-circle">❮</a>
      <a href="#slide2" class="btn btn-circle">❯</a>
    </div>
  </div>
  <div id="slide2" class="carousel-item relative w-full">
    <img
      src="https://img.daisyui.com/images/stock/photo-1609621838510-5ad474b7d25d.webp"
      class="w-full" />
    <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
      <a href="#slide1" class="btn btn-circle">❮</a>
      <a href="#slide3" class="btn btn-circle">❯</a>
    </div>
  </div>
  <div id="slide3" class="carousel-item relative w-full">
    <img
      src="https://img.daisyui.com/images/stock/photo-1414694762283-acccc27bca85.webp"
      class="w-full" />
    <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
      <a href="#slide2" class="btn btn-circle">❮</a>
      <a href="#slide4" class="btn btn-circle">❯</a>
    </div>
  </div>
  <div id="slide4" class="carousel-item relative w-full">
    <img
      src="https://img.daisyui.com/images/stock/photo-1665553365602-b2fb8e5d1707.webp"
      class="w-full" />
    <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
      <a href="#slide3" class="btn btn-circle">❮</a>
      <a href="#slide1" class="btn btn-circle">❯</a>
    </div>
  </div>
</div>
  


<!-- card -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 mx-8 my-8 justify-items-center">
    <!-- Card 1 -->
    <?php 
   if ($result->num_rows > 0) {
    // Menampilkan data dalam bentuk card
    while($row = $result->fetch_assoc()) {
        echo '
        <div class="card card-compact bg-base-100 w-80 mt-4 shadow-xl">
            <figure class="h-48 w-full">
                <img class="h-full w-full object-cover" src="../assets/image/'.$row["image"].'" alt="'.$row["name"].'" />
            </figure>
            <div class="card-body">
                <h2 class="card-title">'.$row["name"].'</h2>
                <p>'.$row["description"].'</p>
                <div class="card-actions justify-end">
                        <a href="item_detail.php?id='.$row["id"].'" class="btn btn-primary">Buy Now</a>
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
  <!-- card end -->