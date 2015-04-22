<?php 

require 'lib.php';
if ($_POST['name']) {
  $user = getUser($_POST['name']);
if (!is_null($user) && $user['blocked']) {
    unblockUser($user['id']); 
    Header('Location: admin.php?success= User ' . $_POST['name'] . ' is no longer blocked');
  }else{
     Header('Location: admin.php?error= User does not exist or is not blocked');
  }

}
