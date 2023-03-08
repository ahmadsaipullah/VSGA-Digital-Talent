<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas Kalkulator POST</title>
</head>

<body>

  <h1>Form Kalkulator</h1>
  <h3>Nama: AHMAD SAIFULLAH</h3>
  <form action="" method="post">
    <table>
      <tr>
        <td>Angka Pertama</td>
        <td>:</td>
        <td>
          <input type="number" name="angkapertama" id="angkapertama" required>
        </td>
      </tr>
      <tr>
        <td>Angka Kedua</td>
        <td>:</td>
        <td>
          <input type="number" name="angkakedua" id="angkakedua" required>
        </td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td> <input type="submit" value="jumlah" name="button" id="button">
          <input type="submit" value="kurang" name="button" id="button">
          <input type="submit" value="kali" name="button" id="button">
          <input type="submit" value="bagi" name="button" id="button">
          <input type="submit" value="pangkat" name="button" id="button">
          <input type="submit" value="sisa" name="button" id="button">
        </td>
      </tr>
    </table>
  </form>
  <?php

  if (isset($_POST['button'])) {
    $operator = $_POST['button'];
    $pertama = $_POST['angkapertama'];
    $kedua = $_POST['angkakedua'];

    function jumlah($pertama, $kedua)
    {
      $jumlah = $pertama + $kedua;
      return $jumlah;
    }

    function kurang($pertama, $kedua)
    {
      $kurang = $pertama - $kedua;
      return $kurang;
    }

    function kali($pertama, $kedua)
    {
      $kali = $pertama * $kedua;
      return $kali;
    }

    function bagi($pertama, $kedua)
    {
      $bagi = $pertama / $kedua;
      return $bagi;
    }

    function pangkat($pertama, $kedua)
    {
      $pangkat = $pertama ** $kedua;
      return $pangkat;
    }

    function sisa($pertama, $kedua)
    {
      $sisa = $pertama % $kedua;
      return $sisa;
    }

    if ($operator == "jumlah") {
      $jumlah = jumlah($pertama, $kedua);
      echo "$pertama + $kedua = $jumlah ";
    } else if ($operator == "kurang") {
      $kurang = kurang($pertama, $kedua);
      echo "$pertama - $kedua = $kurang ";
    } else if ($operator == "kali") {
      $kali = kali($pertama, $kedua);
      echo "$pertama * $kedua = $kali";
    } else if ($operator == "bagi") {
      $bagi = bagi($pertama, $kedua);
      echo "$pertama / $kedua = $bagi";
    } else if ($operator == "pangkat") {
      $pangkat = pangkat($pertama, $kedua);
      echo "$pertama ** $kedua = $pangkat";
    } else if ($operator == "sisa") {
      $sisa = sisa($pertama, $kedua);
      echo "$pertama % $kedua = $sisa";
    } else {
      echo "masukan angka ulang";
    }
  }

  ?>

</body>

</html>