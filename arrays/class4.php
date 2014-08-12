<?php

$elements = array('info', 41, 19, '2014', 'da');
$needed = '2014';
for ($index = 0; $index < count($elements); $index++) {
    $current = $elements[$index];
    
    if ($current === $needed ) {
        echo "$index \n";
    }
}
//avarage large option
$elements = array(1,2,3,4,5.2,4,68,43);
$acum = 0;
for ($index1 = 0; $index1 < count($elements); $index1++) {
    $acum = $acum + $elements[$index1];
}
$promedio = $acum /  count($elements);

echo "Promedio: $promedio";

//Short form
echo array_search($needed, $elements);

//How can I take element needed from url params

/**
 * In this we're using ternary operator (condition ? action1: action2;)
 * Ej: if browser send query string as localhost/index.php?needed=info, then
 * $_GET = array('needed' => 'info'), so then $needed = 'info'. If index 'needed'
 * does no exist then $needed = '2014'
 */
$needed = isset($_GET['needed']) ? $_GET['needed']: '2014';

echo 'La posicion del objeto: '.$needed.' es : ';
$found = array_search($needed, $elements);
echo $found !== FALSE ? $found : 'Objeto no Encontrado';
