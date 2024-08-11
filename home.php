<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Document</title>

</head>
<body data-themes="halloween">

  <div class="navbar bg-base-100 z-10 relative">
    <div class="navbar-start">
      <div>
        <div class="drawer">
          <input id="my-drawer" type="checkbox" class="drawer-toggle" />
          <div class="drawer-content">
            <!-- Page content here -->
            <label for="my-drawer" class="btn btn-ghost drawer-button ml-2">
                 <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-5 w-5"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h7" />
                </svg>
            </label>
          </div>
          <div class="drawer-side">
            <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
            <ul class="menu bg-base-200 text-base-content min-h-full w-80 p-4">
              <h1 class="text-2xl text-center" >MENU</h1>
              <!-- Sidebar content here -->
              <li>
                <a>
                  <i class="fa fa-home" aria-hidden="true"> </i>
                  dashboard
                </a>
              </li>
              <li><a>user</a></li>
              <li><a>Sidebar Item 1</a></li>
              <li><a>Sidebar Item 2</a></li>

            </ul>
          </div>
        </div>
      
      </div>
    </div>
    <div class="navbar-center">
      <a class="btn btn-ghost text-xl">daisyUI</a>
    </div>
    <div class="navbar-end">
      <button class="btn btn-ghost btn-circle">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-5 w-5"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor">
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>
      </button>
      
  <!-- Button to open the modal -->
  <label for="account-modal" class="btn btn-ghost">
    <i class="fa fa-user" aria-hidden="true"></i>
  </label>

  <!-- Modal structure -->
  <input type="checkbox" id="account-modal" class="modal-toggle" />
  <div class="modal modal-bottom sm:modal-middle">
    <!-- container -->
    <div class="modal-box top-8 right-1 absolute mt-4 mr-4 w-1/5 mr-8 tec">
      <div>
        <h3 class="font-bold text-lg text-center mb-1">Account Details</h3>
        <p class="py-4">Username: John Doe</p>
        <p class="py-4">Nama Lengkap: john.doe@example.com</p>
        <p class="py-4">username: john.doe@example.com</p>
      </div>
      <div class="modal-action justify-center">
        <label for="account-modal" class="btn btn-outline " onclick="logout()">Logout</label>
        <label for="account-modal" class="btn">Close</label>
      </div>
    </div>
  </div>
    </div>
  </div>

 

  <!-- Script to handle logout action -->
  <script>
      function logout() {
          alert('Logging out...');
      }
  </script>

  <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>