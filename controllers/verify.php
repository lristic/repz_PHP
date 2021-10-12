<?php

class Verify extends Controller{
    public function __construct(){
        parent::__construct();
    }
    
    public function index(){
        $this->view->render("header");
        $this->view->render("verify/index");
        $this->view->render("footer");
    }
    
    public function verifyReg($email, $hash){
        $this->view->verifyReg = $this->model->verifyReg($email, $hash);
        
        $this->view->render("header");
        $this->view->render("verify/index");
        $this->view->render("footer");
    }
}