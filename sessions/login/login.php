<?php

session_start();
require_once 'lib.php';

if (isset($_POST['name']) && isset($_POST['password']) && !empty($_POST['name'])) {
    try {
        $user = getUser($_POST['name']);
        if (!is_null($user) && $user['password'] == md5($_POST['password'])) {
            $_SESSION['name'] = $_POST['name'];
            $_SESSION['pass'] = $_POST['password'];
            Header('Location: todo.php');
        } else {
            Header('Location: index.php?error=name or password incorrect');
        }
    } catch (Exception $exc) {
        logger('Error trying to get user: '. $exc->getMessage());
        
        header('Location: error.php');
    }

} else {
    Header('Location: index.php?error=login');
}
?>
