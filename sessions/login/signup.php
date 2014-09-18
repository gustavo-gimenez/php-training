<?php
require_once 'lib.php';
session_start();
/**
 * Validate
 */
$validate = array();
if (!isset($_POST['name'], $_POST['password'], $_POST['duplicated_password'])) {
    $validate[] = 'Invalid input';
}elseif(empty($_POST['name']) || empty($_POST['password']) || empty($_POST['duplicated_password'])) {
   $validate[] = 'Missing input'; 
}elseif($_POST['password'] != $_POST['duplicated_password']) {
    $validate[] = 'Password does not match';
}

if(empty($validate)) {
    addUser($_POST['name'], $_POST['password']);
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['pass'] = $_POST['password'];
    
    header('Location: todo.php');
} else {
    header('Location: register.php?error=' . implode('|', $validate));
}










?>
