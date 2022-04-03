<?php
require_once __DIR__ . '/../vendor/autoload.php';

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
use coding\app\controllers\OrderController;
use coding\app\controllers\AuthorsController;
use coding\app\controllers\PayementController;



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



// checkout Routes
Router::get('/checkout',[CheckoutController::class,'checkout_page']);

// checkout Routes
Router::get('/steper',[SteperController::class,'steper']);
// checkout Routes
Router::get('/details',[DetailsController::class, 'details']);
// Authers Routes
Router::get('/author_page',[AuthorsController::class,'view_page']);
Router::get('/authors',[ AuthorsController::class,'listAll']);
Router::get('/add_author',[AuthorsController::class,'newAuther']);
Router::get('/edit_author/{id}',[ AuthorsController::class,'edit']);
Router::get('/remove_author/{id}/{name}',[ AuthorsController::class,'remove']);
Router::post('/save_author',[ AuthorsController::class,'saveAuthor']);
Router::post('/update_author',[AuthorsController::class,'update']);
// users Routes
Router::get('/user_page',[UsersController::class,'view_page']);
Router::get('/users',[ UsersController::class,'listAll']);
Router::get('/new_user',[ UsersController::class,'newUser']);
Router::get('/edit_user/{id}',[ UsersController::class,'edit']);
Router::get('/remove_user/{id}/{name}',[ UsersControllerr::class,'remove']);
Router::post('/save_user',[ UsersController::class,'saveUser']);
Router::post('/update_user',[ UsersController::class,'update']);
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

//orders routes
Router::get('/orders',[OrderController::class, 'listAll']);
Router::get('/add_orders',[OrderController::class,'create']);
Router::get('/save_order',[OrderController::class,'store']);
Router::get('/edit_orders/{id}',[OrderController::class,'edit']);
Router::get('/remove_orders/{id}/{name}',[OrderController::class,'remove']);

Router::post('/update_orders',[OrderController::class,'update']);

// Payements Routes
Router::get('/payement_page',[PayementController::class,'view_page']);
Router::get('/payements',[PayementController::class,'listAll']);
Router::get('/add_payements',[PayementController::class,'create']);
Router::get('/edit_payements/{id}',[PayementController::class,'edit']);
Router::get('/remove_payements/{id}/{name}',[PayementController::class,'remove']);
Router::post('/save_payements',[PayementController::class,'store']);
Router::post('/update_payements',[PayementController::class,'update']);


/** end of web routes */



$system->start();

