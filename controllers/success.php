<?php

class Success extends Controller{
    public function __construct(){
        parent::__construct();
    }
    
    public function index(){
        $this->view->render('header');
        $this->view->render('success/index');
        $this->view->render('footer');
    }
}