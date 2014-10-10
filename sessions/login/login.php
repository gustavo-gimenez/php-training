<?php

session_start();
require_once 'lib.php';

if (!isset($_SESSION['cantidad'])) {
    $_SESSION['cantidad'] = 0;
}  else {
    $_SESSION['cantidad'] += 1;
}

if ($_SESSION['cantidad']<= 3) {
    if (isset($_POST['name']) && isset($_POST['password']) && !empty($_POST['name'])) {
        try {

            $user = getUser($_POST['name']);

                if (!is_null($user) && $user['password'] == md5($_POST['password'])) {
                    $_SESSION['name'] = $_POST['name'];
                    $_SESSION['pass'] = $_POST['password'];
                    Header('Location: todo.php');
                } else {


                    Header("Location: index.php?error=name or password incorrect, van ".$_SESSION['cantidad']." errores de 3");


                }

        } catch (Exception $exc) {
            logger("Error trying to get user: ". $exc->getMessage())." van ".$_SESSION['cantidad']." errores de 3";

            header('Location: error.php');
        }

    } else {
        Header("Location: index.php?error=campos vacio van ".$_SESSION['cantidad']." errores de 3");
    }
}  else {
                
                Header("Location: index.php?error= You have tried to login too many times ");
                $bloqueo = updateBlocked($_POST['name']);
            
            
        }
?>
