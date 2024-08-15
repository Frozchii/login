<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Login Page</title>
</head>
<body data-themes="halloween">
    <div class="hero bg-base-200 min-h-screen">
        <div class="hero-content flex-col lg:flex-row">
            <div class="text-center lg:text-justify lg:mr-2">
                <h1 class="text-5xl font-bold">Login sekarang!</h1>
                <div class="hero-content flex-col lg:flex-row">
                <img
                src="../assets/image/imagelogin.png"
                class=" rounded-lg " />
                </div>
            </div>
            <!-- card -->   
            <div class="card bg-base-100 w-full max-w-sm shrink-0 shadow-2xl">
                <form class="card-body" method="POST" action="checklogin.php">
                    <div class="avatar justify-center items-center mb-4">
                        <div class="w-16 rounded-full">
                            <img src="https://upload.wikimedia.org/wikipedia/id/thumb/f/f0/Logo_SMKN3Yk.JPG/1200px-Logo_SMKN3Yk.JPG" />
                        </div>
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Username</span>
                        </label>
                        <input type="text" name="username" placeholder="Masukkan Username" class="input input-bordered" required autofocus />
                    </div>
                    <div class="form-control mt-4">
                        <label class="label">
                            <span class="label-text">Password</span>
                        </label>
                        <input type="password" name="password" placeholder="Password" class="input input-bordered" required />
                    </div>
                    <div class="form-control mt-4">
                        <label class="label">
                            <span class="label-text">Level</span>
                        </label>
                        <select name="level" class="select select-bordered">
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                    <div class="form-control mt-6">
                        <button class="btn btn-primary w-full">Login</button>
                    </div>
                    <div class="text-center mt-4">
                        <a href="register.php" class="link link-hover">Belum punya akun?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>

        // Function to get query string parameters
        function getQueryParam(param) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(param);
        }

        // Check for the 'message' parameter in the query string
        const message = getQueryParam('message');
        if (message) {
            // Display an alert if the 'message' parameter exists
            alert(message);
        }

    </script>       

</body>
</html>
