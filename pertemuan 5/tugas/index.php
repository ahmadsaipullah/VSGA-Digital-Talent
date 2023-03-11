<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Mahasiswa</title>
  <link rel="stylesheet" href="css/bootstrap.css">
</head>

<?php

$dataJenisKelmain = ["Laki-Laki", "Perumpuan"];
$dataAgama = ["Kristen", "Katolik", "Islam", "Budha", "Hindu"];
$dataMatkul = ["Pemograman Web", "pemograman java", "Basis Data", "Arsitektur Komputer", "Rekayasa Perangkat Lunak", "Bahasa Inggris Teknik", "Interaksi Manusia Dan Komputer", "jaringan Komputer", "Desain Grafis", "Manajemen Project"];
$dataJurusan = ["Teknik Informatika", "Teknik Mesin", "Teknik Industri", "Teknik Sipil", "Teknik Elektro"];

// file json untuk menampung data
$fileJson = "data/data_mahasiswa.json";
//array untuk menampung data karyawan
$dataMahasiswa = [];

//membaca file json
//menggunakan file_get_contents
$isiDataJson = file_get_contents($fileJson);

//isi data karyawan dari file json diubah menjadi array
$dataMahasiswa = json_decode($isiDataJson, true);


if (isset($_POST['button'])) {

  $nama = $_POST['nama'];
  $nim = $_POST['nim'];
  $jeniskelamin = $_POST['jeniskelamin'];
  $tempatlahir = $_POST['tempatlahir'];
  $tanggallahir = $_POST['tanggallahir'];
  $agama = $_POST['agama'];
  $alamat = $_POST['alamat'];
  $telpon = $_POST['telpon'];
  $email = $_POST['email'];
  $jurusan = $_POST['jurusan'];
  $matkul = $_POST['matkul'];
  $nilai = $_POST['nilai'];

  function grade($nilai)
  {
    if ($nilai <= 50) {
      return "E";
    } else if ($nilai <= 70) {
      return "D";
    } else if ($nilai <= 80) {
      return "C";
    } else if ($nilai <= 90) {
      return "B";
    } else if ($nilai <= 100) {
      return "A";
    } else {
      return "Salah Memasukan Angka";
    }
  }
  $grade = grade($nilai);

  function keterangan($nilai)
  {
    if ($nilai <= 70) {
      return "Tidak Lulus";
    } else if ($nilai <= 100) {
      return "Lulus";
    } else {
      return "Salah Memasukan Angka";
    }
  }
  $keterangan = keterangan($nilai);





  $dataBaru = [

    'nama' => $nama,
    'nim' => $nim,
    'jeniskelamin' => $jeniskelamin,
    'tempatlahir' => $tempatlahir,
    'tanggallahir' => $tanggallahir,
    'agama' => $agama,
    'alamat' => $alamat,
    'telpon' => $telpon,
    'email' => $email,
    'jurusan' => $jurusan,
    'matkul' => $matkul,
    'nilai' => $nilai,
    'grade' => $grade,
    'keterangan' => $keterangan

  ];

  array_push($dataMahasiswa, $dataBaru);

  //ubah arrar menjadi json
  $dataYangDiTulis = json_encode($dataMahasiswa, JSON_PRETTY_PRINT);
  file_put_contents($fileJson, $dataYangDiTulis);
}

?>

<body>

  <div class="container bg-secondary my-4">
    <h2 class="text-center text-white py-2">Form Mahasiswa</h2>
  </div>

  <div class="container">
    <form action="" method="post">
      <div class="row">
        <div class="col-md-6">
          <label for="nim">Nim</label>
          <input class="form-control " type="number" name="nim" id="nim" required>
          <label for="nama">Nama</label>
          <input class="form-control " type="text" name="nama" id="nama" required>
          <label for="jeniskelamin">Jenis Kelamin</label>
          <select name="jeniskelamin" id="jeniskelamin" class="form-select" aria-label="Default select example" required>
            <option selected disabled>--Pilih Jenis Kelamin--</option>
            <?php
            foreach ($dataJenisKelmain as $jeniskelamin) {
              echo "<option value='$jeniskelamin'>$jeniskelamin</option> ";
            }
            ?>
          </select>
          <label for="tempatlahir">Tempat Lahir</label>
          <input class="form-control " type="text" name="tempatlahir" id="tempatlahir" required>
          <label for="tanggallahir">Tanggal Lahir</label>
          <input class="form-control " type="date" name="tanggallahir" id="tanggallahir" required>
          <label for="agama">Agama</label>
          <select name="agama" id="agama" class="form-select" aria-label="Default select example" required>
            <option selected disabled>--Pilih Agama--</option>
            <?php
            foreach ($dataAgama as $agama) {
              echo "<option value='$agama'>$agama</option> ";
            }
            ?>
          </select>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" id="alamat" class="form-control" required>
            <label for="telpon">Telpon</label>
            <input type="number" name="telpon" id="telpon" class="form-control" required>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
            <label for="jurusan">Jurusan</label>
            <select name="jurusan" id="jurusan" class="form-select" aria-label="Default select example" required>
              <option selected disabled>--Pilih Jurusan--</option>
              <?php
              foreach ($dataJurusan as $jurusan) {
                echo "<option value='$jurusan'>$jurusan</option> ";
              }
              ?>
            </select>
            <label for="matkul">Mata Kuliah</label>
            <select name="matkul" id="matkul" class="form-select" aria-label="Default select example" required>
              <option selected disabled>--Pilih Matkul--</option>
              <?php
              foreach ($dataMatkul as $matkul) {
                echo "<option value='$matkul'>$matkul</option> ";
              }
              ?>
            </select>
            <label for="nilai">Nilai</label>
            <input type="number" name="nilai" id="nilai" class="form-control" required>
          </div>
        </div>
        <div class="button my-4">
          <button class="btn btn-primary" name="button" id="button">Simpan</button>
        </div>
      </div>
    </form>
  </div>
  <div class="container-fluid">
    <table class="table table-striped border my-4">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Nim</th>
          <th>Jenis Kelamin</th>
          <th>Tempat Lahir</th>
          <th>Tanggal Lahir</th>
          <th>Agama</th>
          <th>Alamat</th>
          <th>No Telpon</th>
          <th>Email</th>
          <th>Jurusan</th>
          <th>Mata Kuliah</th>
          <th>Nilai</th>
          <th>NH</th>
          <th>KET</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        foreach ($dataMahasiswa as $mahasiswa) {
          echo "<tr>";
          echo "<td>" . $no++ . "</td>";
          echo "<td>" . $mahasiswa['nama'] . "</td>";
          echo "<td>" . $mahasiswa['nim'] . "</td>";
          echo "<td>" . $mahasiswa['tempatlahir'] . "</td>";
          echo "<td>" . $mahasiswa['tanggallahir'] . "</td>";
          echo "<td>" . $mahasiswa['jeniskelamin'] . "</td>";
          echo "<td>" . $mahasiswa['agama'] . "</td>";
          echo "<td>" . $mahasiswa['alamat'] . "</td>";
          echo "<td>" . $mahasiswa['telpon'] . "</td>";
          echo "<td>" . $mahasiswa['email'] . "</td>";
          echo "<td>" . $mahasiswa['jurusan'] . "</td>";
          echo "<td>" . $mahasiswa['matkul'] . "</td>";
          echo "<td>" . $mahasiswa['nilai'] . "</td>";
          echo "<td>" . $mahasiswa['grade'] . "</td>";
          echo "<td>" . $mahasiswa['keterangan'] . "</td>";
          echo "</tr>";
        }
        ?>
      </tbody>

    </table>
  </div>



  <script src="js/bootstrap.js"></script>
</body>

</html>