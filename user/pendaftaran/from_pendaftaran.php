<?php
// Menyertakan file untuk koneksi database jika diperlukan
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Ekstrakurikuler</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">

    <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-md">
        <h2 class="text-2xl font-bold mb-4">Form Pendaftaran Ekstrakurikuler</h2>
        <form action="proses_pendaftaran.php" method="POST">
            <div class="mb-4">
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
            </div>
            <div class="mb-4">
                <label for="kelas" class="block text-sm font-medium text-gray-700">Kelas</label>
                <input type="text" id="kelas" name="kelas" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
            </div>
            <div class="mb-4">
                <label for="absen" class="block text-sm font-medium text-gray-700">Tempat, Tanggal lahir</label>
                <input type="text" id="ttl" name="ttl" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
            </div>
            <div class="mb-4">
                <label for="nomor_hp" class="block text-sm font-medium text-gray-700">Nomor HP</label>
                <input type="number" id="nomor_hp" name="nomor_hp" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
            </div>
            <div class="mb-4">
                <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                <textarea id="alamat" name="alamat" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50" rows="4"></textarea>
            </div>
            <div class="mb-4">
                <label for="ekstra" class="block text-sm font-medium text-gray-700">Jenis kelamin</label>
                <select id="jk" name="jk" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                    <option disabled selected>Jenis Kelamin</option>
                    <option value="laki-laki">Laki-Laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="ekstra" class="block text-sm font-medium text-gray-700">Ekstra yang Dipilih</label>
                <select id="ekstra" name="ekstra" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                    <option disabled selected>Pilih Ekstrakulikuler</option>
                    <option value="tonti">Tonti</option>
                    <option value="rohis">Rohis</option>
                    <option value="english club">English Club</option>
                    <option value="Palang Merah Remaja">Palang Merah Remaja</option>
                    <option value="futsal">Futsal</option>
                    <option value="basket">Basket</option>
                    <option value="robotik">Robotik</option>
                    <option value="paduan suara">Paduan Suara</option>
                    <option value="band">Band</option>
                    <option value="drumband">Drumband</option>
                    <option value="rohkris">Rohkris</option>
                    <option value="bulutangkis">Bulutangkis</option>
                    <option value="karawitan">Karawitan</option>
                    <option value="pencinta alam">Pencinta Alam</option>
                    <!-- Tambahkan opsi lain sesuai kebutuhan -->
                </select>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md shadow-sm hover:bg-blue-600">Kirim</button>
            <button class="bg-red-500 text-white px-4 py-2 rounded-md shadow-sm hover:bg-blue-600">
                <a href="../ekstra.php">kembali</a>
            </button>
        </form>
    </div>

</body>

</html>