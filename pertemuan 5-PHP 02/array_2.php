<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Data Dosen</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 20px;
  }
  table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
    background-color: #fff;
    border-radius: 5px;
    overflow: hidden;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  th, td {
    padding: 12px 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }
  th {
    background-color: #f2f2f2;
    color: #333;
  }
  tr:hover {
    background-color: #f5f5f5;
  }
</style>
</head>
<body>
<?php
$Dosen = [
'nama' => 'Elok Nur Hamdana',
'domisili' => 'Malang',
'jenis_kelamin' => 'Perempuan' ];
?>
<table>
  <tr>
    <th>Informasi Dosen</th>
    <th></th>
  </tr>
  <tr>
    <td>Nama</td>
    <td><?php echo $Dosen['nama']; ?></td>
  </tr>
  <tr>
    <td>Domisili</td>
    <td><?php echo $Dosen['domisili']; ?></td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td><?php echo $Dosen['jenis_kelamin']; ?></td>
  </tr>
</table>
</body>
</html>
