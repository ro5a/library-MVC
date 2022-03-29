<?php
namespace coding\app\system;

class Request{
    public function checkRequest(){
    $url=$_SERVER['REQUEST_URI'];
    $method=$_SERVER['REQUEST_METHOD'];
   
    Router::executeRoute($method, $url);
    }
}

?>