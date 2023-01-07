<?php
$data = json_decode(file_get_contents("http://localhost/api/"), TRUE);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Dosen</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<div class="w3-container">
    <table class="w3-table">
    <tr>
      <th>NID</th>
        <th>Nama</th>
      <th>Program Studi</th>
    </tr>
    <tr>
        <td><?= $data['nama'] ?></td>
        <td><?= $data['nid'] ?></td>
        <td><?= $data['prog_studi'] ?></td>
</tr>

</body>
</html>