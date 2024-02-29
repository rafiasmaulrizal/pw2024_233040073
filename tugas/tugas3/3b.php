<?php
function urutanAngka($angka)
{
  $r = 1;
  for ($i = 1; $i <= $angka; $i++) {
    for ($j = 1; $j <= $i; $j++) {
      echo $r . " ";
      $r++;
    }
    echo "<br>";
  }
}
echo urutanAngka(5);
