<?php

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
echo '<pre>' ;

var_dump($array);

echo '</pre>' ;


/**
 * Create a group of tow collection: the ten first fibonacci numbers, 
 * and ten second in another gruop like this: '1-10' => (...). "11-20" => (..)
 */

/**
 * logic here
 */

/**
 * Print the result
 */

?>