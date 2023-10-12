<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="OOP/style.css">
</head>
<body>

<?php

use DAO\SinhVienDAO;

require_once 'OOP/SinhVien.php';
require_once 'DAO/SinhVienDAO.php';

$sinhVienDao = new SinhVienDAO();

$sinhViens = $sinhVienDao->findAll();
$page = null;
if(isset($_GET['p'])){
    $page = $_GET['p'];
}

$sinhVienPage = array_slice($sinhViens, ($page-1)*5, 5);


echo "<div><button class='center button btn-center' ><a href='SinhViens.php?action=create' class='red'>Thêm sinh viên</a> </button></div>";
echo "<br>";
echo "<table id='demo' >";
echo  "<tr>"."<th>". "Mã sinh viên" ."</th>" ."<th>". "Họ và tên" ."</th>" ."<th>". "Giới tính" ."</th>" ."<th>". "Địa chỉ" ."</th>" ."<th>" . "Lựa chọn" . "</th>"."</tr>";
foreach ($sinhVienPage as $sinhVien) {
    $sinhVien->show();
}
echo "</table>";

echo "<div class='pagination'>";
if($page>1) {
    $pageNew = $page-1;
    echo "<button class='button-no'><a href='SinhViens.php?p='.$pageNew>Trang trước</a></button>";
}
for ($i = 1; $i <= (count($sinhViens)+4)/5; $i++) {
    if($page==$i){
        echo "<button class='button under'><a href='SinhViens.php?p=$i'>$i</a></button>";
    }else{
        echo "<button class='button-no'><a href='SinhViens.php?p=$i'>$i</a></button>";
    }
}
if($page<(count($sinhViens)+4)/5) {
    $pageNew = $page+1;
    echo "<button class='button-no'><a href='SinhViens.php?p=$pageNew'>Trang sau</a></button>";
}
echo "</div>";


?>



</body>
</html>