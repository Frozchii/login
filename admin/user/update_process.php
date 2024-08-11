    <?php
    include '../../connect.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = mysqli_real_escape_string($conn, $_POST['id']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = !empty($_POST['password']) ? md5($_POST['password']) : null; // Hash password jika tidak kosong
        $nama_lengkap = mysqli_real_escape_string($conn, $_POST['nama_lengkap']);
        $level = mysqli_real_escape_string($conn, $_POST['level']);

        // Jika password kosong, tidak diupdate
        $query = "UPDATE t_user SET username = '$username', nama_lengkap = '$nama_lengkap', level = '$level'" . 
                    ($password ? ", password = '$password'" : "") . 
                " WHERE id = $id";

        if (mysqli_query($conn, $query)) {
            header("Location: ../user.php?message=Data berhasil diupdate");
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
    ?>
