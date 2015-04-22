<?php
include '../bootstrap.php';

use \practice\Ciudad;
use \practice\Provincia;

$chaco = new Provincia('Chaco');
$corr = new Provincia('Corrientes');

$chaco->addCity(new Ciudad('Resistencia', '3500'));
$chaco->addCity(new Ciudad('Barranqueras', '3500'));
$chaco->addCity(new Ciudad('San martin', '3500'));
$chaco->addCity(new Ciudad('Villa Angela', '3500'));
$chaco->addCity(new Ciudad('Tirol', '3500'));

$output = array();
if ($_GET['provincia'] == 'Chaco'){
   foreach ($chaco->getCities() as $city){
      $output[] = $city->getName();
   }
}
header('content-type: application/json');
print json_encode($output);
?>



