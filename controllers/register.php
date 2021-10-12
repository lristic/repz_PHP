<?php

class Register extends Controller{
    public function __construct(){
        parent::__construct();
    }
    
    public function index(){
        
        $this->view->render("header");
        $this->view->render('register/index');
        $this->view->render("footer");
    }
    
    public function registerControl(){
        $this->model->registerControl();
    }
    
}