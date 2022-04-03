<?php

namespace coding\app\controllers;
use coding\app\models\Order;

class OrderController extends Controller{

    function listAll($parameters=null){

       
        $orders=new Order();
        $allorders=$orders->getAll();
        //print_r($allbooks);

        $this->view('list_orders',$allorders);

    }
    function create(){
        $this->view('add_orders');

    }

    function store(){
        print_r($_POST);
        print_r($_FILES);
        $orders=new Order();
        
        $orders->total=$_POST['total'];
        $orders->discount=$_POST['discount'];
        $orders->net_total=$_POST['net_total'];
        $orders->payment_method=$_POST['payment_method'];
        $orders->status=$_POST['status'];

       

        $orders->save();

    }
    function edit($params=[]){

        $order=new Order();
        $result=$order->getSingleRow($params['id']);
        $this->view('edit_orders',$result);
        

    }
    function update(){

    }
    public function remove($params=[]){
        echo "remove function";

    }

}
?>