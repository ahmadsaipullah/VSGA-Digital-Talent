<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan POST</title>
</head>

<body>
  <h1>Latihan POST</h1>
  <h4>Menghitung BMI</h4>
  <form action="get_data_post.php" method="post">
    <table>
      <tr>
        <td>Tinggi Badan (m)</td>
        <td>:</td>
        <td>
          <input type="text" name="tinggibadan" id="tinggibadan">
        </td>
      </tr>
      <tr>
        <td>Berat Badan (kg)</td>
        <td>:</td>
        <td>
          <input type="text" name="beratbadan" id="beratbadan">
        </td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td>
          <input type="submit" value="hitung" name="btnhitung" id="btnhitung">
        </td>
      </tr>
    </table>
  </form>

</body>

</html>