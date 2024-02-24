<style>
  .hitam,
  .putih {
    display: inline-block;
    width: 50px;
    height: 50px;
    line-height: 50px;
    background-color: white;
    border: 1.2px solid black;
  }

  .hitam {
    background-color: black;
  }
</style>

<?php
for ($i = 1; $i <= 5; $i++) {
  for ($col = 1; $col <= 5; $col++) {
    $icol = $i + $col;
    if ($icol % 2 == 0) {
      echo '<div class="hitam"></div>';
    } else {
      echo '<div class="putih"></div>';
    }
  }
  echo "<br>";
}
