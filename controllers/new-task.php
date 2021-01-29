<?php
use TaskManager\DB;
use TaskManager\Task;

if(isset($_POST['send'])){
    var_dump($_POST);
    $connection = DB::connect();
    $tasks = new Task($connection);
    $tasks ->createTask($_POST);
} else{
require ("view/pages/new-task.view.php");
}
