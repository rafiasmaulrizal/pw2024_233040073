<?php
$mahasiswa = [
  [
    "nama" => "Rafi Asmaul Rizal",
    "nrp" => "233040073",
    "email" => "rafi.233040073@mail.unpas.ac.id",
    "jurusan" => "Teknik Informatika",
    "gambar" => "1.png"
  ],
  [
    "nama" => "Adi Nugraha Wijaya",
    "nrp" => "233040345",
    "email" => "adi.233040345@mail.unpas.ac.id",
    "jurusan" => "Teknik Informatika",
    "gambar" => "2.png"

  ],
  [
    "nama" => "Sarah Indah Putri",
    "nrp" => "233040346",
    "email" => "sarah.233040346@mail.unpas.ac.id",
    "jurusan" => "Teknik Informatika",
    "gambar" => "3.png"

  ],
  [
    "nama" => "Rizki Prabowo Santoso",
    "nrp" => "233040347",
    "email" => "rizki.233040347@mail.unpas.ac.id",
    "jurusan" => "Teknik Informatika",
    "gambar" => "4.png"

  ],
  [
    "nama" => "Andi Budiarto Wibowo",
    "nrp" => "233040348",
    "email" => "adi.233040348@mail.unpas.ac.id",
    "jurusan" => "Teknik Informatika",
    "gambar" => "5.png"

  ],
  [
    "nama" => "Aisha Nurul Hikmah",
    "nrp" => "233040349",
    "email" => "aisha.233040349@mail.unpas.ac.id",
    "jurusan" => "Teknik Informatika",
    "gambar" => "6.png"
  ],
  [
    "nama" => "Nurul Hasanah Sari",
    "nrp" => "233040350",
    "email" => "nurul.233040350@mail.unpas.ac.id",
    "jurusan" => "Teknik Informatika",
    "gambar" => "7.png"
  ],
  [
    "nama" => "Maya Dewi Lestari",
    "nrp" => "233040351",
    "email" => "maya.233040351@mail.unpas.ac.id",
    "jurusan" => "Teknik Informatika",
    "gambar" => "8.png"
  ],
  [
    "nama" => "Adi Pratama",
    "nrp" => "233040352",
    "email" => "adi.233040352@mail.unpas.ac.id",
    "jurusan" => "Teknik Informatika",
    "gambar" => "9.png"
  ],
  [
    "nama" => "Dewi Anggun Sariyati",
    "nrp" => "233040353",
    "email" => "dewi.233040353@mail.unpas.ac.id",
    "jurusan" => "Teknik Informatika",
    "gambar" => "10.png"
  ],
]
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
  <style>
    img {
      width: 100px;
    }
  </style>
</head>

<body>
  <h3>Daftar Mahasiswa</h3>

  <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
      <li>
        <img src="img/<?= $mhs["gambar"]; ?>" alt="">
      <li>Nama : <?= $mhs["nama"]; ?></li>
      <li>NRP : <?= $mhs["nrp"]; ?></li>
      <li>Email : <?= $mhs["email"]; ?></li>
      <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
    </ul>
  <?php endforeach; ?>
</body>

</html>