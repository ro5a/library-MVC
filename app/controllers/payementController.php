<?php

namespace coding\app\controllers;

use coding\app\models\Payement;

class PayementController extends Controller{

    function view_page($parameters=null){
        $payements=new Payement();
        $allpayements=$payements->getAll();

        $this->view('steper',$allpayements);

    }

       

    function listAll($parameters=null){

        $payements=new Payement();
        $allpayements=$payements->getAll();
        

        $this->view('list_payements',$allpayements);

    }
    function create(){
        $this->view('add_payements');

    }

    function store(){
        print_r($_POST);
        print_r($_FILES);
        $payements=new Payement();
        
        $payements->name=$_POST['payement_name'];
       
        $imageName=$this->uploadFile($_FILES['image']);

        $payements->image=$imageName!=null?$imageName:"default.png";
        $payements->created_by=1;
        $payements->is_active=$_POST['is_active'];

        $payements->save();

    }
    function edit($params=[]){

        $pay=new Payement();
        $result=$pay->getSingleRow($params['id']);
        $this->view('edit_payements',$result);
      
        

    }
    function update(){
        $payements=new Payement();

        $payements->name=$_POST['name'];
       $imageName=$this->uploadFile($_FILES['image']);

       $payements->image=$imageName!=null?$imageName:"default.png";
      

       $payements->created_by=1;
       $payements->is_active=1;

       $payements->update();

    }
    public function remove($params=[]){
        echo "remove function";
        $payements=new Payement();
        $payements->changeStatus($params['id']);

    }


    public static function uploadFile(array $imageFile): string
    {
        // check images direction
        if (!is_dir(__DIR__ . '/../../public/images')) {
            mkdir(__DIR__ . '/../../public/images');
        }

        if ($imageFile && $imageFile['tmp_name']) {
            $image = explode('.', $imageFile['name']);
            $imageExtension = end($image);

            $imageName = uniqid(). "." . $imageExtension;
            $imagePath =  __DIR__ . '/../../public/images/' . $imageName;

            move_uploaded_file($imageFile['tmp_name'], $imagePath);

            return $imageName;
        }

        return null;
    }

    




}

?>