<?php

class LoginModel extends Model{
    public function __construct(){
        parent::__construct();
    }
    
    public function loginControl(){ 
        
        $email = $_POST['email'];
        $password = $_POST['password'];
          
        $sql = "SELECT *
                FROM users
                WHERE email = :email
                AND password = :password
                AND active = 1";
        
        $stmt = $this->db->prepare($sql);
        
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->bindParam(":password", $password, PDO::PARAM_STR);
            
        $stmt->execute();
            
            
        $count = $stmt->rowCount();
        $result = $stmt->fetchAll();
            
            
        if($count > 0){
            foreach($result as $row){
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
            }
            
            header("Location: ../profile/profileInfo/" . $_SESSION['id']);
            exit;
        }else{
            echo "<center><h4 style='color:#ef3e36'>Wrong e-mail or password</h4></center>";
        }
    }
        
    
    public function logout(){
        session_destroy();
        header("Location: ../index");
        exit;
    }
    
}