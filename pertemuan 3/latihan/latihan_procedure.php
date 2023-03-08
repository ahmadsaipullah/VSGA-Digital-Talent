<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan Procedure</title>
</head>

<body>
  <h2>Belajar Procedure</h2>
  <?php
  function perkenalan()
  {
    echo "Hai <br>";
    echo "Perkenalkan, nama saya Ipul. <br>";
    echo "senang berkenalan dengan anda";
  }

  function perkenalanParameter($nama, $salam = "Good Morning")
  {
    echo "$salam, <br>";
    echo "Perkenalkan, nama saya $nama. <br>";
    echo "senang berkenalan dengan anda";
  }

  perkenalan();
  echo "<hr>";
  perkenalanParameter("Saipul", "Selamat Pagi");
  echo "<hr>";
  perkenalanParameter("Ahmad",);

  ?>

</body>

</html>