<?php
session_start();

// Cek apakah pengguna sudah login
if (empty($_SESSION['username']) || empty($_SESSION['level'])) {
   echo "<script>alert('Harap login terlebih dahulu');document.location='../login/login.php';</script>";
   exit(); // Hentikan eksekusi kode lebih lanjut jika sesi tidak valid
}

// Koneksi ke database
include '../connect.php';

// Query untuk mengambil data
$sql = "SELECT * FROM t_user";
$result = $conn->query($sql);
?>

<?php include '../head.php'; ?>

<?php include 'navbar2.php'; ?>
<!-- tabel user -->
<h1 class="text-center">halaman user</h1>
<div class="container mx-auto mt-8 p-4">
   <div class="text-center mb-4">
         <button class="btn btn-info">
            <a href="user/create.php" class="text-white">Tambah Data</a>
         </button>
   </div>
   <div class="overflow-x-auto">
      <div class="mx-auto w-full max-w-4xl">
         <table class="table w-full">
            <!-- head -->
            <thead class="">
               <tr>
                  <th>id</th>
                  <th>username</th>
                  <th>nama_lengkap</th>
                  <th>level</th>
                  <th>Aksi</th>
               </tr>
            </thead>
            <tbody>

               <?php
                $counter = 1; 
               while ($row = $result->fetch_assoc()) : ?>
                  <tr class="bg-base-200">
                     <td><?php echo $counter++; ?></td>
                     <td><?php echo $row['username']; ?></td>
                     <td><?php echo $row['nama_lengkap']; ?></td>
                     <td><?php echo $row['level']; ?></td>
                     <td>
                        <a href="user/update.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="user/delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</a>
                     </td>
                  </tr>
               <?php endwhile; ?>
            </tbody>
         </table>
      </div>
   </div>
</div>
