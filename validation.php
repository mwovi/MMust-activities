<?php
   
require_once('insert.php');

$user= $_POST['user'];
$reg= $_POST['reg'];
$email= $_POST['email'];
$year= $_POST['year'];
$password= $_POST['password'];
$conf= $_POST['conf'];




    if(!empty($user) || !empty($reg) || !empty($email) || !empty($year) || !empty($password) || !empty($conf)){
        echo 'all fields are filled';
        if($password == $conf){
            echo'passwords match';
            $sql="INSERT INTO registration(user,reg,email,year,password,conf)VALUES(?,?,?,?,?,?)";
            $stmtinsert=$conn->prepare($sql);
            $result=$stmtinsert->execute([$user,$reg,$email,$year,$password,$conf]);
            if($result){
                echo'Info saved successfully';
            }
            else{
                echo'an error occured';
            }
        }
        else{
            echo'passwords do not match';
        }
    }
        else{
            echo'failed to load';
        }
        
        

        





?>
