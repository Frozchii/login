<?php
include 'head.php';
?>
<div class="navbar bg-green-500 text-white">
  <div class="navbar-start">
    <div class="dropdown">
      <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
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
            d="M4 6h16M4 12h8m-8 6h16" />
        </svg>
      </div>
    </div>
  </div>
  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal px-1">
      <a class="btn btn-ghost text-xl">SKAGATA</a>
    </ul>
  </div>
  <div class="navbar-end mx-8">
    <a href="login/login.php" class="btn">login</a>
  </div>
</div>
