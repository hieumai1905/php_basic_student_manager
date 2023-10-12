<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php

use OOP\SinhVien;
include 'SinhVien.php';
require_once 'SinhVienIT.php';


$sinhViens = [
    new SinhVien(1, 'Nguyen Van A', 'Nam', 'Ha Noi'),
    new SinhVien(2, 'Nguyen Van B', 'Nam', 'Ha Noi'),
    new SinhVien(3, 'Nguyen Van C', 'Nam', 'Ha Noi'),
    new SinhVien(4, 'Nguyen Van D', 'Nam', 'Ha Noi'),
    new SinhVien(5, 'Nguyen Van A', 'Nam', 'Ha Noi'),
    new SinhVien(6, 'Nguyen Van B', 'Nam', 'Ha Noi'),
    new SinhVien(7, 'Nguyen Van C', 'Nam', 'Ha Noi'),
    new SinhVien(8, 'Nguyen Van D', 'Nam', 'Ha Noi'),
    new SinhVien(9, 'Nguyen Van A', 'Nam', 'Ha Noi'),
    new SinhVien(10, 'Nguyen Van B', 'Nam', 'Ha Noi'),
    new SinhVien(11, 'Nguyen Van C', 'Nam', 'Ha Noi'),
    new SinhVien(12, 'Nguyen Van D', 'Nam', 'Ha Noi'),
    new SinhVien(12, 'Nguyen Van A', 'Nam', 'Ha Noi'),
    new SinhVien(13, 'Nguyen Van B', 'Nam', 'Ha Noi'),
    new SinhVien(15, 'Nguyen Van C', 'Nam', 'Ha Noi'),
    new SinhVien(16, 'Nguyen Van D', 'Nam', 'Ha Noi'),

];

echo "<table id='demo' >";
echo  "<tr>"."<th>". "Ma sinh vien" ."</th>" ."<th>". "Ho va ten" ."</th>" ."<th>". "Gioi tinh" ."</th>" ."<th>". "Dia chi" ."</th>" ."</tr>";
foreach ($sinhViens as $sinhVien) {
    $sinhVien->show();
}
echo "</table>";

$SinhVienIts =[
    new SinhVienIT(1, 'Nguyen Van A', 'Nam', 'Ha Noi', 10, 10),
    new SinhVienIT(2, 'Nguyen Van B', 'Nam', 'Ha Noi', 9, 9),
    new SinhVienIT(3, 'Nguyen Van B', 'Nam', 'Ha Noi', 9, 9),
    new SinhVienIT(4, 'Nguyen Van B', 'Nam', 'Ha Noi', 5, 9),
    new SinhVienIT(5, 'Nguyen Van B', 'Nam', 'Ha Noi', 5, 7),
    new SinhVienIT(6, 'Nguyen Van B', 'Nam', 'Ha Noi', 2, 5),
];

echo "<table id='demo1' >";
echo  "<tr>"."<th>". "Ma sinh vien" ."</th>" ."<th>". "Ho va ten" ."</th>" ."<th>". "Gioi tinh" ."</th>" ."<th>". "Dia chi" ."</th>" . "<th>"."Java" ."</th>" .  "<th>"."PHP" ."</th>" ."<th>"."DTB" ."</th>" ."<th>"."Rank" ."</th>" ."</tr>";
foreach ($SinhVienIts as $sinhVien) {
    $sinhVien->show();
}
echo "</table>";

?>



</body>
</html>