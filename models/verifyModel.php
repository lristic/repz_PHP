<?php

class VerifyModel extends Model{
    public function __construct(){
        parent::__construct();
    }
    
    public function verifyReg($email, $hash){
        if($email == "" || $hash == ""){
            echo "Please use your verification link sent to your e-mail.";
        }else{
        
            $sql_verify = "SELECT *
                        FROM users
                        WHERE email = :email
                        AND hash = :hash";
        
            $stmt = $this->db->preapre($sql_verify);
            $stmt->bindParam(":email", $email, PDO::PARAM_STR);
            $stmt->bindParam(":hash", $hash, PDO::PARAM_STR);
        
            $stmt->execute();
        
            if($stmt->rowCount() == 1){
                $sql_activate = "UPDATE users
                                SET active = 1
                                WHERE email = :email
                                AND hash = :hash";
            
                $stmt_activate = $this->db->prepare($sql_activate);
                $stmt_activate->bindParam(":email", $email, PDO::PARAM_STR);
                $stmt_activate->bindParam(":hash", $hash, PDO::PARAM_STR);
            
                $stmt_activate->execute();
            
                if($stmt_activate->rowCount() == 1){
                    return 1;
                }
            }else{
                echo "No account found with provided e-mail.";
            }
        }
    }
}