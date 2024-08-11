<?php
include '../../connect.php';

// Ambil data dari formulir
$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$youtube_link = $_POST['youtube_link'];
$image = $_FILES['image']['name'];

// Validasi ID
if (!isset($id) || !is_numeric($id)) {
    echo "ID tidak valid";
    exit();
}

// Escape data untuk menghindari SQL Injection
$id = mysqli_real_escape_string($conn, $id);
$name = mysqli_real_escape_string($conn, $name);
$description = mysqli_real_escape_string($conn, $description);
$youtube_link = mysqli_real_escape_string($conn, $youtube_link);

// Jika ada gambar baru, proses upload
$image_sql = ''; // Default image_sql to an empty string
if ($image) {
    $target_dir = "../../assets/image/";
    $target_file = $target_dir . basename($image);
    
    // Hapus gambar lama jika ada
    $sql = "SELECT image FROM items WHERE id = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $old_image = $row['image'];
        if (file_exists($target_dir . $old_image)) {
            unlink($target_dir . $old_image);
        }
    }

    // Upload gambar baru
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        $image_sql = "image = '$image',";
    } else {
        echo "Maaf, terjadi kesalahan saat mengupload file.";
        exit();
    }
}

// Update data dalam database, termasuk link YouTube
$sql = "UPDATE items SET 
            name = '$name', 
            description = '$description', 
            youtube_link = '$youtube_link'";

if ($image_sql) {
    $sql .= ", $image_sql";
}

$sql .= " WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    header("Location: ../daftar.php?message=Data berhasil diperbarui");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

