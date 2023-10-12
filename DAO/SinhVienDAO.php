<?php

namespace DAO;

use OOP\SinhVien;

include_once "ConnectSQL/ConnectSQL.php";
include_once "OOP/SinhVien.php";

class SinhVienDAO
{
    private $connect;

    public function __construct()
    {
        $this->connect = getConnectSQL();
    }

    public function create(SinhVien $sinhVien){
        $name = $sinhVien->getName();
        $gender = $sinhVien->getGender();
        $address = $sinhVien->getAddress();
        $sql = "INSERT INTO SinhViens (name, gender, address) VALUES ('$name', '$gender', '$address')";
        $result = $this->connect->query($sql);
        return $result === true;
    }

    public function findAll()
    {
        $sql = "SELECT * FROM SinhViens";
        $result = $this->connect->query($sql);
        $listSinhVien = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $id = $row['id'];
                $name = $row['name'];
                $gender = $row['gender'];
                $address = $row['address'];
                $sinhVien = new SinhVien($id, $name, $gender, $address);
                $listSinhVien[] = $sinhVien;
            }
        }
        return $listSinhVien;
    }

    public function findById(int $id)
    {
        $sql = "SELECT * FROM SinhViens WHERE id = " . $id;
        $result = $this->connect->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $id = $row['id'];
            $name = $row['name'];
            $gender = $row['gender'];
            $address = $row['address'];
            $sinhVien = new SinhVien($id, $name, $gender, $address);
            return $sinhVien;
        } else {
            return null;
        }
    }

    public function update(SinhVien $sinhVien)
    {
        $id = $sinhVien->getId();
        $name = $sinhVien->getName();
        $gender = $sinhVien->getGender();
        $address = $sinhVien->getAddress();

        $sql = "UPDATE SinhViens SET name = '$name', gender = '$gender', address = '$address' WHERE id = $id";
        $result = $this->connect->query($sql);
        return $result === true;
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM SinhViens WHERE id = " . $id;
        $result = $this->connect->query($sql);
        return $result === true;
    }
}