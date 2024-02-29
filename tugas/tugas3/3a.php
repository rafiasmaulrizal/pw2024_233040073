<?php

// Menghitung Volume Kubus

echo "<h4>Menghitung Luas Lingkaran</h4>";
function hitungLuasLingkaran($r)
{
  echo "Jari-jari = $r cm.<br>";
  $Luas = 3.14 * $r * $r;
  echo "Luas lingkaran = $Luas cm<sup>2</sup>";
}
hitungLuasLingkaran(10);


echo "<hr>";

// Menghitung keliling Lingkaran

echo "<h4>Menghitung Keliling Lingkaran</h4>";
function hitungKelilingLingkaran($r)
{
  echo "Jari-jari = $r cm.<br>";
  $keliling = 2 * 3.14 * $r;
  echo "Keliling lingkaran = $keliling cm";
}

echo hitungKelilingLingkaran(20);
echo "<hr>";
