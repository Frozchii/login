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
$sql = "SELECT * FROM items";
$result = $conn->query($sql);
?>

<?php include '../head.php'; ?>

<?php include 'navbar2.php'; ?>



<h1 class="text-center my-8 text-2xl text-black ">Ekstra Yang Ditampilkan</h1>
<div class="text-center mb-4">
         <button class="btn btn-info">
            <a href="daftar/tambah.php" class="text-black">Tambah Data</a>
         </button>
   </div>
<div class="overflow-x-auto">
    <div class="mx-auto w-full max-w-4xl">
        <table class="table w-full">
            <!-- head -->
            <thead class="text-black">
                <tr>
                    <th>no</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Trailer</th> <!-- Kolom baru untuk link YouTube -->
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="text-black">
                <?php
                if ($result->num_rows > 0) {
                    $index = 1;
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr class=''>";
                        echo "<td>" . $index++ . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['description'] . "</td>";
                        echo "<td><img src='../assets/image/" . $row['image'] . "' alt='" . $row['name'] . "' style='width:100px;height:100px;'></td>";
                        echo "<td>";
                        if (!empty($row['youtube_link'])) {
                            echo "<a href='" . $row['youtube_link'] . "' target='_blank' class='btn btn-link btn-sm'>Watch Trailer</a>";
                        } else {
                            echo "No Trailer";
                        }
                        echo "</td>";
                        echo "<td>";
                        echo "<a href='daftar/edit.php?id=" . $row['id'] . "' class='btn btn-warning btn-sm'>Edit</a> ";
                        echo "<a href='daftar/delete.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm' onclick='return confirm(\"Are you sure you want to delete?\")'>Delete</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No data available</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
