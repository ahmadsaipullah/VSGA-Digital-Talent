<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan</title>
</head>

<body>

  <h1>Form Kalkulator</h1>
  <form action="" method="get">
    <label for="angkapertama"> Angka Pertama</label>
    <input type="number" name="angkapertama" id="angkapertama">
    <br>
    <label for="angkakedua"> Angka Kedua</label>
    <input type="number" name="angkakedua" id="angkakedua">
    <br>
    <input type="submit" value="jumlah" name="button" id="button">
  </form>
  <?php

  if (isset($_GET['button'])) {
    $pertama = $_GET['angkapertama'];
    $kedua = $_GET['angkakedua'];

    $jumlah = $pertama + $kedua;
    echo "$pertama + $kedua = $jumlah";
  }

  ?>

</body>

</html>