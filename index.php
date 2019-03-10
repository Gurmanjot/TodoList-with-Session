<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Php form</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
      
        <style>
            body {
                background-color:lightgrey;
            }
            .c {
                border:1px solid black;
                border-collapse:collapse;
            }
            .work{
                border:1px solid black;
                border-collapse:collapse;
                margin: 10px 12%;
                height:44px;
                display:flex;
                justify-content:space-between;
            }
            .forms{
                margin:10px 15%;
            }
            h2{
                align:center;
                padding:0px 600px;
            }
            li{
                list-style-type:none;
            }
        </style> 

    </head>
<body>

<h2>My To Do List</h2>


<?php
        if(!isset($_SESSION["arr"]))
        $_SESSION["arr"] = [];
    ?>

<form action="submit.php" method="POST" class="forms">
  <div class="form-row">
    <div class="col">
      <input type="text" class="form-control c"  name="nam" placeholder="Time-Slot">
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
  </div>
</form>

<?php for ($i = 0; $i < sizeof($_SESSION['arr']); $i++) { ?>
 
    <li class="container work">
        <input type="checkbox" onclick="location.href='checkItem.php?index=<?php echo $i;?>' " <?php if ($_SESSION['arr'][$i]['isCompleted'] == true): ?> checked <?php endif ?>>
     
        <input type="text" style="width:300px" value="<?php echo $_SESSION['arr'][$i]['caption']; ?> " 
          onfocusout="editting(this.value,<?= $i ?>)"
        >
        <input type = "button" class="btn btn-secondary" value = "Remove" onclick = "location.href = 'removeItem.php?index=<?php echo $i; ?>'">

    </li>
<?php }?>
  <script>
   const editting = (nam,index) =>{
       location.href=`editItem.php?key=${index}&data=${nam}`;
     }
    </script>
    
</body>
</html>


<!-- 1.
<form action="submit.php" method="POST">
  First name:<br>
  <input type="text" name="name" value="Gurman">
  <br>
  
  <input type="submit" value="Submit">
</form> 

2.
 -->
<!-- 
<form action="submit.php" method="POST">
  number:<br>
  <input type="number" name="num" value="5">
  <br>
  
  <input type="submit" value="Submit">
</form>  
3.
-->