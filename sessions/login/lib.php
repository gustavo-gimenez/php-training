<?php

/**
 * Connect to DB
 * @return stdClass
 * @throws Exception
 */
function connect()
{
    $connect = mysqli_connect('localhost', 'root', 'Pa$$w0rd', 'todo');
    if (!$connect) {
        throw new Exception('Error trying to conect to DB: ' . mysqli_connect_error());
    }
    
    return $connect;
}

/**
 * Get User from DB
 * @param type $name
 * @return type
 * @throws Exception
 */
function getUser($name)
{

    try {
        $link = connect();
        $result = mysqli_query($link, 'SELECT * FROM users WHERE name="' . $name . '"');
        
        return mysqli_fetch_assoc($result);
    } catch (Exception $exc) {
        logger($exc->getMessage());
        throw $exc;
    }
}

/**
 * Get tasks from DB
 * @param type $username
 * @return type
 */
function getTasks($username)
{
    $user = getUser($username);
    $link = connect();
    $result = mysqli_query($link, 'SELECT * FROM tasks WHERE user_id=' . $user['id']);

    return $result;
}

/**
 * Add a Task to the DB
 * @param type $username
 * @param type $name
 * @return type
 */
function addTask($username, $name)
{
    $user = getUser($username);
    $link = connect();
    $result = mysqli_query($link, 'INSERT INTO tasks (user_id, name) VALUES (' . $user['id'] . ', "' . $name . '")');

    return $result;
}

/**
 * Add user to the DB
 * @param type $name
 * @param type $pass
 */
function addUser($name, $pass)
{
    $link = connect();
    $pass = md5($pass);
    $result = mysqli_query($link, 'INSERT INTO users (name, password) VALUES ("' . $name . '", "' . $pass . '")');
}

/**
 * 
 * @param type $msg
 */
function logger($msg)
{
    file_put_contents('logs/log.txt', $msg . "\n", FILE_APPEND);
}

function deleteTask($id)
{
    $link = connect();
    $resutl = mysqli_query($link, 'DELETE FROM tasks WHERE id=' . $id);
    
    return $resutl;
}
function blockUser($name)
{
    $link = connect();
    mysqli_query($link, 'UPDATE users SET blocked=1 
          WHERE name = "' . $name . '"');
}
function unblockUser($id)
{ 
    $link = connect();
    mysqli_query($link, 'UPDATE users SET blocked=0
          WHERE id =' . $id);
}
function guess($date)
{
  $today = date_create('now');
  $date1 = date_create($date);
  $today = date_timestamp_get($today); //$today to seconds
  $date1 = date_timestamp_get($date1); // $date1 to seconds
  $interval = ($today - $date1) / 60;
  return $interval;
}
