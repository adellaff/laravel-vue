<?php
//PERSEGI
$sisi = 6;
$luasP = $sisi * $sisi;

echo "Luas Persegi <br>";
echo "Sisi = $sisi <br>";
echo "Keliling = $sisi * $sisi = $luasP <br>";

//PERSEGI PANJANG
$panjang = 12;
$lebar = 4;
$luasPP = $panjang * $lebar;

echo "Luas Persegi Panjang <br>";
echo "Panjang: $panjang <br>";
echo "Lebar: $lebar <br>";
echo "Luas = $panjang * $lebar = $luasPP <br>";

//JAJAR GENJANG
$alasJG = 12;
$tinggiJG = 9;
$luasJG = $alasJG * $tinggiJG;

echo "Luas Jajar Genjang <br>";
echo "alas = $alasJG <br>";
echo "tinggi = $tinggiJG <br>";
echo "Luas = $alasJG * $tinggiJG = $luasJG <br>";

//SEGITIGA
$alasS = 12;
$tinggiS = 4;
$luasS = ($alasS * $tinggiS) / 2;

echo "Luas Segitiga <br>";
echo "alas = $alasS <br>";
echo "tinggi = $tinggiS <br>";
echo "Luas Segitiga = 1/2 * $alasS * $tinggiS = $luasS <br>";

//LINGKARAN
$phi = 22/7;
$jari2 = 35;
$luasL = $phi * ($jari2 * $jari2);

echo "Luas Lingkaran <br>";
echo "jari-jari = $jari2 <br>";
echo "Luas Lingkaran = $phi * 2$jari2 = $luasL <br>";
?>