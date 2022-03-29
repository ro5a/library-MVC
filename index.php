<?php
require_once __DIR__ . '/vendor/autoload.php';

use coding\app\system\AppSystem;
use coding\app\system\Router;
$system=new AppSystem;
Router::get('/books',function(){
    echo "routes route path";
});
Router::post('/users',function(){
    echo "add new user";
});
$system->start();



