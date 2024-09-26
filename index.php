<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <style>
        .hero-background {
            background-image: url('assets/image/2.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body class="bg-white text-gray-800">
    <!-- Navbar -->
<?php include 'navbar.php' ?>

    <!-- Hero Section with Background Image -->
    <section class="hero-background min-h-screen text-yellow-100 py-20 flex items-center">
        <div class="container mx-auto px-6 flex flex-col lg:flex-row items-center bg-green-700 bg-opacity-70 rounded-lg p-8">
            <!-- Text on the left -->
            <div class="lg:w-1/2 text-center lg:text-left">
                <h1 class="text-5xl font-bold">Welcome to SMKN 3 YOGYAKARTA</h1>
                <p class="mt-4 text-xl">Web pendaftaran Ekstra skagata , silahkan login untuk mendaftar</p>
                <button class="btn  mt-6 inline-block text-green-600 font-semibold px-6 py-3 rounded-full btn-warning">
                  <a href="login/login.php" class="text-white font-semibold">Login sekarang</a>
                </button>
            </div>
            <!-- Image on the right -->
            <div class="lg:w-1/2 mt-10 lg:mt-0 flex justify-center">
                <img src="assets/image/bg.png" alt="School Image" class="rounded-lg shadow-lg" style="width: 900px;">
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-yellow-100">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-green-600">About Us</h2>
            <p class="mt-4 text-center text-gray-800">
               Smkn 3 Yogyakarta sekolah menengah jurusan yang berbasis ketarunaan
            </p>
            <div class="mt-10 grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Our Vision -->
                <div class="bg-green-100 p-6 rounded-lg text-center">
                    <h3 class="text-2xl font-semibold text-green-600">Our Vision</h3>
                    <p class="mt-4 text-gray-800">
                        Terwujudnya tamatan yang beriman, unggul, berbudaya, dan berwawasan lingkungan
                    </p>
                </div>
                <!-- Our Mission -->
                <div class="bg-green-100 p-6 rounded-lg text-center">
                    <h3 class="text-2xl font-semibold text-green-600">Our Mission</h3>
                    <p class="mt-4 text-gray-800 font text-sm">
                        1. Melaksanakan Pendidikan dan kegiatan agama sesuai dengan ajaran yang dianut.
                        <br>
                        2. Melaksanakan kegiatan Pembelajaran berbasis teknologi informasi dan industri.
                        <br>
                        3. Mengoptimalkan pembimbingan kegiatan akademik dan non akademik.
                        <br>
                        4. Mewujudkan lingkungan belajar yang berkarakter dan berbudaya khas Jogja.
                        <br>
                        5. Mewujudkan lingkungan yang sehat, sejuk, rapi, dan nyaman.
                        <br>
                        6. Mewujudkan predikat sekolah adiwiyata.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
<section id="map" class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-green-600">Find Us on the Map</h2>
        <p class="mt-4 text-center text-gray-600">
            Our school is conveniently located. Use the map below to find us!
        </p>
        <div class="mt-10">
            <iframe 
                class="w-full h-80 rounded-lg shadow-lg"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1175.2682080444501!2d110.3652907656775!3d-7.777598308194953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a58378e231e21%3A0x34bffdcc5d618a71!2sSMK%20Negeri%203%20Yogyakarta!5e0!3m2!1sid!2sid!4v1727245352187!5m2!1sid!2sid" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>
        </div>
    </div>
      </section>
    <!-- Footer Section -->
    <footer class="bg-green-800 text-yellow-100 py-4">
        <div class="container mx-auto px-6 text-center">
            <p>&copy; 2024 Skagata</p>
        </div>
    </footer>
</body>
</html>
