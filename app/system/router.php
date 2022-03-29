<?php
namespace coding\app\system;
class Router{
     protected static $routes=array();
    public static function get($url, $callback){
        self::$routes['GET'][$url]=$callback;

    } 
    public static function post($url, $callback){
        self::$routes['POST'][$url]=$callback;

    }
    public function put(){

    }
    public function delete(){

    }
    public static function executeRoute($method,$url){
        $callback=self::$routes[$method][$url];
    
        if(isset($callback))
        call_user_func($callback);
        else {
            echo "page not found";
        }



}

}
?>