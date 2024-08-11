<?php
include '../../connect.php';

$name = $_POST["name"]; // Mengambil data dari input name
$description = $_POST["description"]; // Mengambil data dari input description
$image = $_FILES["image"]["name"]; // Mengambil data dari input image
$youtube_link = $_POST["youtube_link"]; // Mengambil data dari input youtube_link

$target_dir = "../../assets/image/";
$target_file = $target_dir . basename($image);

// Upload gambar dan simpan data ke database
if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    // Menyimpan data ke dalam tabel items
    $sql = "INSERT INTO items (name, description, image, youtube_link) VALUES ('$name', '$description', '$image', '$youtube_link')";
    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil ditambahkan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Maaf, terjadi kesalahan saat mengupload file.";
}

$conn->close();

// Redirect ke halaman daftar
header("Location: ../daftar.php");
exit();

?>
