<?php 
         session_start();
         $i=$_REQUEST['key'];     
         $d=$_REQUEST['data'];
         
         if(empty($d)){
            header("Location: removeItem.php?index={$i}");
         }
         else{
            $_SESSION["arr"][$i]["caption"]=$d;
            header("Location: index.php");
         }

       
?>