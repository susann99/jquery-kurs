<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$opbjJason = '{"person":[
                {
                    "name":"herbert",
                    "alter":"45"
                },
                {
                    "name":"uschi",
                    "alter":"42"
                }
                ,
                {
                    "name":"musci",
                    "alter":"28"
                }
    ]}';
$test = json_decode($opbjJason);
#print_r($test);
echo $test->person[2]->name;

?>

