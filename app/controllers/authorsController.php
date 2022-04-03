<?php
namespace coding\app\controllers;

use coding\app\models\AUthor;

class AuthorsController{
    function view_page($parameters=null){
        $authors=new AUthor();
        $allAuthors=$authors->getAll();

        $this->view('details',$allAuthors);

    }

   
    function listAll($parameters=null){

        
        $authors=new AUthor();
        $allAuthors=$authors->getAll();
        

        $this->view('list_authors',$allAuthors);

    }
    function create(){
        $this->view("add_author");

    }

    function store(){
        print_r($_POST);
        print_r($_FILES);
        $author=new AUthor();
        
        $author->name=$_POST['auther_name'];
        $author->email=$_POST['email'];
        $author->phone=$_POST['phone'];
        $author->bio=$_POST['bio'];
      
        $author->created_by=1;
        $author->is_active=$_POST['is_active'];

        $author->save();

    }
    function edit($params=[]){

        $auth=new AUthor();
        $result=$auth->getSingleRow($params['id']);
        $this->view('edit_author',$result);
        

    }
    function update(){

    }
    public function remove($params=[]){
        echo "remove function";

    }




}
?>