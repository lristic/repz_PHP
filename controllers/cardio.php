<?php

class Cardio extends Controller{
    public function __construct(){
        parent::__construct();   
    }

    public function index(){
        $this->view->render('header');
        $this->view->render('cardio/index');
        $this->view->render('footer');
    }
}