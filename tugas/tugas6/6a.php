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
  <a href="?angka=10">Klik</a>
  <br>
  <?php
  if (isset($_GET['angka'])) {
    $angka = $_GET['angka'];
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