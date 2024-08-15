<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Register</title>
</head>
<body data-themes="halloween">
    <div class="hero bg-base-200 min-h-screen flex items-center justify-center">
        <div class="card bg-base-100 w-full max-w-sm shadow-2xl">
            <form class="card-body" method="POST" action="register_process.php">
                <div class="avatar justify-center mb-4">
                </div>
                <h1 class="text-3xl font-bold text-center mb-4">Buat Akun Anda</h1>
                <div class="form-control mb-4">
                    <label class="label">
                        <span class="label-text">Username</span>
                    </label>
                    <input type="text" name="username" placeholder="Masukan Username" class="input input-bordered" required autofocus />
                </div>
                <div class="form-control mb-4">
                    <label class="label">
                        <span class="label-text">Nama Lengkap</span>
                    </label>
                    <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" class="input input-bordered" required />
                </div>
                <div class="form-control mb-4">
                    <label class="label">
                        <span class="label-text">Password</span>
                    </label>
                    <input type="password" name="password" placeholder="Password" class="input input-bordered" required />
                </div>
                <div class="form-control mb-4">
                    <label class="label">
                        <span class="label-text">Level</span>
                    </label>
                    <select name="level" class="select select-bordered">
                        <option value="user">User</option>
                    </select>
                </div>
                <div class="form-control mb-4">
                    <button class="btn btn-primary w-full" type="submit">Register</button>
                </div>
                <div class="text-center mt-4">
                    <a href="login.php" class="link link-hover">Sudah Punya Akun?</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
