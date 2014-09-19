<?php
session_start();
require_once 'lib.php';
if (isset($_SESSION['name']) && isset($_GET['task'])) {
    deleteTask($_GET['task']);
    header('Location: todo.php');
}
?>
