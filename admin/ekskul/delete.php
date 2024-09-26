<?php
include '../../connect.php';

$id = $_GET['id'];
$sql = "DELETE FROM pendaftaran_ekstrakurikuler WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    header("Location: ../ekskul.php?message=Data berhasil dihapus");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
