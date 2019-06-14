<?php

//Classes
class Task {
    protected $Description;
    protected $Completed;


//    public function __construct ($description,$completed){
//        $this->description = $description;
//        $this->completed = $completed;
//    }
    public function isCompleted(){
        return $this->Completed;
    }

    public function complete(){
        $this->completed = true;
    }

    public function getDesc(){
        return $this->Description;
    }
}