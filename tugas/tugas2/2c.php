<style>
  .kotak {
    display: inline-block;
    justify-content: center;
    width: 50px;
    height: 50px;
    text-align: center;
    line-height: 50px;
    background-color: yellow;
    border: 1.2px solid black;
    font-family: Arial;
  }
</style>


<?php
for ($i = 10; $i >= 1; $i--) {
  for ($col = 1; $col <= $i; $col++) {
    echo '<div class="kotak">' . $col . '</div>';
  }
  echo "<br>";
}
