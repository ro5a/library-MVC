<?php 

namespace coding\app\controllers;

use coding\app\models\Book;
use coding\app\models\Category;

class OffersController extends Controller{
 
    public function create(){
        $books=new Book();
        $categories=new Category();
        $offers =new Offer();
        $allCategoires=$categories->getAll();
        $allbooks=$books->getAll();
        $viewConent=array('books'=>$allbooks,'categories'=>$allCategoires);
        $this->view('add_offer',$viewConent);
    }

    public function store(){
        if(isset($_POST['selected_books'])){
            $books=implode(",",$_POST['selected_books']);

        }
        print_r($_POST);
    }
    function listAll($parameters=null){

        $parameters['status'];
        $books=new Book();
        $categories=new Category();
        $allCategoires=$categories->getAll();
        //print_r($allCategories);

        $this->view('list_offers',$allCategoires);

    }
   public  function create_offer(){
    $this->view('add_offer');

}
}
?>