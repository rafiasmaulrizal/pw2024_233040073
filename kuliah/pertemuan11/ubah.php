<?php
require 'functions.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $mahasiswa = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
}
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('Data Berhasil Diubah!');
            document.location.href = 'index.php';
          </script>";
  } else {
    echo "<script>
            alert('Data Gagal Diubah!');
            document.location.href = 'index.php';
          </script>";
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pemprograman Web | Ubah Data Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container col-5 py-5 my-5 ">
    <h1 class="fw-bold mb-5 ">Ubah data Mahasiswa</h1>
    
    <form action="" method="POST">
      <input type="hidden" name="id" value="<?= $mahasiswa["id"]; ?>">

      <div class="mb-3">
        <label for="nama" class="form-label fw-bold text-success">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" required value="<?= $mahasiswa["nama"]; ?>">
      </div>
      <div class="mb-3">
        <label for="nim" class="form-label fw-bold  text-success">NIM</label>
        <input type="text" class="form-control" id="nim" name="nim" required value="<?= $mahasiswa["nim"]; ?>">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label fw-bold  text-success">Email</label>
        <input type="email" class="form-control" id="email" name="email" required value="<?= $mahasiswa["email"]; ?>">
      </div>
      <div class="mb-3">
        <label for="jurusan" class="form-label fw-bold  text-success">Jurusan</label>
        <input type="text" class="form-control" id="jurusan" name="jurusan" required value="<?= $mahasiswa["jurusan"]; ?>">
      </div>
      <button type="submit" class="btn btn-primary fw-bold" name="ubah">Ubah</button>
    </form>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
