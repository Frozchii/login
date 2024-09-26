<?php
include '../../connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $ttl = $_POST['ttl'];
    $nomor_hp = $_POST['nomor_hp'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jk'];
    $ekstra = $_POST['ekstra'];

        // Menyimpan data ke database jika diperlukan
    // SQL query untuk menyimpan data ke database
$sql = "INSERT INTO pendaftaran_ekstrakurikuler (nama, kelas, ttl, nomor_hp, alamat, jk, ekstra) 
VALUES ('$nama', '$kelas', '$ttl', '$nomor_hp', '$alamat', '$jk', '$ekstra')";

// Menjalankan query
if (mysqli_query($conn, $sql)) {
echo "Data berhasil disimpan.";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Menutup koneksi
mysqli_close($conn);


echo '<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pendaftaran</title>
    <style>
        @media print {
            @page {
                size: A4;
                margin: 20mm;
            }
            body {
                margin: 0;
                padding: 0;
                backgorud-color: gray;
            }
            .signature {
                display: block; /* Tampilkan tanda tangan saat cetak */
            }
            button {
                display: none; /* Sembunyikan tombol cetak saat mencetak */
            }
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 210mm;
            margin: auto;
            padding: 20mm;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: relative;
            min-height: 297mm; /* Minimum height for A4 page */
        }
        .header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .header img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-left : 20px;
            margin-right: 10px; /* Space between image and text */
        }
        .header .instansi {
            text-align: left; /* Align text to the left */
        }
        .header .instansi h1 {
            margin-left: 160px;
            font-size: 24px;
            color: #333;
        }
        .header .instansi p {
            margin-left: 230px;
            font-size: 14px;
            color: #555;
        }
        hr.full-width {
            border: 0;
            border-top: 2px solid #333;
            margin: 20px 0; /* Space around the horizontal rule */
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        .section {
            margin-top: 25px;
            margin-bottom: 20px;
        }
        .section h3 {
            margin: 0;
            padding: 0;
            color: #555;
            border-bottom: 1px solid #ddd;
            padding-bottom: 5px;
            margin-bottom: 10px;
        }
        .section p {
            margin: 5px 0;
            color: #333;
        }
        .signature {
            display: none; /* Sembunyikan tanda tangan saat tidak cetak */
            position: absolute;
            bottom: 20mm;
            right: 20mm;
            width: 50%;
            padding-top: 5mm;
            text-align: center;
            font-size: 12px;
        }

        .signature span {
            display: block;
            margin-bottom: 120px; /* Memberi jarak antara span dan p */
        }

        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            text-align: center;
            margin-top: 20px;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
    <script>
        function preparePrint() {
            document.querySelector(".signature").style.display = "block";
            window.print();
            document.querySelector(".signature").style.display = "none";
        }
    </script>
</head>
<body>

    <div class="container">
        <div class="header">
            <img src="https://upload.wikimedia.org/wikipedia/id/thumb/f/f0/Logo_SMKN3Yk.JPG/175px-Logo_SMKN3Yk.JPG" alt="Logo Instansi">
            <div class="instansi">
                <h1>SMKN 3 YOGYAKARTA</h1>
                <p>Pendaftaran Ekstra</p>
            </div>
        </div>
        <hr class="full-width"> <!-- Full width horizontal line -->
        <h2>Formulir Pendaftaran Ekstrakurikuler</h2>
        <div class="section">
            <h3>Identitas Siswa</h3>
            <p><strong>Nama:</strong> ' . htmlspecialchars($nama) . '</p>
            <p><strong>Kelas:</strong> ' . htmlspecialchars($kelas) . '</p>
            <p><strong>Tempat, Tanggal Lahir:</strong> ' . htmlspecialchars($ttl) . '</p>
            <p><strong>Nomor HP:</strong> ' . htmlspecialchars($nomor_hp) . '</p>
            <p><strong>Alamat:</strong> ' . htmlspecialchars($alamat) . '</p>
            <p><strong>Jenis Kelamin:</strong> ' . htmlspecialchars($jk) . '</p>
        </div>
        <div class="section">
            <h3>Ekstrakurikuler</h3>
            <p><strong>Ekstra yang Dipilih:</strong> ' . htmlspecialchars($ekstra) . '</p>
        </div>
        <p>Dengan ini, saya menyatakan bahwa saya telah memahami dan setuju dengan ketentuan pendaftaran kegiatan ekstra yang saya pilih. Saya bertanggung jawab penuh atas keputusan saya dalam memilih kegiatan tersebut dan bersedia mematuhi semua peraturan serta ketentuan yang berlaku selama kegiatan berlangsung. Saya juga menyadari bahwa segala konsekuensi terkait pilihan saya menjadi tanggung jawab saya sendiri.
        <br><br>
        Saya menyetujui bahwa informasi yang saya berikan adalah benar dan akurat, serta saya akan melaporkan jika ada perubahan yang relevan sehubungan dengan pendaftaran ini.</p>
        <div class="signature">
            <span> Yogyakarta,..........................</span>
            <p><strong>(' . htmlspecialchars($nama) . ')</strong></p>
            <p>Tempat Tanda Tangan</p>
        </div>
        <button onclick="preparePrint()">Cetak</button>
    </div>

    

</body>
</html>';
}
?>
