<?php
include '../../connect.php';

$name = $_POST["name"]; //mengambil data dari tambah dengan nama name
$description = $_POST["description"]; //mengambil data dari tambah dengan nama desccriptions
$image = $_FILES["image"]["name"]; //mengambil data dari tambah dengan nama image
$target_dir = "../../assets/image/";
$target_file = $target_dir . basename($image);

if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    $sql = "INSERT INTO items (name, description, image) VALUES ('$name', '$description', '$image')";
    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil ditambahkan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Sorry, there was an error uploading your file.";
}

$conn->close();
header("Location: ../daftar.php");
exit();

?>