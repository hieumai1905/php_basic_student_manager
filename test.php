<?php
    $arr = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];

    foreach ($arr as $key => $value) {
        foreach ($value as $key1 => $value1) {
            echo $value1 . " ";
        }
        echo "<br>";
    }
