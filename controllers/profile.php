<?php

class Profile extends Controller{
    public function __construct(){
        parent::__construct();
    }
    
    public function index(){
        
        $this->view->render('profile/index');
    }
    
    public function profileInfo($id){
        
        $this->view->profile = $this->model->profileInfo($id);
        
        $this->view->sums = $this->model->sums($id);
        $this->view->signupDate = $this->model->signupDate($id);
        
        $this->view->todayStats = $this->model->todayStats($id);
        $this->view->yesterdayStats = $this->model->yesterdayStats($id);
        $this->view->firstTraining = $this->model->firstTraining($id);
        
        $this->view->render('header');
        $this->view->render('profile/stats');
        $this->view->render('footer');
    }
        
}