<?php

function koneksi(){
    $db = mysqli_connect('localhost', 'root', '', 'pw2024_233040073');

    return $db;
}

function query($sql)
{

$conn = koneksi();
$result = mysqli_query($conn, $sql);

$rows = [];
while($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
}

return $rows;

}

function tambah($data)
{
  $conn = koneksi();

  $nama = mysqli_real_escape_string($conn, htmlspecialchars($data['nama']));
  $nim = mysqli_real_escape_string($conn, htmlspecialchars($data['nim']));
  $email = mysqli_real_escape_string($conn, htmlspecialchars($data['email']));
  $jurusan = mysqli_real_escape_string($conn, htmlspecialchars($data['jurusan']));

//   // Upload gambar
//   $gambar = tambah();
//   if (!$gambar) {
//     return false;
//   }

  $query = "INSERT INTO mahasiswa (nama, nim, email, jurusan)
            VALUES ('$nama', '$nim', '$email', '$jurusan')";

  if (mysqli_query($conn, $query)) {
    return mysqli_affected_rows($conn);
  } else {
    return 0;
  }

  
}

function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();
  $id = mysqli_real_escape_string($conn, htmlspecialchars($data['id']));
  $nama = mysqli_real_escape_string($conn, htmlspecialchars($data['nama']));
  $nim = mysqli_real_escape_string($conn, htmlspecialchars($data['nim']));
  $email = mysqli_real_escape_string($conn, htmlspecialchars($data['email']));
  $jurusan = mysqli_real_escape_string($conn, htmlspecialchars($data['jurusan']));
  
  $query = "UPDATE mahasiswa SET
            nama = '$nama',
            nim = '$nim',
            email = '$email',
            jurusan = '$jurusan'
            WHERE id = $id";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}




?>