<?php
$router->define([
    'phptodolist' => 'controllers/home.php',
    'phptodolist/new-task' =>'controllers/new-task.php',
    'edit-task' =>'controllers/edit-task',
    '404' => 'controllers/404.php',
]);