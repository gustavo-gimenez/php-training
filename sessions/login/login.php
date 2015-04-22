<?php

session_start();
require_once 'lib.php';
//creo la cantidad de intentos o la actualiza la cantidad si ya esta creada
if (!isset($_SESSION['cantidad'])) {
    $_SESSION['cantidad'] = 0;
}  else {
    $_SESSION['cantidad'] += 1;
}
//me fijo si la cantidad de intentos es menor a 3 
if ($_SESSION['cantidad']<= 3) {
    
    //valida que haya completado el usuario y la pass
    if (isset($_POST['name']) && isset($_POST['password']) && !empty($_POST['name'])) {
        try {

            $user = getUser($_POST['name']);
                //controla que el usuario y pass sean correctos
                if (!is_null($user) && $user['password'] == md5($_POST['password'])) {
                    $_SESSION['name'] = $_POST['name'];
                    $_SESSION['pass'] = $_POST['password'];
                    Header('Location: todo.php');
                } else {


                    Header("Location: index.php?error=name or password incorrect, van ".$_SESSION['cantidad']." errores de 3");


                }

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
            logger("Error trying to get user: ". $exc->getMessage())." van ".$_SESSION['cantidad']." errores de 3";

            header('Location: error.php');
          }

}  else {
    //si el hizo mas de 3 intentos bloquea al usuario y tira el mensaje avisando que intento muchas veces loguearse
        $bloqueo = updateBlocked($_POST['name']); 
        Header("Location: index.php?error= You have tried to login too many times ");
        
            
            
}
} else {
   blockUser($_POST['name']);
   Header('Location: error.php?error=You have tryed too many times');
}

