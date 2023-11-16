<?php
$nama = 'Adella';
$tinggi = 162;
$bb = 80;

$a = $tinggi - 100;
$b = $a * 15/100;

$bmi = $a - $b;

if($bmi < 19) {
    $kategori = "Kurus";
} else if ($bmi >= 19 && $bmi < 25){
    $kategori = "Sedang";
} else {
    $kategori = "Gemuk";
}

echo "Halo, $nama. Nilai BMI anda adalah $bmi, anda termasuk $kategori"
?>