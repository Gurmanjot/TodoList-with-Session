<?php
    session_start();
    $i=$_GET['index'];
    array_splice($_SESSION['arr'],$i,1);
    header("Location: index.php");
?> 