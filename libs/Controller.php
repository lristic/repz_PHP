<?php

class Controller {
    
    public function __construct(){
        //echo 'Main controller' . '<br>';
        $this->view = new View();
    }
    
    public function loadModel($name){
        $path = 'models/' . $name . 'Model.php';
        if(file_exists($path)){
            require $path;
            $modelName = $name . 'Model';
            $this->model = new $modelName();
        }
        
    }
}