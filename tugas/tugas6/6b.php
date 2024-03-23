<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rangkaian angka terurut</title>
  <style>
    .biru,
    .putih {
      display: inline-block;
      justify-content: center;
      width: 50px;
      height: 50px;
      text-align: center;
      line-height: 50px;
      background-color: yellowgreen;
      border: 2px solid black;
      margin: 2px;
      font-size: 20px;
    }
    .putih {
      background-color: white;
    }
  </style>
</head>

<body>
  <form action="" method="post">
    Masukkan Angka :
    <input type="number" name="angka">
    <button type="submit" name="submit">Tampilkan</button>
  </form>
  <br>
  <?php
  if (isset($_POST['angka'])) {
    $angka = $_POST['angka'];
    for ($i = $angka; $i >= 1; $i--) {
      for ($j = 1; $j <= $i; $j++) {
        if ($i % 2 == 0) {
          echo '<div class="biru">' .$i. '</div>';
        } else {
          echo '<div class="putih">' .$i. '</div>';
        }
      }
      echo "<br>";
    }
  } else {
  }
  ?>
</body>

</html>