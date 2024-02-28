<?php
// hitung volume 2 kubus
// sisi kubus a = 9, b = 4
// $sisi_a = 9;
// $sisi_b = 4;

// $volume = $sisi_a * $sisi_a * $sisi_a + $sisi_b * $sisi_b * $sisi_b;
// echo "Total volume 2 kubus adalah  = $volume <br>"

echo "<hr>";

function total_volume_dua_kubus($a, $b){
  return $a * $a *$a + $b * $b * $b;
}
 
echo "Total volume 2 kubus a & b adalah  = " . total_volume_dua_kubus(9, 4) ;
echo "<br>";
echo "Total volume 2 kubus c & d adalah  = " . total_volume_dua_kubus(10, 15) ;

?>