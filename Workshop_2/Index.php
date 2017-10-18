<?php
/**
 * Created by PhpStorm.
 * User: Sam
 * Date: 26/09/2017
 * Time: 14:46
 */
    $country[0] = 'England';
    $country[1] = 'France';
    $country[2] = 'Germany';
    $country[3] = 'Spain';
    $capitals['England'] = 'London';
    $capitals['France'] = 'Paris';
    $capitals['Germany'] = 'Berlin';
    $capitals['Spain'] = 'Madrid';
    $firstname = 'Sam';
    $last_name = ' Jones';
    $today = 'September 27, 2017';
    $name = $firstname . $last_name;
    $num1 = 83;
    $num2 = 3.142;
    $num3 = -45.6;
    echo "Hello, $name ,the date is $today, and you live in $country[0].</br>";
    echo "getType($num1)</br>";
    $data = '10.5';
    $num4 =(float) $data;
    echo "$num4";
?>