<?php

/**
 * Create a group of tow collection: the ten first fibonacci numbers, 
 * and ten second in another gruop like this: '1-10' => (...). "11-20" => (..)
 */

/**
 * logic here
 */
$array = array ('key1' => array(), 'key2' => array ());

$n1 = 1;
$n2 = 0;
$limite = 20;
for ($i = 0; $i <= $limite; $i++) {
    $suma = $n1 + $n2;
    $n1 = $n2;
    $n2 = $suma;
    if ($i < 10) {
        $array ['key1'][] = $suma ;
        
    } else {
        $array ['key2'][] = $suma;
    }
}


/**
 * Print the result
 */
echo '<pre>' ;
var_dump($array);
echo '</pre>' ;
/**
 * -Given an array of number array(1,2,3,4,5.2,4,68,43). Calculate avarage.
   - Give the next information bellow of access stats, calculate total_visits for date 07-08-2014
   - Give the next information bellow of access stats, calculate total_visits for in the range age of '25-34'
   - Give the next information bellow of access stats, calculate porcent of male, and females for date 07-08-2014 
   - array(
       '07-08-2014 01:00' => array(
              '15-17' => array('male' => 4, 'females' => 8),
              '18-24' => array('male' => 5, 'females' => 2),
              '25-34' => array('male' => 18, 'females' => 13),
              '35-44' => array('male' => 12, 'females' => 25)
       ),
       '07-08-2014 02:00' => array(
              '15-17' => array('male' => 17, 'females' => 42),
              '18-24' => array('male' => 74, 'females' => 53),
              '25-34' => array('male' => 98, 'females' => 41),
              '35-44' => array('male' => 5, 'females' => 12)
       ),
       '07-08-2014 03:00' => array(
              '15-17' => array('male' => 31, 'females' => 87),
              '18-24' => array('male' => 31, 'females' => 6),
              '25-34' => array('male' => 53, 'females' => 3),
              '35-44' => array('male' => 3, 'females' => 4)
       ),
       '07-08-2014 04:00' => array(
              '15-17' => array('male' => 31, 'females' => 35),
              '18-24' => array('male' => 12, 'females' => 31),
              '25-34' => array('male' => 87, 'females' => 21),
              '35-44' => array('male' => 43, 'females' => 98)
       ),
       '07-08-2014 05:00' => array(
              '15-17' => array('male' => 43, 'females' => 21),
              '18-24' => array('male' => 65, 'females' => 24),
              '25-34' => array('male' => 76, 'females' => 65),
              '35-44' => array('male' => 4, 'females' => 13)
       ),
       '08-08-2014 01:00' => array(
              '15-17' => array('male' => 45, 'females' => 63),
              '18-24' => array('male' => 42, 'females' => 42),
              '25-34' => array('male' => 42, 'females' => 74),
              '35-44' => array('male' => 87, 'females' => 85)
       ),
       '08-08-2014 02:00' => array(
              '15-17' => array('male' => 15, 'females' => 53),
              '18-24' => array('male' => 131, 'females' => 53),
              '25-34' => array('male' => 15, 'females' => 53),
              '35-44' => array('male' => 12, 'females' => 41)
       ),
       '08-08-2014 03:00' => array(
              '15-17' => array('male' => 32, 'females' => 31),
              '18-24' => array('male' => 154, 'females' => 64),
              '25-34' => array('male' => 34, 'females' => 41),
              '35-44' => array('male' => 16, 'females' => 86)
       ),
    )

 */