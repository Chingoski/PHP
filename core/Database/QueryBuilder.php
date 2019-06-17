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
            $first_name = $userObject['Name'];
            $suraname_name = $userObject['Surname'];
            $age = $userObject['Age'];
            $gender = $userObject['Gender'];
            $proffession = $userObject['Proffession'];
            $id = NULL;

            $my_Insert_Statement = $this->pdo->prepare("INSERT INTO user (first_name, Surname, Age, Gender , Proffession , Id) VALUES (:first_name, :surname_name, :age , :gender , :proffession,:id)");
            $my_Insert_Statement->bindParam(':first_name', $first_name);
            $my_Insert_Statement->bindParam(':surname_name',$suraname_name );
            $my_Insert_Statement->bindParam(':age', $age);
            $my_Insert_Statement->bindParam(':gender',$gender );
            $my_Insert_Statement->bindParam(':proffession', $proffession );
            $my_Insert_Statement->bindParam(':id', $id );


          $my_Insert_Statement->execute();
        }
        catch (PDOException $e){
            dd($e->getMessage());
        }

    }
}