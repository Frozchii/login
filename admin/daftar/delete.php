<?php
include '../../connect.php';

$id = $_GET['id'];

// Pastikan ID valid
if (!isset($id) || !is_numeric($id)) {
    echo "ID tidak valid";
    exit();
}

// Ambil nama gambar dari database
$sql = "SELECT image FROM items WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $image = $row['image'];

    // Hapus data dari database
    $sql = "DELETE FROM items WHERE id = $id";
    
    if (mysqli_query($conn, $sql)) {
        // Hapus file gambar dari folder uploads
        $imagePath = '../../assets/image/' . $image;
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        header("Location: ../daftar.php?message=Data berhasil dihapus");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else {
    echo "Data tidak ditemukan";
}

mysqli_close($conn);
?>
