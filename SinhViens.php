<?php

use DAO\SinhVienDAO;

include "DAO/SinhVienDAO.php";

$svDAO = new SinhVienDAO();

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $action = null;
    if (empty($_GET['action'])) {
        $action = "";
    } else {
        $action = $_GET['action'];
    }
    $page = null;
    if (isset($_GET['p'])) {
        $page = $_GET['p'];
    }
    if ($page == null) {
        $page = 1;
    }
    switch ($action) {
        case "create":
            include "create.php";
            break;
        case
        "edit":
            $sinhVien = $svDAO->findById($_GET['id']);
            include "edit.php";
            break;
        case "delete":
            $id = $_GET['id'];
            if ($svDAO->delete($id)) {
                echo "Xóa thành công";
                Header("Location: index.php?p=" . $page);
            } else {
                echo "Xóa thất bại";
            }
            break;
        default:
            Header("Location: index.php?p=" . $page);
            break;
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = null;
    if (empty($_POST['action'])) {
        $action = "";
    } else {
        $action = $_POST['action'];
    }
    $page = null;
    if (isset($_GET['p'])) {
        $page = $_GET['p'];
    }
    if ($page == null) {
        $page = 1;
    }
    switch ($action) {
        case "edit":
            if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['gender']) && isset($_POST['address'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $gender = $_POST['gender'];
                $address = $_POST['address'];
                $sinhVien = new OOP\SinhVien($id, $name, $gender, $address);
                if ($svDAO->update($sinhVien)) {
                    echo "Cập nhật thành công";
                    Header("Location: index.php?p=" . $page);
                } else {
                    echo "Cập nhật thất bại";
                }
            }
            break;
        case "create":
            if (isset($_POST['name']) && isset($_POST['gender']) && isset($_POST['address'])) {
                $name = $_POST['name'];
                $gender = $_POST['gender'];
                $address = $_POST['address'];
                $sinhVien = new OOP\SinhVien(null, $name, $gender, $address);
                if ($svDAO->create($sinhVien)) {
                    echo "Thêm thành công";
                    Header("Location: index.php?p=" . $page);
                } else {
                    echo "Thêm thất bại";
                }
            }
            break;
        default:
            Header("Location: index.php?p=" . $page);
            break;
    }
}

