<?php
echo "Di panggil dari action post. <br>";
$tinggi = $_POST['tinggibadan'];
$berat = $_POST['beratbadan'];

$bmi = $berat / ($tinggi * $tinggi);

echo "Tinggi Badan : $tinggi <br>";
echo "Berat Badan : $berat <br>";
echo "BMI Anda Adalah : $bmi <br>";
