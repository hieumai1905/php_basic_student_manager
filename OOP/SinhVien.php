<?php

namespace OOP;

class SinhVien
{
    protected $id;
    protected $name;
    protected $gender;
    protected $address;

    /**
     * @param $id
     * @param $name
     * @param $gender
     * @param $address
     */
    public function __construct($id, $name, $gender, $address)
    {
        $this->id = $id;
        $this->name = $name;
        $this->gender = $gender;
        $this->address = $address;
    }

    public function show()
    {
        echo '<tr>';
        echo '<td width="100px">' . $this->id . '</td>';
        echo '<td>' . $this->name . '</td>';
        echo '<td>' . $this->gender . '</td>';
        echo '<td>' . $this->address . '</td>';
        echo '<td class="center"><a href="SinhViens.php?action=edit&id=' . $this->id . '">' . 'Sửa  ' .'</a>' . '<a href="SinhViens.php?action=delete&id=' . $this->id . '">' . '|  Xoá' .'</a></td>';
        echo '</tr>';
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender): void
    {
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }


}