<?php

namespace TaskManager;

use PDO;

class Task
{
    protected $pdo;
    private $subject;
    private $priority;
    private $duedate;
    private $status = 0;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
}

    public function createTask($task)
    {
        $this->subject = $task['subject'];
        $this->priority = $task ['priority'];
        $this->duedate = $task ['duedate'];
        $this->insertTask();
    }

    private function insertTask()
    {
    try{
        $query = "INSERT INTO 'task'(`subject`,`priority`,`dueDate`)VALUES (:subject, :priority, :duedate)";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':subject', $this->subject, PDO::PARAM_STR);
        $stmt->bindParam(':priority', $this->priority, PDO::PARAM_STR);
        $stmt->bindParam(':duedate', $this->duedate, PDO::PARAM_STR);
        $stmt->execute();
        header('Location/phptodolist');
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    }
}