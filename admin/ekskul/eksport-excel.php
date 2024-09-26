<?php

// Koneksi ke database
include '../../connect.php';

// Header untuk export ke Excel
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=laporan-excel.xls");

?>
<h1 class="text-center my-4 text-2xl">PENDAFTARAN EKSTRAKULIKULER</h1>
<div class="overflow-x-auto">
    <div class="mx-auto w-full max-w-4xl">
        <table class="table w-full" border="1" style="border-collapse: collapse;">
            <!-- head -->
            <thead>
                <tr>
                    <th style="border: 1px solid black;">No</th>
                    <th style="border: 1px solid black;">Nama</th>
                    <th style="border: 1px solid black;">Kelas</th>
                    <th style="border: 1px solid black;">Tanggal Lahir</th>
                    <th style="border: 1px solid black;">Nomor HP</th>
                    <th style="border: 1px solid black;">Alamat</th>
                    <th style="border: 1px solid black;">Jenis Kelamin</th>
                    <th style="border: 1px solid black;">Ekstra</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM pendaftaran_ekstrakurikuler";
                $result = $conn->query($sql);

                $counter = 1;

                while ($eksul = $result->fetch_assoc()) : ?>
                    <tr>
                        <td style="border: 1px solid black;"><?php echo $counter++; ?></td>
                        <td style="border: 1px solid black;"><?php echo $eksul['nama']; ?></td>
                        <td style="border: 1px solid black;"><?php echo $eksul['kelas']; ?></td>
                        <td style="border: 1px solid black;"><?php echo $eksul['ttl']; ?></td>
                        <td style="border: 1px solid black;"><?php echo $eksul['nomor_hp']; ?></td>
                        <td style="border: 1px solid black;"><?php echo $eksul['alamat']; ?></td>
                        <td style="border: 1px solid black;"><?php echo $eksul['jk']; ?></td>
                        <td style="border: 1px solid black;"><?php echo $eksul['ekstra']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>
