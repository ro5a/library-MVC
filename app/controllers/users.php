<?php
require_once 'controller.php';
class Users extends Controller{
    public function __construct(){
        echo "inside home";

    }
    function checkout(){
        $this->view('checkout');
    }
    function category(){
        $this->view('category');
    }

    function detailes(){
        $this->view('detailes');
    }
    function steper(){
        $this->view('steper');
    }
    function index(){
        $this->view('index');
    }

}
?>