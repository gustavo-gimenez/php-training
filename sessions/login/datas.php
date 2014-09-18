<?php 
require_once 'lib.php';
if (!isset($_SESSION)) {
  session_start();
}

$tasks = array();
if (isset($_SESSION['name'])) {
   $tasks = getTasks($_SESSION['name']);
}
?>
