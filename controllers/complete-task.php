<?php
use TaskManager\Request;
use TaskManager\DB;
use TaskManager\Task;
$connections = DB::connect();
$task = new Task($connections);
$id = intval(basename(Request::uri()));
$task -> setComplete($id);

