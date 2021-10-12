<?php

class Exercises extends Controller {
    public function __construct(){
        parent::__construct();
    }
    
    public function index(){
            
        $this->view->render('exercises/header'); 
        $this->view->render('exercises/index');
        $this->view->render('exercises/footer');
    }
    
    public function exerciseInput($noOfRows){
        $this->model->exerciseInput($noOfRows);
    }
}