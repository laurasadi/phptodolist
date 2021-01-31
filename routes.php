<?php
$router->define([
    'phptodolist' => 'controllers/home.php',
    'phptodolist/new-task' => 'controllers/new-task.php',
    'phptodolist/complete-task' => 'controllers/complete-task.php',
    'phptodolist/delete-task' => 'controllers/delete-task.php',
    'phptodolist/404' => 'controllers/404.php'
]);