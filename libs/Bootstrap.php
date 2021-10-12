<?php

class Bootstrap {
    
    public function request_path(){
        
    $request_uri = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
    $script_name = explode('/', trim($_SERVER['SCRIPT_NAME'], '/'));
    $parts = array_diff_assoc($request_uri, $script_name);
    if (empty($parts)){
        return '/';
    }
        
    $path = implode('/', $parts);
        
    if (($position = strpos($path, '?')) !== FALSE){
        $path = substr($path, 0, $position);
    }
        
    return $path;
}
    
    public function __construct(){

        $url = $this->request_path();
        
        if($url == "/"){
            header("Location: index");
        }   
                
        $url = rtrim($url,'/');
        $url = explode('/', $url); 

        $file = 'controllers/' . $url[0] . '.php';
        
        if(file_exists($file)){
            require $file;    
        }else{
            require 'controllers/error.php';
            $controller = new Error();
            return false;
        }
        
        $cont = $url[0];
        
        $controller = new $cont;
        $controller->index();
        
        $controller->loadModel($url[0]);
        

        /*
    npr. help/other/10
    
        help je kontroler koji nam treba
            other je metod u kontroleru koji nam treba
                10 je opcioni argument
        */

        if(isset($url[2])){
            $controller->{$url[1]}($url[2]);
        }else{
            if(isset($url[1])){
                $controller->{$url[1]}();
            }
        }
    }        
        
}
