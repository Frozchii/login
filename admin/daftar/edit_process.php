<?php
include '../../connect.php';

// Ambil data dari formulir
$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$image = $_FILES['image']['name'];

// Validasi ID
if (!isset($id) || !is_numeric($id)) {
    echo "ID tidak valid";
    exit();
}

// Jika ada gambar baru, proses upload
if ($image) {
    $target_dir = "../../uploads/";
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
        echo "Sorry, there was an error uploading your file.";
        exit();
    }
} else {
    $image_sql = "";
}

// Update data dalam database
$sql = "UPDATE items SET name = '$name', description = '$description' " . $image_sql . " WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    header("Location: ../daftar.php?message=Data berhasil diperbarui");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
