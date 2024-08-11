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



<h1 class="text-center">Halaman User</h1>

<div class="container mx-auto mt-8 p-4">
    <div class="text-center mb-4">
        <button class="btn btn-info">
            <a href="daftar/tambah.php" class="text-white">Tambah Data</a>
        </button>
    </div>
    <div class="overflow-x-auto">
        <div class="mx-auto w-full max-w-4xl">
            <table class="table w-full">
                <!-- head -->
                <thead class="">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Deskripsi</th>
                        <th>Image</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        $index = 1;
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr class='bg-base-200'>";
                            echo "<td>" . $index++ . "</td>";
                            echo "<td>" . $row['name'] . "</td>";
                            echo "<td>" . $row['description'] . "</td>";
                            echo "<td><img src='../assets/image/" . $row['image'] . "' alt='" . $row['name'] . "' style='width:100px;height:100px;'></td>";
                            echo "<td>";
                            echo "<a href='daftar/edit.php?id=" . $row['id'] . "' class='btn btn-warning btn-sm'>Edit</a> ";
                            echo "<a href='daftar/delete.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm' onclick='return confirm(\"Apakah Anda yakin ingin menghapus?\")'>Hapus</a>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>Tidak ada data</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>