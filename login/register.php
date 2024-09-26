<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Register</title>
    <style>
        /* Custom styles for green and white theme */
        .bg-custom-green {
            background-color: #4caf50; /* Green */
        }
        .text-custom-green {
            color: #4caf50; /* Green */
        }
        .border-custom-green {
            border-color: #4caf50; /* Green */
        }
        .btn-custom {
            background-color: #4caf50; /* Green */
            color: #ffffff; /* White text */
        }
        .input-custom {
            background-color: #ffffff; /* White */
            border: 1px solid #4caf50; /* Green border */
        }
    </style>
</head>
<body class="bg-white text-gray-800">
    <div class="hero bg-custom-green min-h-screen flex items-center justify-center">
        <div class="card bg-white w-full max-w-sm shadow-2xl border border-custom-green">
            <form class="card-body" method="POST" action="register_process.php">
                <h1 class="text-3xl font-bold text-center text-custom-green mb-4">Buat Akun Anda</h1>
                <div class="form-control mb-4">
                    <label class="label">
                        <span class="label-text text-custom-green">Username</span>
                    </label>
                    <input type="text" name="username" placeholder="Masukkan Username" class="input input-bordered input-custom" required autofocus />
                </div>
                <div class="form-control mb-4">
                    <label class="label">
                        <span class="label-text text-custom-green">Nama Lengkap</span>
                    </label>
                    <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" class="input input-bordered input-custom" required />
                </div>
                <div class="form-control mb-4">
                    <label class="label">
                        <span class="label-text text-custom-green">Password</span>
                    </label>
                    <input type="password" name="password" placeholder="Password" class="input input-bordered input-custom" required />
                </div>
                <div class="form-control mb-4">
                    <label class="label">
                        <span class="label-text text-custom-green">Level</span>
                    </label>
                    <select name="level" class="select select-bordered input-custom">
                        <option value="user">User</option>
                    </select>
                </div>
                <div class="form-control mb-4">
                    <button class="btn btn-custom w-full" type="submit">Register</button>
                </div>
                <div class="text-center mt-4">
                    <a href="login.php" class="link text-custom-green hover:text-gray-700">Sudah Punya Akun?</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
