<?php
function cetak_angka($angka)
{
  for ($i = 1; $i <= $angka; $i++) {
    for ($j = 1; $j <= $i; $j++) {
      echo $j . " ";
    }
    echo "<br>";
  }
}
echo cetak_angka(100);
