<?php
function persegi($sisi){
    $luasPersegi = $sisi * $sisi;
    echo "Luas Persegi <br>";
    echo "Sisi = $sisi <br>";
    echo "$sisi * $sisi = $luasPersegi <br><br>";
}
persegi(4);

function persegi_panjang($panjang, $lebar){
    $luasPersegiPanjang = $panjang * $lebar;
    echo "Luas Persegi Panjang <br>";
    echo "Panjang = $panjang <br>";
    echo "Lebar = $lebar <br>";
    echo "$panjang * $lebar = $luasPersegiPanjang <br><br>";
}
persegi_panjang(12, 6);

function segitiga($alas, $tinggi) {
    $luasSegitiga = $alas * $tinggi / 2;
    echo "Luas Segitiga <br>";
    echo "Alas = $alas <br>";
    echo "Tinggi = $tinggi <br>";
    echo "1/2 * $alas * $tinggi = $luasSegitiga <br><br>";
}
segitiga(12, 8);

function lingkaran($jarijari){
    $phi = 3.14;
    $luasLingkaran = $phi * ($jarijari * $jarijari);
    echo "Luas Lingkaran <br>";
    echo "Jari-jari = $jarijari <br>";
    echo "$phi * ($jarijari*$jarijari) = $luasLingkaran <br><br>";
}
lingkaran(14);

function kubus($sisiK){
    $volumeK = $sisiK * $sisiK * $sisiK;
    echo "Volume Kubus <br>";
    echo "Sisi = $sisiK <br>";
    echo "$sisiK * $sisiK * $sisiK = $volumeK <br><br>";
}
kubus(12);
?>