<?php
$nilai = 60;
if ($nilai >= 80) {
  echo "Lulus <br>";
} else {
  echo "Tidak Lulus <br>";
}

// A : Sangat Baik
// B : Baik
// C : Cukup
// D : Tidak Baik

$nilaiHuruf = 'D';
if ($nilaiHuruf == 'A') {
  echo "Sangat Baik";
} else if ($nilaiHuruf == 'B') {
  echo "Baik";
} else if ($nilaiHuruf == 'C') {
  echo "Cukup";
} else {
  echo "Tidak Baik";
}
