<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $sayi1 = 123;
$sayi2 = 345;
$metin = "Adü";

/* Değer Varsa */
if ($sayi1) {
    echo "<br>If bloğu çalıştı : $sayi1";
} else {
    echo "<br>Else bloğu çalıştı : $sayi1";
}

/* Değer Yoksa */
if (!$sayi1) {
    echo "<br>If bloğu çalıştı : $sayi1";
} else {
    echo "<br>Else bloğu çalıştı";
}

/* eşitlik Varsa */
if ($sayi1 == $sayi2) {
    echo "<br>Sayılar Eşit: $sayi1 = $sayi2";
} else {
    echo "<br>Sayılar Eşit Değil: $sayi1 != $sayi2";
}

/* eşitlik Yoksa Varsa */
if ($sayi1 != $sayi2) {
    echo "<br>Sayılar Eşit Değil: $sayi1 != $sayi2";
} else {
    echo "<br>Sayılar Eşit: $sayi1 = $sayi2";
}

/* Denklik Varsa */
if ("ogrenci" === "ogrenci") {
    echo "<br>Girilen değerler aynı";
} else {
    echo "<br>Girilen değerler aynı değil.";
}
/* Denklik Varsa */
if ($metin === "Adü") {
    echo "<br>Girilen değerler aynı : $metin";
} else {
    echo "<br>Girilen değerler aynı değil.";
}


/* And Örneği */
if (($sayi1 < $sayi2) and ("ogrenci" === "ogrenci")) {
    echo "<br>Koşullar Sağlandı";
} else {
    echo "<br>Koşullar sağlanmadı.";
}


/* OR Örneği */
if (($sayi1 < $sayi2) or (15 > 25)) {
    echo "<br>Koşullar Sağlandı";
} else {
    echo "<br>Koşullar sağlanmadı.";
}


if ($sayi1 > $sayi2) {
    echo "<br> \$sayi1 Değişkeni \$sayi2 değişkeninden büyüktür. $sayi1>$sayi2";
} else {
    echo "<br> \$sayi1 Değişkeni \$sayi2 değişkeninden küçüktür. $sayi1<$sayi2";
}


if ($sayi1 >= $sayi2) {
    echo "<br> \$sayi1 Değişkeni \$sayi2 değişkeninden büyüktür veya eşittir. $sayi1>=$sayi2";
} else {
    echo "<br> \$sayi1 Değişkeni \$sayi2 değişkeninden küçüktür. $sayi1<$sayi2";
}


$ogrenciDetaylari = array(
    "ogr1" => array(
        "id"        => 1,
        "adi"       => "Havva",
        "soyadi"    => "Yıldız",
        "bolum"     => "Bilgisayar",
        "yas"       => 20,
        "dersler"   => array(
            "ders1" => "Web Programlama",
            "ders2" => "Veri Tabanı",
            "ders3" => "Mobil Programlama"
        ),
        "sınıf"     => 2,
        "memleket"  => "İzmir"
    ),
    "ogr2" => array(
        "id"        => 2,
        "adi"       => "Kemal",
        "soyadi"    => "Yıldız",
        "bolum"     => "Bilgisayar",
        "yas"       => 20,
        "dersler"   => array(
            "ders1" => "Donanım",
            "ders2" => "Sunucu",
            "ders3" => "Mobil Programlama"
        ),
        "sınıf"     => 2,
        "memleket"  => "İzmir"
    ),
    "ogr3" => array(
        "id"        => 3,
        "adi"       => "Kerim",
        "soyadi"    => "Yıldız",
        "bolum"     => "Matematik",
        "yas"       => 25,
        "dersler"   => array(
            "ders1" => "Cebir",
            "ders2" => "Homotopi Teori",
            "ders3" => "Homolojik Cebir"
        ),
        "sınıf"     => 4,
        "memleket"  => "Afyon"
    )
);

echo "<pre>";
print_r($ogrenciDetaylari);
echo "</pre>";













    

     
    ?>



</body>
</html>