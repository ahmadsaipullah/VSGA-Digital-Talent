<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas Kalkulator</title>
</head>

<body>

  <h1>Form Kalkulator</h1>
  <h3>Nama: AHMAD SAIFULLAH</h3>
  <form action="" method="get">
    <label for="angkapertama"> Angka Pertama</label>
    <input type="number" name="angkapertama" id="angkapertama" required>
    <br>
    <br>
    <label for="angkakedua"> Angka Kedua</label>
    <input type="number" name="angkakedua" id="angkakedua" required>
    <br>
    <br>
    <input type="submit" value="jumlah" name="button" id="button">
    <input type="submit" value="kurang" name="button" id="button">
    <input type="submit" value="kali" name="button" id="button">
    <input type="submit" value="bagi" name="button" id="button">
    <input type="submit" value="pangkat" name="button" id="button">
    <input type="submit" value="sisa" name="button" id="button">
  </form>
  <?php

  if (isset($_GET['button'])) {
    $operator = $_GET['button'];
    $pertama = $_GET['angkapertama'];
    $kedua = $_GET['angkakedua'];

    $jumlah = $pertama + $kedua;
    $kurang = $pertama - $kedua;
    $kali = $pertama * $kedua;
    $bagi = $pertama / $kedua;
    $pangkat = $pertama ** $kedua;
    $sisa = $pertama % $kedua;

    if ($operator == "jumlah") {
      echo "$pertama + $kedua = $jumlah";
    } else if ($operator == "kurang") {
      echo "$pertama - $kedua = $kurang";
    } else if ($operator == "kali") {
      echo "$pertama * $kedua = $kali";
    } else if ($operator == "bagi") {
      echo "$pertama / $kedua = $bagi";
    } else if ($operator == "pangkat") {
      echo "$pertama ** $kedua = $pangkat";
    } else if ($operator == "sisa") {
      echo "$pertama % $kedua = $sisa";
    } else {
      echo "masukan angka ulang";
    }
  }

  ?>

</body>

</html>