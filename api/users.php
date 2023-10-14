<?php
use DAO\SinhVienDAO;
use OOP\SinhVien;

require '../OOP/SinhVien.php';
require '../DAO/SinhVienDAO.php';
require "../ConnectSQL/ConnectSQL.php";

// Định nghĩa các header và kiểu dữ liệu trả về là JSON
header('Content-Type: application/json');

$sinhVienDao = new SinhVienDAO();

$sinhViens = $sinhVienDao->findAll();

// Chuyển đổi dữ liệu sinh viên thành dạng mảng JSON
$data = [];
foreach ($sinhViens as $sinhVien) {
    $data[] = [
        'id' => $sinhVien->getId(),
        'name' => $sinhVien->getName(),
        'gender' => $sinhVien->getGender(),
        'address' => $sinhVien->getAddress()
    ];
}


// Tạo một mảng chứa kết quả và gắn dữ liệu vào
$result = [
    'success' => true,
    'data' => $data
];

// Trả về kết quả dưới dạng JSON
echo json_encode($result);