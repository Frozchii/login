<?php
include '../../connect.php';
?>

<?php include '../../head.php'; ?>

<div class="mt-8 text-center">
  <h1>Tambah Data</h1>
  <form action="tambah_process.php" method="post" enctype="multipart/form-data">
    <div class="mx-8 my-5">
      <label class="input input-bordered flex items-center gap-2">
        Name
        <input type="text" class="grow" placeholder="Daisy" id="name" name="name" required />
      </label>
      <label class="input input-bordered flex items-center gap-2">
        Description
        <input type="text" class="grow" placeholder="Deskripsi" id="description" name="description" required />
      </label>
      <label class="input input-bordered flex items-center gap-2">
        Image
        <input type="file" class="file-input w-full max-w-xs" id="file" name="image" required />
      </label>
      <div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="../daftar.php" class="btn btn-secondary">Kembali</a>
      </div>
    </div>
  </form>
</div>
