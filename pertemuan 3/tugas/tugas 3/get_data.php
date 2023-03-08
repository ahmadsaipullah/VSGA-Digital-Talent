<?php
echo "Di panggil dari action post. <br>";
$tinggi = $_POST['tinggibadan'];
$berat = $_POST['beratbadan'];

$bmi = $berat / ($tinggi * $tinggi);

echo "Tinggi Badan : $tinggi <br>";
echo "Berat Badan : $berat <br>";


function getStatusBmi($berat, $bmi)
{
  if ($berat < 18.5) {
    echo "BMI Anda Adalah : $bmi Kekurangan berat badan <br>";
  } else if ($berat <= 18.5  || $berat <= 24.9) {
    echo "BMI Anda Adalah : $bmi Normal (ideal) <br>";
  } else if ($berat <= 25.0  || $berat <= 29.9) {
    echo "BMI Anda Adalah : $bmi Kelebihan Berat badan <br>";
  } else if ($berat > 30.0) {
    echo "BMI Anda Adalah : $bmi Kegemukan (Obesitas) <br>";
  }
}

getStatusBmi($berat, $bmi);
