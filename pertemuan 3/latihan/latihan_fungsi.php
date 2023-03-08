<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan Fungsi</title>
</head>

<body>
  <h2>Belajar Fungsi</h2>
  <p>fungsi adalah pekerjaan yang mengembalikan nilai</p>

  <?php

  function getUmur()
  {
    return 40;
  }

  function getUmurParameter($tahunLahir, $tahunSekarang)
  {
    $umur = $tahunSekarang - $tahunLahir;
    return $umur;
  }

  $umur = getUmur();
  $umurBaru = getUmurParameter(1999, 2023);
  echo $umur . "<br>";
  echo $umurBaru;

  ?>

</body>

</html>