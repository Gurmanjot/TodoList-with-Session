<?php
    session_start();
    $i=$_REQUEST['index'];
    if(  $_SESSION["arr"][$i]["isCompleted"]==true ){
         $_SESSION["arr"][$i]["isCompleted"]=false;
    } 
    else{
        $_SESSION["arr"][$i]["isCompleted"]=true;
    }
    header("Location: index.php");
?> 