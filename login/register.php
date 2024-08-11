<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v4.1.1">
  <title>Web</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/floating-labels/">
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }
    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
    body, html {
      height: 100%;
    }
    .form-signin {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }
  </style>
  <link href="../assets/dist/css/floating-labels.css" rel="stylesheet">
</head>
<body>
  <form class="form-signin" method="POST" action="register_process.php">
    <div class="text-center mb-4">
      <h1 class="h3 mb-3 font-weight-normal">BUAT AKUN ANDA</h1>
    </div>
    <div class="form-label-group">
      <input type="text" name="username" class="form-control" placeholder="Masukan Username" required autofocus>
      <label for="username">Username</label>
    </div>
    <div class="form-label-group">
      <input type="text"  class="form-control" placeholder="Password" required>
      <label for="namalengkap">namalengkap</label>
    </div>
    <div class="form-label-group">
      <input type="password" name="password" class="form-control" placeholder="Password" required>
      <label for="password">Password</label>
    </div>
    <div class="form-label-group">
      <select name="level" class="form-control">
        <option value="user">user</option>
      </select>
    </div>
    <a href="login.php">sudah punya akun?</a>
    <button class="btn btn-lg btn-primary btn-block" type="submit" value="Register">register</button>
    <p class="mt-5 mb-3 text-muted text-center">&copy; dibuat Yoga Aditya Pratama</p>
  </form>
</body>
</html>

