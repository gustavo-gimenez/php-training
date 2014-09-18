<?php 

function connect(){
   $connect = mysqli_connect('localhost', 'info', 'Pa$$w0rd', 'users_tasks');
   if ($connect) {
       return $connect;
   } else {
       throw new Exception('Error al conectar a la BD');
   }
}

function getUser($name) {
    
     try {
         $link = connect();
         $result = mysqli_query($link, 'SELECT * FROM users WHERE name="' . $name . '"');
         
         return mysqli_fetch_assoc($result);
     } catch (Exception $exc) {
         file_put_contents('logs/log.txt', $exc->getMessage());
         throw $exc;
     }

}

function getTasks($username){
  $user = getUser($username);
  $link = connect();
  $result = mysqli_query($link, 'SELECT * FROM tasks WHERE user_id='. $user['user_id']);
  
  return $result;
}

function addTask($username, $name){
  $user = getUser($username);
  $link = connect();
  $result = mysqli_query($link, 'INSERT INTO tasks (user_id, name) VALUES ('.$user['user_id'].', "'.$name.'")');

  return $result;
}
/**
 * 
 * @param type $name
 * @param type $pass
 */
function addUser($name, $pass){
  $link = connect();
  $pass = md5($pass);
  $result = mysqli_query($link, 'INSERT INTO users (name, password) VALUES ("'.$name.'", "'.$pass.'")');
}
?>
