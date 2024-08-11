<?php
include '../../connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = md5($_POST['password']); // Hash password menggunakan MD5
    $nama_lengkap = mysqli_real_escape_string($conn, $_POST['nama_lengkap']);
    $level = mysqli_real_escape_string($conn, $_POST['level']);

    $query = "INSERT INTO t_user (username, password, nama_lengkap, level) VALUES ('$username', '$password', '$nama_lengkap', '$level')";

    if (mysqli_query($conn, $query)) {
        header("Location: ../user.php?message=Pendaftaran berhasil");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
}
?>
