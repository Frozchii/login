<!DOCTYPE html>
<html lang="en"  data-themes="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Document</title>
</head>

<body>

    <div class="navbar bg-green-500 z-10 relative text-white">
        <div class="navbar-start">
  
            <div>
            <!-- side bar -->
                <div class="drawer">
                    <input id="my-drawer" type="checkbox" class="drawer-toggle" />
                    <div class="drawer-content">
                        <!-- Page content here -->
                        <label for="my-drawer" class="btn btn-ghost drawer-button ml-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                            </svg>
                        </label>
                    </div>
                    <div class="drawer-side">
                        <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
                        <ul class="menu bg-green-500 text-white min-h-full w-80 p-4">
                            <h1 class="text-2xl text-center">MENU</h1>
                            <!-- Sidebar content here -->
                            <li>
                                <a href="home_user.php">
                                    <i class="fa fa-home" aria-hidden="true"></i> Home
                                </a>
                            </li>
                            <li>
                                <a href="ekstra.php">
                                    <i class="fa fa-user" aria-hidden="true"></i> Ekstra
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <a href="home_user.php" class="btn btn-ghost text-xl">Home</a> 
            <a  href="ekstra.php" class="btn btn-ghost text-xl">Ekstra</a> 
        </div>
        <div class="navbar-center">
            <a class="btn btn-ghost text-xl">SKAGATA</a>
        </div>
        <div class="navbar-end">

            <!-- Button to open the modal -->
            <label for="account-modal" class="btn btn-ghost">
                <i class="fa fa-user" aria-hidden="true"></i>
            </label>

            <!-- Modal structure -->
            <input type="checkbox" id="account-modal" class="modal-toggle" />
            <div class="modal modal-bottom sm:modal-middle">
                <!-- container -->
                <div class="modal-box bg-white text-black top-8 right-1 absolute mt-4 mr-4 w-1/5 mr-8 tec">
                    <div>
                        <h3 class="font-bold text-lg text-center">Account Details</h3>
                        <p class="py-4">Username: </p>
                        <p class="mb-1"> <?= $_SESSION['username']; ?></p>
                        <p class="py-4">Nama Lengkap:</p>
                        <p class="mb-1"><?= $_SESSION['nama_lengkap']; ?></p>
                        <p class="py-4">level: <?= $_SESSION['level']; ?></p>
                    </div>
                    <div class="modal-action justify-center">
                        <!-- Logout button -->
                        <a href="../logout.php" class="btn btn-outline" onclick="closeModal()">Logout</a>
                        <!-- Close button -->
                        <label for="account-modal" class="btn">Close</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Script to handle logout action -->
    <script>document.documentElement.setAttribute('data-theme', 'dim');</script>

    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>
