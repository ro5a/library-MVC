<?php
require_once __DIR__ . '/../vendor/autoload.php';

use coding\app\controllers\AuthorsController;
use coding\app\controllers\CategoriesController;
use coding\app\controllers\OffersController;
use coding\app\controllers\PublishersController;
use coding\app\system\AppSystem;
use coding\app\system\Router;
use coding\app\controllers\UsersController;
use coding\app\controllers\BooksController;
use coding\app\controllers\CheckoutController;
use coding\app\controllers\SteperController;
use coding\app\controllers\DetailsController;

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(dirname(__DIR__));//createImmutable(__DIR__);
$dotenv->load();

$config=array(
  'servername'=>$_ENV['DB_SERVER_NAME'],
  'dbname'=>$_ENV['DB_NAME'],
  'dbpass'=>$_ENV['DB_PASSWORD'],
  'username'=>$_ENV['DB_USERNAME']

);
$system=new AppSystem($config);

/** web routes  */

// login Routes
Router::get('/login',[UsersController::class,'login_page']);

// signup Routes
Router::get('/signup',[UsersController::class,'signup_page']);

// checkout Routes
Router::get('/checkout',[CheckoutController::class,'checkout_page']);

// checkout Routes
Router::get('/steper',[SteperController::class,'steper']);
// checkout Routes
Router::get('/details',[DetailsController::class, 'details']);


// categories Routes
Router::get('/category_page',[CategoriesController::class,'view_page']);
Router::get('/categories',[CategoriesController::class,'listAll']);
Router::get('/add_category',[CategoriesController::class,'create']);
Router::get('/edit_category/{id}',[CategoriesController::class,'edit']);
Router::get('/remove_category/{id}/{name}',[CategoriesController::class,'remove']);
Router::post('/save_category',[CategoriesController::class,'store']);
Router::post('/update_category',[CategoriesController::class,'update']);
/** offer routes  */

Router::get('/offers',[OffersController::class,'listAll']);
Router::get('/add_offer',[OffersController::class,'create_offer']);
Router::get('/edit_offer/{id}',[OffersController::class,'edit']);
Router::get('/remove_offer/{id}/{name}',[OffersController::class,'remove']);
Router::post('/save_offer',[OffersController::class,'store']);
Router::post('/update_offer',[OffersController::class,'update']);

// Books Routes
Router::get('/book_details_page',[BooksController::class,'view_details_page']);
Router::get('/books_page',[BooksController::class,'view_page']);
Router::get('/books',[BooksController::class,'listAll']);
Router::get('/add_books',[BooksController::class,'create']);
Router::get('/edit_books/{id}',[BooksController::class,'edit']);
Router::get('/remove_books/{id}/{name}',[BooksController::class,'remove']);
Router::post('/save_books',[BooksController::class,'store']);
Router::post('/update_books',[BooksController::class,'update']);

/** end of web routes */



$system->start();

