<?php

class Router {
    public $routs = [
        'GET'=>[] ,
        'POST'=>[] ,
        ];
    protected $url;

    public function  get($uri , $controler){
        $this->routs['GET'][$uri] = $controler;
    }
    public function  post($uri , $controler){
        $this->routs['POST'][$uri] = $controler;
    }

    public function direct($uri,$requestType){
        try{
            if($this->exists($uri , $requestType)){
                return $this->routs[$requestType][$this->url];
            }
        }
        catch (Exception $e){
            die($e->getMessage());
        }

    }

    public function exists($uri , $type){
        $keys =  array_keys($this->routs[$type]);
//        dd($keys);
        if($uri[0]=='?' || $uri==""){
            $this->url = '';
            return true;
        }
        else{
            $index = strpos($uri , '?');
            foreach ($keys as $key){
                if($index){
                    if(substr($uri,0,$index)==$key){
                        $this->url = $key;
                        return true;
                    }
                }
                else{
                    if(strpos($uri,$key)!==false){
                        $this->url = $key;
                        return true;
                    }
                }
            }
        }
        return false;
    }

}