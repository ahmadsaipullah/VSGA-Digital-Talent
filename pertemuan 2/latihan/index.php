<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pengernalan Operator</title>
</head>

<body>
  <h1>Pengenalan Operator</h1>

  <?php
  // variabel
  $nama = "Micheal"; // string
  $gaji = 3500000; // integer
  $phi = 3.14; // float
  $valid = true; // boolean
  $listKota = ["Jakarta", "Depok", "Bogor", 10];

  // tipe data integer
  // operator aritmatika
  $angka_pertama = 10;
  $angka_kedua = 3;

  $hasil = $angka_pertama + $angka_kedua;
  //var_dump($hasil); // mengetahui jenis tipe data
  //var_dump($valid);
  $valid = 10;
  //var_dump($valid);
  //var_dump($nama);
  //echo $listKota[2];

  // operator aritmatika
  // + - * / ** %
  $jumlah = $angka_pertama + $angka_kedua; // 13
  $kurang = $angka_pertama - $angka_kedua; // 7
  $perkalian = $angka_pertama * $angka_kedua; // 30
  $pembagian = $angka_pertama / $angka_kedua; // 3.
  $pangkat = $angka_pertama ** $angka_kedua; // 1000
  $sisaBagi = $angka_pertama % $angka_kedua; // 1

  // var_dump($jumlah);
  // var_dump($kurang);
  // var_dump($perkalian);
  // var_dump($pembagian);
  // var_dump($pangkat);
  // var_dump($sisaBagi);

  $speed = 83;

  $speed = $speed + 10; // 83 + 10
  // var_dump($speed);

  // operator penugasan
  $speed += 10;
  // var_dump($speed);

  // operator increment dan decrement
  $nilai = 10;
  $nilai++;  // menjumlah dengan angka 1
  // var_dump($nilai);

  $nilai--; // mengurangi dengan angka 1
  // var_dump($nilai);

  // operator relasi
  // > < (== ===) (!= !==) >= <=
  $a = 6;
  $b = '6';

  $c = $a + $b;
  // var_dump($c);

  // operator logika
  // && (AND)
  // || (OR)
  // ! (NOT)

  // Operator ternary (?)
  // pernyataan ? nilai_true : nilai_false
  $hasil = 10 < 5 ? "a" : "b";
  var_dump($hasil);









  ?>


</body>

</html>