<?php
    session_start();
    // Getting Data For Actions In ToDo
    if(isset($_GET['to'])){
        $key = $_GET['to'];
        if($_GET['action'] == 'done'){
           $_SESSION['todo'][$key]['done']=true; 
        }else if($_GET['action'] == 'cancel'){
          $_SESSION['todo'][$key]['done']=false;   
        }else{
            unset( $_SESSION['todo'][$key]);
        }
    }
   
?>



