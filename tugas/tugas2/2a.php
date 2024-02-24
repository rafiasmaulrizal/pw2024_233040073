<?php
// variabel yang menyimpan nama depan dan nama belakang
$firstname = "Rafi";
$lastname = "Asmaul Rizal";

for ($i = 1; $i <= 100; $i++) {
  if ($i % 3 == 0 && $i % 5 == 0) {
    echo $firstname . " " . $lastname . "<br>";
  } elseif ($i % 3 == 0) {
    echo $firstname . "<br>";
  } elseif ($i % 5 == 0) {
    echo $lastname . "<br>";
  } else {
    echo $i;
    echo "<br>";
  }
}
