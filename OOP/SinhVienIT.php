<?php

require_once 'SinhVien.php';

class SinhVienIT extends \OOP\SinhVien
{
    private $java;
    private $php;

    public function __construct($id, $name, $gender, $address, $java, $php)
    {
        parent::__construct($id, $name, $gender, $address);
        $this->java = $java;
        $this->php = $php;
        $this->java;
    }


    public function show()
    {
        echo '<tr>';
        echo '<td class="center">' . parent::getId() . '</td>';
        echo '<td>' . parent::getName() . '</td>';
        echo '<td>' . parent::getGender() . '</td>';
        echo '<td>' . parent::getAddress() . '</td>';
        echo '<td class="center">' . $this->java . '</td>';
        echo '<td class="center">' . $this->php . '</td>';
        $tb = ($this->java + $this->php) / 2;
        echo '<td class="center">' . $tb . '</td>';
        if ($tb >= 8) {
            echo '<td class="center blue">' . 'Excellent' . '</td>';
        } else if ($tb >= 7) {
            echo '<td class="center yellow">' . 'Good' . '</td>';
        } else if ($tb >= 5) {
            echo '<td class="center tomato">' . 'Average' . '</td>';
        } else {
            echo '<td class="center red">' . 'Bad' . '</td>';
        }
        echo '</tr>';
    }
}