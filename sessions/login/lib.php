<?php

/**
 * Connect to DB
 * @return stdClass
 * @throws Exception
 */
function connect()
{
    $connect = mysqli_connect('localhost', 'info', 'Pa$$w0rd', 'users_tasks');
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
    $result = mysqli_query($link, 'SELECT * FROM tasks WHERE user_id=' . $user['user_id']);

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
    $result = mysqli_query($link, 'INSERT INTO tasks (user_id, name) VALUES (' . $user['user_id'] . ', "' . $name . '")');

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
    $resutl = mysqli_query($link, 'DELETE FROM tasks WHERE taskid=' . $id);
    
    return $resutl;
}
?>
