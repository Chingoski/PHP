<?php



class Connection {
    //PDO PHP Data Object
    //Connecting to our database DSN = conection string
    public static function make($config){
        try{
            return  new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']);
        }
        catch (PDOException $exception){
            die($exception->getMessage());
        }
    }


}