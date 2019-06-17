<?php

class App {
    protected static $items = [];

    public static function bind($key , $value){
    static ::$items[$key] = $value ;
    }

    public  static function getItem($key){
        try{
            return static::$items[$key];
        }
        catch (Exception $e){
            die($e->getMessage());
        }
}
    public  static function getAll(){
        return static::$items;
    }
}