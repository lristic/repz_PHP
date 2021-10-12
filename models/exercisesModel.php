<?php

class ExercisesModel extends Model{
    public function __construct(){
        parent::__construct();
    }
    
    public function exerciseInput($noOfRows){
        $id = 1;
        
        $sql_log = "INSERT INTO logs
                    (id, date, 
                    wide_pushups, narrow_pushups, diamond_pushups, 
                    wide_pullups, narrow_pullups,
                    wide_chinups, basic_chinups,
                    dips,
                    biceps,
                    abs)
                    VALUES
                    (:id, :date, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0)";
        
        $stmt_log = $this->db->prepare($sql_log);
        $stmt_log->bindParam(":id", $_SESSION['id'], PDO::PARAM_STR);
        $date = date('Y-m-d');
        $stmt_log->bindParam(":date", $date, PDO::PARAM_STR);
        
        $stmt_log->execute();
        
        while($noOfRows != 0){
            ${'exerciseName' . $id} = $_POST['select-exercise'.$id];
            ${'reps'.$id} = $_POST['numberOfReps'.$id];
        
            
            if(${'exerciseName'.$id} == "wide_pushups"){
                $sql_pushups = "UPDATE logs
                        SET wide_pushups = :wide_pushups
                        WHERE date = :date
                        AND id = :id";
                            
                $stmt_pushups = $this->db->prepare($sql_pushups);
                $stmt_pushups->bindParam(":wide_pushups", ${'reps'.$id}, PDO::PARAM_STR);
                $stmt_pushups->bindParam(":date", $date, PDO::PARAM_STR);
                $stmt_pushups->bindParam(":id", $_SESSION['id'], PDO::PARAM_STR);               
                
                $stmt_pushups->execute();
            }

            if(${'exerciseName'.$id} == "narrow_pushups"){
                $sql_pushups = "UPDATE logs
                        SET narrow_pushups = :narrow_pushups
                        WHERE date = :date
                        AND id = :id";
                            
                $stmt_pushups = $this->db->prepare($sql_pushups);
                $stmt_pushups->bindParam(":narrow_pushups", ${'reps'.$id}, PDO::PARAM_STR);
                $stmt_pushups->bindParam(":date", $date, PDO::PARAM_STR);
                $stmt_pushups->bindParam(":id", $_SESSION['id'], PDO::PARAM_STR);               
                
                $stmt_pushups->execute();
            }

            if(${'exerciseName'.$id} == "diamond_pushups"){
                $sql_pushups = "UPDATE logs
                        SET diamond_pushups = :diamond_pushups
                        WHERE date = :date
                        AND id = :id";
                            
                $stmt_pushups = $this->db->prepare($sql_pushups);
                $stmt_pushups->bindParam(":diamond_pushups", ${'reps'.$id}, PDO::PARAM_STR);
                $stmt_pushups->bindParam(":date", $date, PDO::PARAM_STR);
                $stmt_pushups->bindParam(":id", $_SESSION['id'], PDO::PARAM_STR);               
                
                $stmt_pushups->execute();
            }
            
            if(${'exerciseName'.$id} == "wide_pullups"){
                $sql_pullups = "UPDATE logs
                        SET wide_pullups = :wide_pullups
                        WHERE date = :date
                        AND id = :id";
                                
                $stmt_pullups = $this->db->prepare($sql_pullups);
                $stmt_pullups->bindParam(":wide_pullups", ${'reps'.$id}, PDO::PARAM_STR);
                $stmt_pullups->bindParam(":date", $date, PDO::PARAM_STR);
                $stmt_pullups->bindParam(":id", $_SESSION['id'], PDO::PARAM_STR);               
                
                $stmt_pullups->execute();
            }

            if(${'exerciseName'.$id} == "narrow_pullups"){
                $sql_pullups = "UPDATE logs
                        SET narrow_pullups = :narrow_pullups
                        WHERE date = :date
                        AND id = :id";
                                
                $stmt_pullups = $this->db->prepare($sql_pullups);
                $stmt_pullups->bindParam(":narrow_pullups", ${'reps'.$id}, PDO::PARAM_STR);
                $stmt_pullups->bindParam(":date", $date, PDO::PARAM_STR);
                $stmt_pullups->bindParam(":id", $_SESSION['id'], PDO::PARAM_STR);               
                
                $stmt_pullups->execute();
            }

            if(${'exerciseName'.$id} == "wide_chinups"){
                $sql_pullups = "UPDATE logs
                        SET wide_chinups = :wide_chinups
                        WHERE date = :date
                        AND id = :id";
                                
                $stmt_pullups = $this->db->prepare($sql_pullups);
                $stmt_pullups->bindParam(":wide_chinups", ${'reps'.$id}, PDO::PARAM_STR);
                $stmt_pullups->bindParam(":date", $date, PDO::PARAM_STR);
                $stmt_pullups->bindParam(":id", $_SESSION['id'], PDO::PARAM_STR);               
                
                $stmt_pullups->execute();
            }

            if(${'exerciseName'.$id} == "basic_chinups"){
                $sql_pullups = "UPDATE logs
                        SET basic_chinups = :basic_chinups
                        WHERE date = :date
                        AND id = :id";
                                
                $stmt_pullups = $this->db->prepare($sql_pullups);
                $stmt_pullups->bindParam(":basic_chinups", ${'reps'.$id}, PDO::PARAM_STR);
                $stmt_pullups->bindParam(":date", $date, PDO::PARAM_STR);
                $stmt_pullups->bindParam(":id", $_SESSION['id'], PDO::PARAM_STR);               
                
                $stmt_pullups->execute();
            }

            if(${'exerciseName'.$id} == "dips"){
                $sql_biceps = "UPDATE logs
                        SET dips = :dips
                        WHERE date = :date
                        AND id = :id";
                
                $stmt_biceps = $this->db->prepare($sql_biceps);
                $stmt_biceps->bindParam(":dips", ${'reps'.$id}, PDO::PARAM_STR);
                $stmt_biceps->bindParam(":date", $date, PDO::PARAM_STR);
                $stmt_biceps->bindParam(":id", $_SESSION['id'], PDO::PARAM_STR);               
                
                $stmt_biceps->execute();
            }
            
            if(${'exerciseName'.$id} == "biceps"){
                $sql_biceps = "UPDATE logs
                        SET biceps = :biceps
                        WHERE date = :date
                        AND id = :id";
                
                $stmt_biceps = $this->db->prepare($sql_biceps);
                $stmt_biceps->bindParam(":biceps", ${'reps'.$id}, PDO::PARAM_STR);
                $stmt_biceps->bindParam(":date", $date, PDO::PARAM_STR);
                $stmt_biceps->bindParam(":id", $_SESSION['id'], PDO::PARAM_STR);               
                
                $stmt_biceps->execute();
            }
            
            if(${'exerciseName'.$id} == "abs"){
                $sql_abs = "UPDATE logs
                        SET abs = :abs
                        WHERE date = :date
                        AND id = :id";
                
                $stmt_abs = $this->db->prepare($sql_abs);
                $stmt_abs->bindParam(":abs", ${'reps'.$id}, PDO::PARAM_STR);
                $stmt_abs->bindParam(":date", $date, PDO::PARAM_STR);
                $stmt_abs->bindParam(":id", $_SESSION['id'], PDO::PARAM_STR);
                $stmt_abs->execute();
            }
            
            
            $noOfRows--;
            $id++;
            if($noOfRows == 0){
                echo "<br><center><h4 style='color:#27FB6B'>Successfully entered exercises!</h4></center>";
                
            }

        }
        
        // if($noOfRows == 0){
        //     header('Location: ../success');
        //     exit;
        // }
    }
}