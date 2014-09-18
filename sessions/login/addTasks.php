<?php
session_start();
require_once 'lib.php';

if (isset($_POST['task']) && !empty($_POST['task'])) {
  addTask($_SESSION['name'], $_POST['task']);
  Header('Location: todo.php');
} else {
  Header('Location: todo.php?error="Invalid task name"');
}
?>
