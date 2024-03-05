<?php
$komponen = ["Motherboard", "Processor", "Hard Disk", "PC Coller", "VGA Card", "SSD"] ;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>tugas4b</title>
</head>

<body>
  <h3>Macam-macam perangkat keras komputer</h3>
  <ol>
    <?php for ($i = 0; $i < count($komponen); $i++) { ?>
      <li><?php echo $komponen[$i]; ?> </li>
    <?php } ?>
  </ol><br>

  <!-- mengurutkan secara menurun (A – Z) pada macam-macam perangkat keras komputer baru. -->
  <h3>Macam-macam perangkat keras komputer baru</h3>
  <ol>
    <?php array_push($komponen, "Card Reader", "Modem") ;
    asort($komponen); ?>
    <?php foreach ($komponen as $kpb) : ?>
      <li><?= $kpb; ?></li>
    <?php endforeach; ?>
  </ol>
</body>

</html>