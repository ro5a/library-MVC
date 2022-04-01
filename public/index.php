<?php
require_once __DIR__ . '/../vendor/autoload.php';

use coding\app\system\AppSystem;
use coding\app\system\Router;
use coding\app\controllers\UsersController;
$system=new AppSystem;
Router::get('/users',[UsersController::class,'show']);

Router::get('/books',function(){
    echo "books route path";
});
Router::post('/users',[UsersController::class,'show']);
$system->start();



