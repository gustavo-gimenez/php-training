<?php
//fibonacci
   $last = 1;
   $beforeLast = 1;
   $limit = 10;
   
   for($i = 0; $i < $limit; $i++){
       $next = $last + $beforeLast;
       echo $next;
       $beforeLast = $last;
       $last = $next;
   }

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


//defining multidimenasional

$mArray = array('key1' => array(), 'key2' => array()); 
//if I want load an element to key2

$mArray['key2'][] = 'element1';

//then $mArray is array('key1' => array(), 'key2' => array('element1'));
