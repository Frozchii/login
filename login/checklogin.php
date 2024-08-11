<?php
// panggil koneksi
include "../connect.php";

// pastikan semua data POST tersedia
if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['level'])) {
    $pass = md5($_POST['password']);
    $username = mysqli_escape_string($conn, $_POST['username']);
    $password = mysqli_escape_string($conn, $pass);
    $level = mysqli_escape_string($conn, $_POST['level']);

    // check username terdaftar atau tidak
    $cek_user = mysqli_query($conn, "SELECT * FROM t_user WHERE username = '$username' AND level = '$level' ");
    $user_valid = mysqli_fetch_array($cek_user);

    // uji jika username terdaftar
    if ($user_valid) {
        // jika username terdaftar

        // check password sesuai atau tidak
        if ($password == $user_valid['password']) {
            // jika password sesuai buat session
            session_start();
            $_SESSION['username'] = $user_valid['username'];
            $_SESSION['nama_lengkap'] = $user_valid['nama_lengkap'];
            $_SESSION['level'] = $user_valid['level'];

            // uji level user
            if ($level == "pengunjung") {
                header('Location: home_pengunjung.php');
            } elseif ($level == "user") {
                header('Location:../user/home_user.php');
            } elseif ($level == "admin") {  
                header('Location:../admin/home_admin.php');
            }
        } else {
            header("Location: login.php?message=Password anda salah");
        }
    } else {
        header("Location: login.php?message= username tidak terdaftar");
    }
} else {
    echo "<script>alert('Login gagal, data tidak lengkap');document.location='login.php'</script>";
}
?>
