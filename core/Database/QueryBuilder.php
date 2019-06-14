<?php
//Connecting Class Task
require 'core/Task.php';

class QueryBuilder {
    protected $pdo;

    public function __construct($pdo)
    {
    $this->pdo = $pdo;
    }

   public function sellectAll($table,$class){
        //Preparing an SQL Query
        $statment = $this->pdo->prepare("select * from {$table}");
        //Executing the statment
        $statment->execute();
        //Geting all elements in dataTable
        return $statment->fetchAll(PDO::FETCH_CLASS,$class);
    }
}