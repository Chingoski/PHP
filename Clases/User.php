<?php


class User
{
    public $first_name;
    public $Surname;
    public  $Age;
    public $Gender;
    public $Proffession;

public function CreateUser($name , $surname , $age , $gender , $proffession){
    $this->Name = $name;
    $this->Surname = $surname;
    $this->Age = $age;
    $this->Gender = $gender;
    $this->Proffession = $proffession;
}
}
