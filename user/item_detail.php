<?php
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
        <div class="hero bg-base-200 min-h-screen">
          <div class="hero-content flex-col lg:flex-row-reverse items-start">
            <div class="w-full lg:w-1/2">
              <h1 class="text-5xl font-bold">'.$row["name"].'</h1>
              <p class="py-6">'.$row["description"].'</p>
              <button class="btn btn-primary">Add to Cart</button>
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
