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
  
  <div class="hero">
    <div class="hero-content text-center">
      <div class="max-w-md">
        <h2 class="text-5xl font-bold">Hello there</h2>
        <p class="py-6">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit maxime quam dicta necessitatibus unde architecto consequatur illo voluptas, laborum eius excepturi, atque a alias quasi assumenda minus, est cum nihil.
        </p>
        <button class="btn btn-primary">Get Started</button>
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