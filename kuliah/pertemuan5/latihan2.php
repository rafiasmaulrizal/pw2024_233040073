<?php
$binatang = ["😺kucing", "🐰kelinci", "🐵monyet", "🐨koala", "🐮sapi", "🐊buaya", "🐦‍⬛beo", "🐸katak", "🦁singa", "👽alien"];
$makanan = ["🍕pizza", "🍔hamburger", "🌭hotdog", "🍿popcorn", "🥞cake", "🥨biscuit", "🥐pahaayam", "🥗sopbuah", "🥪toast", "🌮nasigoreng"];
$minuman = ["☕kopi", "🍼susu", "🫖airpanas", "🍵airsumur", "🍾airkeras", "🍷airmurni", "🍸airtawar", "🍹jusbuah", "🍺kukubima", "🍻airsoda", "🥂airfanta"]
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Belajar Array</title>
</head>

<body>
  <h3>Daftar Binatang</h3>
  <ol>
    <?php for ($i = 0; $i < count($binatang); $i++) { ?>
      <li><?php echo $binatang[$i]; ?> </li>
    <?php } ?>
  </ol>
  <h3>Daftar Makanan</h3>
  <ul>
    <?php for ($i = 0; $i < count($makanan); $i++) { ?>
      <li><?php echo $makanan[$i]; ?> </li>
    <?php } ?>
  </ul>
  <h3>Daftar Minuman</h3>
  <ol>
    <?php for ($i = 0; $i < count($minuman); $i++) { ?>
      <li><?php echo $minuman[$i]; ?> </li>
    <?php } ?>
  </ol>

  <hr>
  <h3>Daftar Binatang</h3>
  <ol>
    <?php foreach ($binatang as $b) : ?>
      <li><?php echo $b ?> </li>
    <?php endforeach ?>
  </ol>
  <hr>
  
  <h3>Daftar Makanan</h3>
  <ol>
    <?php foreach ($makanan as $m) : ?>
      <li><?php echo $m ?> </li>
    <?php endforeach ?>
  </ol>
</body>

</html>