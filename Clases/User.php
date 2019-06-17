<?php


class User
{
    public $first_name;
    public $surname;
    public  $age;
    public $gender;
    public $proffession;

public function CreateUser($name , $surname , $age , $gender , $proffession){
    $this->first_name = $name;
    $this->surname = $surname;
    $this->agege = $age;
    $this->gender = $gender;
    $this->proffession = $proffession;
}
}
