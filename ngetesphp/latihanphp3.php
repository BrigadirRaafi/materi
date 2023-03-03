<?php
/*$siswa = [
    ["Bima","20060816","PPLG","emailbima.com"] , 
    ["Raafi","20060609","PPLG","emailraafi.com"] ,
    ["Ilyas","20060213","PPLG","emaililyas.com"]
];*/

//Array Associative
//key nya adalah string yang kita buat sendiri
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
echo $siswa[1]["Email"];

?>

