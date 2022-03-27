<?php
require_once 'controller.php';
class Users extends Controller{
    public function __construct(){
        echo "inside home";

    }
    function checkout(){
        $this->view('checkout');
    }

}
?>