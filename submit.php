<?php 
  session_start();

  array_push($_SESSION["arr"], 
        ["caption" => $_POST["nam"],"isCompleted" => false]);

  header("Location: index.php");

?>