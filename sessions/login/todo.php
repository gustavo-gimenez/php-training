<!DOCTYPE html>
<html>
<?php session_start();?>
<?php require 'datas.php'; ?>
<head>

  <meta charset="UTF-8">

  <title>Sign Up/Login Box - CodePen</title>

  <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>

<body>
<?php if (isset($_SESSION['name']) && isset($_SESSION['pass'])):?>
<div id="logmsk" style="display: block;">
    <div id="userbox">
        <h1 id="signup" style="background-color: rgb(118, 171, 219); background-position: initial initial; background-repeat: initial initial;">Todo list</h1>
        <?php echo isset($_GET['error']) ? '<p>'.$_GET['error'].'</p>': ''?>
        <form action="addTasks.php" method="POST" id="form-login">
            <div class="form-group">
              <input id="task" class="inline-input" name="task" placeholder="New Task" style="opacity: 1; background-color: rgb(255, 255, 255); background-position: initial initial; background-repeat: initial initial;">
              <button class="inline-button">Add</button>
            </div>
        </form>
        <ul>
          <?php foreach ($tasks as $task):?>
            <li><?php echo $task['name'] ?> <a href="delete.php?task=<?php echo $task['taskid']?>" class="action-task"></a></li>
          <?php endforeach?>
        </ul>
        <a href="logout.php" class="logout" >Logout</a>
    </div>
</div>
<?php else: ?>
<?php Header('Location: index.php')?>
<?php endif; ?>
</body>

</html>
