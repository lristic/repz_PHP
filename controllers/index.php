<?php

class Index extends Controller{
    public function __construct(){
        parent::__construct();
    }
    
    public function index(){
        $this->view->render("header");
        $this->view->render("index/index");
        $this->view->render("footer");
    }
}