<?php
//Connecting Class Task
require 'core/Task.php';
require  'Clases/User.php';

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
    public function insertTo($userObject){
        try{
//    $conn = require 'core/bootstrap.php';


            $id = NULL;

            $my_Insert_Statement = $this->pdo->prepare("INSERT INTO user (Id ,first_name, surname, age, gender , proffession ) VALUES (:id,:first_name, :surname_name, :age , :gender , :proffession)");
            $my_Insert_Statement->bindParam(':first_name', $userObject['Name']);
            $my_Insert_Statement->bindParam(':surname_name',$userObject['Surname'] );
            $my_Insert_Statement->bindParam(':age',$userObject['Age']);
            $my_Insert_Statement->bindParam(':gender',$userObject['Gender'] );
            $my_Insert_Statement->bindParam(':proffession', $userObject['Proffession'] );
            $my_Insert_Statement->bindParam(':id', $id );


          $my_Insert_Statement->execute();
        }
        catch (PDOException $e){
            dd($e->getMessage());
        }

    }
}