<?php
echo "simge"." "  ."atik";
echo "<br>";
$sayi1 = 10;
$sayi2 = 20;
echo "$sayi1 + $sayi2 =" . ($sayi1 + $sayi2);
echo "<br>";
echo '\$sayi1 + \$sayi2 =' . ($sayi1 + $sayi2);
echo "<br>";
$sonuc= ($sayi1 + $sayi2);
echo "$sayi1 + $sayi2 =" . $sonuc;
echo "<br>";
$sayi1 = 10;
$sayi2 = 20;
echo "$sayi1 - $sayi2 =" . ($sayi1 - $sayi2);
echo "<br>";
$x = 4;
$y = 2;
echo "$x<sup>$y<sup>" . pow($x , $y);
echo "<br>";

$z = 71;
echo "<br> $z sayısı: " . (fmod($z, 2) == 0 ? "Çifttir" : "Tektir");
echo "<br>";

$z = 72;
echo "<br> $z sayısı: " . (fmod($z, 2) == 0 ? "Çifttir" : "Tektir");
echo "<br>";

$x = 15.313;
$y = 15.385;

echo "$x Bir ondalık basamak yuvarlaması sonucu: " . round($x, 1) . "<br>";
echo "$y Bir ondalık basamak yuvarlaması sonucu: " . round($y, 1) . "<br>";

echo "$x İki ondalık basamak yuvarlaması sonucu: " . round($x, 2) . "<br>";
echo "$y İki ondalık basamak yuvarlaması sonucu: " . round($y, 2) . "<br>";
?>