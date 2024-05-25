<?php

//task 1

for ($i = 0; $i < 10; $i++) {
    if ($i % 2 == 0) {
        echo $i . "<br>";
    }
}

//task 2

$num = [1, 23, 44, 88, 13, 11, 7 , 8];

foreach ($num as $value) {
    if ($value % 2 == 0) {
        echo $value . "<br>";
    }
}