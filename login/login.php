<!DOCTYPE html>
<html lang="en" themes="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Login Page</title>
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
        .input-custom {
            background-color: #ffffff; /* White */
            border: 1px solid #4caf50; /* Green border */
        }
        .btn-custom {
            background-color: #4caf50; /* Green */
            color: #ffffff; /* White text */
        }
    </style>
</head>
<body class="bg-white text-gray-800">
    <div class="hero bg-custom-green min-h-screen flex items-center">
        <div class="container mx-auto flex justify-center">
            <!-- Login Card -->
            <div class="w-full max-w-sm">
                <div class="card bg-white shadow-2xl border border-custom-green">
                    <form class="card-body" method="POST" action="checklogin.php">
                        <div class="avatar justify-center items-center mb-4">
                            <div class="w-16 rounded-full">
                                <img src="https://upload.wikimedia.org/wikipedia/id/thumb/f/f0/Logo_SMKN3Yk.JPG/1200px-Logo_SMKN3Yk.JPG" />
                            </div>
                        </div>
                        <div class="flex justify-center mb-4">
                            <h1 class="font-semibold text-2xl text-custom-green">Login Sekarang!</h1>
                        </div>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text text-custom-green">Username</span>
                            </label>
                            <input type="text" name="username" placeholder="Masukkan Username" class="input input-bordered input-custom" required autofocus />
                        </div>
                        <div class="form-control mt-4">
                            <label class="label">
                                <span class="label-text text-custom-green">Password</span>
                            </label>
                            <input type="password" name="password" placeholder="Password" class="input input-bordered input-custom" required />
                        </div>
                        <div class="form-control mt-4">
                            <label class="label">
                                <span class="label-text text-custom-green">Level</span>
                            </label>
                            <select name="level" class="select select-bordered input-custom">
                                <option value="user">User</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                        <div class="form-control mt-6">
                            <button class="btn btn-custom w-full">Login</button>
                        </div>
                        <div class="text-center mt-4">
                            <a href="register.php" class="link text-custom-green hover:text-gray-700">Belum punya akun?</a>
                        </div>
                    </form>
                </div>
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
