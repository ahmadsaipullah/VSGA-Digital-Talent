<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan Form Karyawan</title>
</head>

<?php

$dataJenisKelmain = ["Laki-Laki", "Perumpuan"];
$dataAgama = ["Kristen", "Katolik", "Islam", "Budha", "Hindu"];
$dataGolongan = ["I", "II", "III"];

// file json untuk menampung data
$fileJson = "data_karyawan.json";
//array untuk menampung data karyawan
$dataKaryawan = [];

//membaca file json
//menggunakan file_get_contents
$isiDataJson = file_get_contents($fileJson);

//isi data karyawan dari file json diubah menjadi array
$dataKaryawan = json_decode($isiDataJson, true);



if (isset($_POST['button'])) {

  $nik = $_POST['nik'];
  $nama = $_POST['nama'];
  $jeniskelamin = $_POST['jeniskelamin'];
  $agama = $_POST['agama'];
  $alamat = $_POST['alamat'];
  $no_hp = $_POST['no_hp'];
  $email = $_POST['email'];
  $golongan = $_POST['golongan'];
  $gaji = $_POST['gaji'];

  function tunjangan($golongan)
  {
    if ($golongan == "I") {
      return 1000000;
    } else if ($golongan == "II") {
      return 2000000;
    } else {
      return 3000000;
    }
  }
  $tunjangan = tunjangan($golongan);

  function total_gaji($gaji, $tunjangan)
  {
    $total = $gaji + $tunjangan;
    return $total;
  }

  $total = total_gaji($gaji, $tunjangan);



  $dataBaru = [

    'nik' => $nik,
    'nama' => $nama,
    'jeniskelamin' => $jeniskelamin,
    'agama' => $agama,
    'alamat' => $alamat,
    'no_hp' => $no_hp,
    'email' => $email,
    'golongan' => $golongan,
    'gaji' => $gaji,
    'tunjangan' => $tunjangan,
    'total' => $total

  ];

  array_push($dataKaryawan, $dataBaru);

  //ubah arrar menjadi json
  $dataYangDiTulis = json_encode($dataKaryawan, JSON_PRETTY_PRINT);
  file_put_contents($fileJson, $dataYangDiTulis);
}

?>

<body>
  <form action="" method="post">
    <table border="1px" cellspacing="0" cellpadding="5px">
      <h1>Form Karyawan</h1>
      <tr>
        <td>Nik</td>
        <td>
          <input type="text" name="nik" id="nik" required>
        </td>
      </tr>
      <tr>
        <td>Nama</td>
        <td>
          <input type="text" name="nama" id="nama" required>
        </td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td>
          <select name="jeniskelamin" id="jeniskelamin" required>
            <option>---Pilih Jenis Kelamin---</option>
            <?php
            foreach ($dataJenisKelmain as $jk) {
              echo "<option value='$jk'>$jk</option> ";
            }
            ?>
          </select>
        </td>
      </tr>
      <tr>
        <td>Agama</td>
        <td>
          <select name="agama" id="agama" required>
            <option>---Pilih Agama---</option>
            <?php
            foreach ($dataAgama as $agama) {
              echo "<option value='$agama'>$agama</option> ";
            }
            ?>
          </select>
        </td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td>
          <input type="text" name="alamat" id="alamat" required>
        </td>
      </tr>
      <tr>
        <td>No. Handpone</td>
        <td>
          <input type="text" name="no_hp" id="no_hp" required>
        </td>
      </tr>
      <tr>
        <td>Email</td>
        <td>
          <input type="email" name="email" id="email" required>
        </td>
      </tr>
      <tr>
        <td>Golongan</td>
        <td>
          <select name="golongan" id="golongan" required>
            <option>---Pilih Golongan---</option>
            <?php
            foreach ($dataGolongan as $golongan) {
              echo "<option value='$golongan'>$golongan</option> ";
            }
            ?>
          </select>
        </td>
      </tr>
      <tr>
        <td>Gaji</td>
        <td>
          <input type="text" name="gaji" id="gaji" required>
        </td>
      </tr>
      <tr>
        <td></td>
        <td>
          <input type="submit" value="simpan" name="button" id="button">
        </td>
      </tr>
    </table>
  </form>

  <hr>

  <table width="100%" border="1px" cellspacing="0" cellpadding="5px">
    <thead>
      <tr>
        <th>No</th>
        <th>Nik</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Agama</th>
        <th>Alamat</th>
        <th>No Telpon</th>
        <th>Email</th>
        <th>Golongan</th>
        <th>Gaji</th>
        <th>Tunjangan</th>
        <th>Total Gaji</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 1;


      foreach ($dataKaryawan as $karyawan) {
        echo "<tr>";
        echo "<td>" . $no++ . "</td>";
        echo "<td>" . $karyawan['nik'] . "</td>";
        echo "<td>" . $karyawan['nama'] . "</td>";
        echo "<td>" . $karyawan['jeniskelamin'] . "</td>";
        echo "<td>" . $karyawan['agama'] . "</td>";
        echo "<td>" . $karyawan['alamat'] . "</td>";
        echo "<td>" . $karyawan['no_hp'] . "</td>";
        echo "<td>" . $karyawan['email'] . "</td>";
        echo "<td>" . $karyawan['golongan'] . "</td>";
        echo "<td>" . $karyawan['gaji'] . "</td>";
        echo "<td>" . $karyawan['tunjangan'] . "</td>";
        echo "<td>" . $karyawan['total'] . "</td>";
        echo "</tr>";
      }
      ?>
    </tbody>

  </table>

</body>

</html>