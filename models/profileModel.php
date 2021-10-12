<?php

class ProfileModel extends Model {
    public function __construct(){
        parent::__construct();
    }
    
    public function profileInfo($id){
        $sql = "SELECT *
                FROM logs l
                    JOIN users u
                        ON l.id = u.id
                WHERE l.id = :id";
        
        $stmt = $this->db->prepare($sql);
        
        $stmt->bindParam(":id", $id, PDO::PARAM_STR);
        
        $stmt->execute();
        
        
        return $stmt->fetchAll();
    }
    
    public function sums($id){
        $sql = "SELECT SUM(wide_pushups) as sum_wide_pushups,
                    SUM(narrow_pushups) as sum_narrow_pushups,
                    SUM(diamond_pushups) as sum_diamond_pushups,
                    SUM(wide_pullups) as sum_wide_pullups,
                    SUM(narrow_pullups) as sum_narrow_pullups,
                    SUM(wide_chinups) as sum_wide_chinups,
                    SUM(basic_chinups) as sum_basic_chinups,
                    SUM(dips) as sum_dips,
                    SUM(biceps) as sum_biceps,
                    SUM(abs) as sum_abs
                FROM logs l
                WHERE l.id = :id";
        
        $stmt = $this->db->prepare($sql);
        
        $stmt->bindParam(":id", $id, PDO::PARAM_STR);
        
        $stmt->execute();
        
        $result = $stmt->fetchAll();
        
        return $result;
    }
    
    public function signupDate($id){
        $sql = "SELECT signup_date
                FROM users
                WHERE id = :id";
        
        $stmt = $this->db->prepare($sql);
        
        $stmt->bindParam(":id", $id, PDO::PARAM_STR);
        
        $stmt->execute();
        
        $result = $stmt->fetchAll();
        
        return $result;
    }
    
    public function todayStats($id){
        $sql = "SELECT SUM(wide_pushups) as today_wide_pushups,
                    SUM(narrow_pushups) as today_narrow_pushups,
                    SUM(diamond_pushups) as today_diamond_pushups,
                    SUM(wide_pullups) as today_wide_pullups,
                    SUM(narrow_pullups) as today_narrow_pullups,
                    SUM(wide_chinups) as today_wide_chinups,
                    SUM(basic_chinups) as today_basic_chinups,
                    SUM(dips) as today_dips,
                    SUM(biceps) as today_biceps,
                    SUM(abs) as today_abs
                FROM logs
                WHERE date = :date";
        
        $date = date('Y-m-d');
        
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":date", $date, PDO::PARAM_STR);
        
        $stmt->execute();
        
        $result = $stmt->fetchAll();
        
        
        if($stmt->rowCount() != 0){
            return $result;
        }else{
            return 0;
        }
    }
    
    public function yesterdayStats($id){
        $sql = "SELECT SUM(wide_pushups) as yesterday_wide_pushups,
                    SUM(narrow_pushups) as yesterday_narrow_pushups,
                    SUM(diamond_pushups) as yesterday_diamond_pushups,
                    SUM(wide_pullups) as yesterday_wide_pullups,
                    SUM(narrow_pullups) as yesterday_narrow_pullups,
                    SUM(wide_chinups) as yesterday_wide_chinups,
                    SUM(basic_chinups) as yesterday_basic_chinups,
                    SUM(dips) as yesterday_dips,
                    SUM(biceps) as yesterday_biceps,
                    SUM(abs) as yesterday_abs
                FROM logs
                WHERE date = :date
                AND id = :id";
        
        $date = date('Y-m-d', strtotime('-1 days'));
        
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":date", $date, PDO::PARAM_STR);
        $stmt->bindParam(":id", $id, PDO::PARAM_STR);
        
        $stmt->execute();
        
        $result = $stmt->fetchAll();
        
        
        return $result;
    }
    
    public function firstTraining($id){
        $sql = "SELECT  wide_pushups as first_wide_pushups,
                    narrow_pushups as first_narrow_pushups,
                    diamond_pushups as first_diamond_pushups,
                    wide_pullups as first_wide_pullups,
                    narrow_pullups as first_narrow_pullups,
                    wide_chinups as first_wide_chinups,
                    basic_chinups as first_basic_chinups,
                    dips as first_dips,
                    biceps as first_biceps,
                    abs as first_abs
                FROM logs l
                    JOIN users u 
                WHERE l.date = u.signup_date
                AND l.id = :id";
        
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id", $id, PDO::PARAM_STR);
        
        $stmt->execute();
        
        $result = $stmt->fetchAll();
        
        return $result;
    }
    
}