<?php

class Router {
    protected $routs;

    public function define($routs){
    $this->routs =  $routs;
    }

    public function direct($uri){
        try{
            if(array_key_exists($uri,$this->routs)){
                return $this->routs[$uri];
            }
        }
        catch (Exception $e){
            die($e->getMessage());
        }

    }

}