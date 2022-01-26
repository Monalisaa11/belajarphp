<?php
 //menghitung luas persegi
 $a = 4;

//masukan rumus persegi
$luaspersegi= ($a * $a);

//tampilkan
echo "Luas persegi yang memiliki sisi $a cm adalah $luaspersegi cm";
echo "<hr>";
 //menghitung rumus lingkaran
 $phi= 3.14;
 $r= 8;
 $p= 2;

 //masukan rumus lingkaran
 $luaslingkaran= $phi * ($r ** $p);

 //tamplikan
 echo "Luas lingkaran yang memiliki jari-jari $r cm adalah $luaslingkaran cm";
 echo "<hr>";

 //membandingkan menggunakan operator relasi lebih kecil
 $a = 19;
$b = 20;

//menggunakan operator relasi lebih kecil
$c = $a < $b;
echo "$a < $b: $c";
echo "<hr>";
?>