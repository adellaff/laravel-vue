<?php
//KUBUS
$sisiK = 9;
$volumeK = $sisiK * $sisiK * $sisiK;

echo "VOLUME KUBUS <br>";
echo "Sisi = $sisiK <br>";
echo "Volume = $sisiK * $sisiK * $sisiK = $volumeK <br>";

//BALOK
$panjangB = 12;
$lebarB = 8;
$tinggiB = 5;
$volumeB = $panjangB * $lebarB * $tinggiB;

echo "VOLUME BALOK <br>";
echo "Panjang = $panjangB, Lebar = $lebarB, Tinggi = $tinggiB <br>";
echo "Volume = $panjangB * $lebarB * $tinggiB = $volumeB <br>";

//TABUNG
$jari2T = 20;
$tinggiT = 12;
$phiT = 22/7;
$volumeT = $phiT * ($jari2T * $jari2T) * $tinggiT;

echo "VOLUME TABUNG <br>";
echo "Phi = 22/7, Jari-Jari = $jari2T, Tinggi = $tinggiT <br>";
echo "Volume Tabung = $volumeT";
?>