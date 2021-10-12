<?php

class Login extends Controller{
    public function __construct(){
        parent::__construct();
    }
    
    public function index(){
        
        $this->view->render('header');
        $this->view->render('login/index');
        $this->view->render('footer');
    }
    
    public function loginControl(){
        $this->model->loginControl();
    }
    
    public function logout(){
        $this->model->logout();
    }
}