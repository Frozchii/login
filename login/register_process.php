<?php
session_start();
include '../connect.php'; // Pastikan Anda memiliki file koneksi ke database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = md5($_POST['password']); // Hash password menggunakan MD5
    $nama_lengkap = mysqli_real_escape_string($conn, $_POST['nama_lengkap']);
    $level = mysqli_real_escape_string($conn, $_POST['level']);

    // Periksa apakah username sudah ada
    $check_username = "SELECT * FROM t_user WHERE username = '$username'";
    $result = mysqli_query($conn, $check_username);
    
    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('Username sudah terdaftar, silakan pilih username lain');document.location='register.php';</script>";
    } else {
        // Masukkan data ke database
        $query = "INSERT INTO t_user (username, password, nama_lengkap, level) VALUES ('$username', '$password', '$nama_lengkap', '$level')";
        
        if (mysqli_query($conn, $query)) {  
            header("Location: login.php?pendaftaran berhasil");
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    }
    
    mysqli_close($conn);
}
?>
