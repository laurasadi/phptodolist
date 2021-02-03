<?php
session_start();
use TaskManager\DB;
use TaskManager\Task;
use TaskManager\Validation;


if (isset($_POST['send'])) {
    $valid = Validation::validuoti($_POST);

//    var_dump($valid);
}

if (isset($_POST['send']) && empty($valid)) {

    $connection = DB::connect();
    $tasks = new Task($connection);
    $tasks->createTask($_POST);
} else {
    require 'view/pages/new-task.view.php';
}
