<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$arr = array(
    '1' => ['id' => 1, 'datum' => '2007-10-11', 'wert1' => 78, 'wert1' => 666],
    '2' => ['id' => 2, 'datum' => '2007-09-11', 'wert1' => 62, 'wert1' => 99],
    '3' => ['id' => 4, 'datum' => '2007-08-11', 'wert1' => 36, 'wert1' => 199],
    '4' => ['id' => 3, 'datum' => '2007-06-11', 'wert1' => 11, 'wert1' => 38],
    '5' => ['id' => 5, 'datum' => '2007-04-11', 'wert1' => 56, 'wert1' => 23],
    '6' => ['id' => 6, 'datum' => '2007-03-11', 'wert1' => 63, 'wert1' => 31],
    '7' => ['id' => 9, 'datum' => '2007-03-11', 'wert1' => 69, 'wert1' => 63],
    '8' => ['id' => 10, 'datum' => '2007-06-11', 'wert1' => 78, 'wert1' => 32],
    '9' => ['id' => 11, 'datum' => '2007-07-11', 'wert1' => 72, 'wert1' => 991],
    '10' => ['id' => 12, 'datum' => '2007-12-11', 'wert1' => 79, 'wert1' => 129],
    '11' => ['id' => 13, 'datum' => '2007-11-11', 'wert1' => 61, 'wert1' => 321],
    '12' => ['id' => 7, 'datum' => '2007-11-08', 'wert1' => 52, 'wert1' => 78]
);
$string = json_encode($arr);
echo $string;
?>

