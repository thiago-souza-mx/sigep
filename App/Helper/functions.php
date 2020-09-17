<?php

class Request {

    public $teste = "blz";

    public static function testes(){
        return   new Request();
    }

}

class Route {

    public $teste = "blz";

    public static function get(){
        return   new Route();
    }

    public  function with($arr){
        return $arr  ;
    }
    

}