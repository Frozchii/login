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

?>


<?php include '../head.php'; ?>

<?php include 'navbar2.php'; ?>
<h1 class="text-center my-4 text-2xl ">PENDAFTARAN EKSTRAKULIKULER</h1>
<button class="btn mb-4">
    <a href="ekskul/eksport-excel.php">
        EKSPORT KE EXCEL
    </a>
</button>
<div class="overflow-x-auto">
    <div class="mx-auto w-full max-w-4xl">
        <table class="table w-full">
            <!-- head -->
            <thead>
                <tr>
                    <th>no</th>
                    <th>Nama</th>
                    <th>kelas</th>
                    <th>tanggal lahir </th>
                    <th>nomor hp</th>
                    <th>alamat</th>
                    <th>jenis kelamin</th>
                    <th>ekstra</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $sql = "SELECT * FROM pendaftaran_ekstrakurikuler";
                $result = $conn->query($sql);

                $counter = 1;

                while ($eksul = $result->fetch_assoc()) : ?>
                    <tr>
                        <td><?php echo $counter++; ?></td>
                        <td> <?php echo $eksul['nama'] ?> </td>
                        <td> <?php echo $eksul['kelas'] ?> </td>
                        <td> <?php echo $eksul['ttl'] ?> </td>
                        <td> <?php echo $eksul['nomor_hp'] ?> </td>
                        <td> <?php echo $eksul['alamat'] ?> </td>
                        <td> <?php echo $eksul['jk'] ?> </td>
                        <td> <?php echo $eksul['ekstra'] ?> </td>
                        <td><a href="ekskul/delete.php?id=<?php echo $eksul['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</a></td>
                    </tr>
                <?php endwhile; ?>



            </tbody>
        </table>
    </div>
</div>