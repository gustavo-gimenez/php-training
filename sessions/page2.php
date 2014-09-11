<?php
session_start();

if (isset($_SESSION['counter'])) {
  echo 'counter: ' . $_SESSION['counter'];
}
?>
