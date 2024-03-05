<?php
// 1. Membuat Array
$hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu");
$bulan = ["Januari", "Februari", "Maret"];
$mhs = ["Rafi", 4.0, false];


// 2. Mencetak Array (1)
// Menggunakan Index / Cetak 1 nilai menggunakan index
echo $hari[0];
echo "<br>";
echo $bulan[2];
echo "<br>";
echo $mhs[1];
echo "<hr>";
// Mencetak seluruh isi array
// Var_dump() atau print_r()
// digunakan untuk debbugging
echo var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
echo var_dump($mhs);
echo "<hr>";


// 3. Manipulasi Array
// Menambah isi array
// DiAkhir: [] atau array_push()
$hari[] = "Kamis";
$hari[] = "Jumat";
print_r($hari);
echo "<br>";
array_push($bulan, "April", "Mei", "Juni", "Juli", "Agustus");
print_r($bulan);
echo "<br>";
// Menambah isi Array
// DiAwal array: array_unshift()
array_unshift($mhs, "233040073");
print_r($mhs);
echo "<hr>";

// Menghapus isi array
// Di belakang: array_pop()
// Di depan: array_shift()
array_pop($hari);
print_r($hari);
echo "<br>";
array_shift($bulan);
print_r($bulan);
// 4. Mencetak Array (2)
