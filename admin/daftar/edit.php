<?php
include '../../connect.php';

// Ambil ID dari query string
$id = $_GET['id'];

// Validasi ID
if (!isset($id) || !is_numeric($id)) {
    echo "ID tidak valid";
    exit();
}

// Ambil data dari database berdasarkan ID
$sql = "SELECT * FROM items WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "Data tidak ditemukan";
    exit();
}

include '../../head.php';
?>

<div class="mt-8 text-center">
  <h1>Edit Data</h1>
  <form action="edit_process.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <div class="mx-8 my-5">
      <label class="input input-bordered flex items-center gap-2">
        Name
        <input type="text" name="name" value="<?php echo htmlspecialchars($row['name']); ?>" required>
      </label>
      <label class="input input-bordered flex items-center gap-2">
        Description
        <input type="text" name="description" value="<?php echo htmlspecialchars($row['description']); ?>" required>
      </label>
      <label class="input input-bordered flex items-center gap-2">
        YouTube Link
        <input type="url" name="youtube_link" value="<?php echo htmlspecialchars($row['youtube_link']); ?>">
      </label>
      <label class="input input-bordered flex items-center gap-2">
        New Image (Leave blank if not changing)
        <input type="file" class="file-input w-full max-w-xs" name="image">
      </label>
      <div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="../daftar.php" class="btn btn-secondary">Kembali</a>
      </div>
    </div>
  </form>
</div>
