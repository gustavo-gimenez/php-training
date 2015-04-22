<?php

session_start();
require_once 'lib.php';

if (!isset($_SESSION['attempts'])) {
   $_SESSION['attempts'] = 0; 
}
$_SESSION['attempts']++;
if ($_SESSION['attempts'] <= 3) {

if (isset($_POST['name']) && isset($_POST['password']) && !empty($_POST['name'])) {
    try {
        $user = getUser($_POST['name']);
        if (!is_null($user) && $user['password'] == md5($_POST['password']) && !$user['blocked']) {
            $_SESSION['name'] = $_POST['name'];
            $_SESSION['pass'] = $_POST['password'];
            Header('Location: todo.php');
        } elseif (!$user['blocked']){
            Header('Location: index.php?error=name or password incorrect');
        } else {
          Header('Location: error.php?error=User blocked');

        }
    } catch (Exception $exc) {
        logger('Error trying to get user: '. $exc->getMessage());
        
        header('Location: error.php');
    }

} else {
    Header('Location: index.php?error=login');
}
} else {
   blockUser($_POST['name']);
   Header('Location: error.php?error=You have tryed too many times');
}

