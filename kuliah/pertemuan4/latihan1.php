<?php
echo date("d/m/y");
echo "<br>";
echo date("l, d F Y");
echo "<br>";
echo time();
echo "<br>";
echo date("F", time() + 60 * 60 * 24 * 100);
echo "<br>";
echo mktime(0, 0, 0, 2, 27, 2024);
echo "<br>";
echo date("l", mktime(0, 0, 0, 8, 17, 1945));
