<?php
use function CommonMark\Render\HTML;
// $_GET
$siswa = [
    [
    "Nama" => "Bima", 
    "TTL" => "20060816",
    "Jurusan" => "PPLG",
    "Email" => "emailbima.com"
    ],
    ["Nama" => "Raafi", 
    "TTL" => "20060310",
    "Jurusan" => "PPLG",
    "Email" => "emailraafi.com"
    ]
];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Siswa</h1>
    <?php foreach( $siswa as $sw ) : ?>
        <ul>
            <li>img src="<img src="img/<?= $sw["gambar"];?>"></li>
            <li><?= $sw["Nama"]; ?></li>
            <li><?= $sw["TTL"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>