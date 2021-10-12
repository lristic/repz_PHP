<?php

class RegisterModel extends Model{
    public function __construct(){
        parent::__construct();
    }
    
    
    public function registerControl(){
        
        $email = $_POST['email'];
        $name = $_POST['name'];
        $password = $_POST['password'];
        
                
        $sql_provera = "SELECT *
                        FROM users
                        WHERE email = :email
                        AND password = :password
                        AND name = :name";
            
        $stmt_provera = $this->db->prepare($sql_provera);
            
        $stmt_provera->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt_provera->bindParam(":password", $password, PDO::PARAM_STR);
        $stmt_provera->bindParam(":name", $name, PDO::PARAM_STR);
        
        $stmt_provera->execute();
        
        $check = $stmt_provera->rowCount();
        
        if($check == 1){
            echo "Error";
        }else{
            $hash = md5(rand(0,1000)); 
                                
            $sql = "INSERT INTO users (name, email, password, signup_date,hash) VALUES (:name, :email, :password, :signup_date, :hash)";
                
            $stmt = $this->db->prepare($sql);
                
            $date = date("Y-m-d");
                
                
                
            $stmt->bindParam(":name", $name, PDO::PARAM_STR);
            $stmt->bindParam(":email", $email, PDO::PARAM_STR);
            $stmt->bindParam(":password", $password, PDO::PARAM_STR);
            $stmt->bindParam(":signup_date", $date, PDO::PARAM_STR);
            $stmt->bindParam(":hash", $hash, PDO::PARAM_STR);
                
            $stmt->execute();
                
            if($stmt->rowCount() == 1){
                $this->successRegister();/*
                $success =  "Successfully registered!";
                $to      = $email; // Send email to our user
                $subject = 'repz. | Verification'; // Give the email a subject 
                $message = '
 
                    Hello, '.$name.'!
                    Thanks for signing up!
                    Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
 
                    ------------------------
                    E-mail: '.$email.'
                    Password: '.$password.'
                    ------------------------
 
                    Please click this link to activate your account:
                    http://razvoj.diginout.com/laki/repz/verify/'.$email.'/'.$hash.'
 
                    '; // Our message above including the link
                     
                $headers = 'From:noreply@yourwebsite.com' . "\r\n"; // Set from headers
                mail($to, $subject, $message, $headers);
                
                $this->successRegister();    */
            }else{
                $this->successRegister();
            }
        
        }    
    }
    
    public function successRegister(){
        header("Location: register/successRegister");
        exit;
    }
        
}