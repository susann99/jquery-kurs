<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$arr = array('rows'=>[
    ['id' => 1, 'datum' => '2007-10-11', 'wert1' => 78, 'wert2' => 666],
    ['id' => 2, 'datum' => '2007-09-11', 'wert1' => 62, 'wert2' => 99],
    ['id' => 4, 'datum' => '2007-08-11', 'wert1' => 36, 'wert2' => 199],
    ['id' => 3, 'datum' => '2007-06-11', 'wert1' => 11, 'wert2' => 38],
    ['id' => 5, 'datum' => '2007-04-11', 'wert1' => 56, 'wert2' => 23],
    ['id' => 6, 'datum' => '2007-03-11', 'wert1' => 63, 'wert2' => 31],
    ['id' => 9, 'datum' => '2007-03-11', 'wert1' => 69, 'wert2' => 63],
    ['id' => 10, 'datum' => '2007-06-11', 'wert1' => 78, 'wert2' => 32],
    ['id' => 11, 'datum' => '2007-07-11', 'wert1' => 72, 'wert2' => 991],
    ['id' => 12, 'datum' => '2007-12-11', 'wert1' => 79, 'wert2' => 129],
    ['id' => 13, 'datum' => '2007-11-11', 'wert1' => 61, 'wert2' => 321],
    ['id' => 7, 'datum' => '2007-11-08', 'wert1' => 52, 'wert2' => 78]]
);
$string = json_encode($arr);
echo $string;
?>

