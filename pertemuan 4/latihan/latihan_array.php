<?php

//indexed array

//cara membuat array
$dataMahasiswa = array();
$dataBarang = [];

$dataHari = array("senin", "selasa", "rabu");
$dataBulan = ["januari", "Februari", "Maret"];

print_r($dataHari);
echo "<br>";
print_r($dataBulan);

echo "<br>";
echo $dataBulan[0] . "<br>";
echo $dataBulan[1] . "<br>";
echo $dataBulan[2] . "<br>";

echo "<br>";
rsort($dataHari);
//for
for ($index = 0; $index < count($dataHari); $index++) {
  echo $dataHari[$index] . "<br>";
}

echo "<br>";
rsort($dataBulan);
//foreach
foreach ($dataBulan as $bulan) {
  echo $bulan . "<br>";
}
