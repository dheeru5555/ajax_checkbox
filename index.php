<?php
$conn = mysqli_connect('localhost','root','','test');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>CRUD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>
<body>

<div class="card text-center" style="padding:15px;">
  <h4>PHP: Delete Records using Checkbox</h4>
</div><br> 

<div class="container">
 <div class="row">

  <div class="col-sm-8">
    <table class="table table-hover table-bordered ml-4 ">
        <thead>
        <tr>
            <th><button type="submit" form="my-form" class="btn btn-success"><i class="fas fa-trash"></i></button></th>
            <th>Id</th>
            <th>Name</th>
            <th>Age</th>
            <th>Phone</th>
        </tr>
        </thead>
        <form action="delete.php" id="my-form" method="post"> 
         <tbody>
          <?php 
            $sql_select = "SELECT * FROM student";
            $sel_query =  mysqli_query($conn,$sql_select);
            while($row = mysqli_fetch_array($sel_query))
            { 
              echo'<tr>';
              echo'<td><input type="checkbox" name="check_list[]" value="'.$row['id'].'"></td>';
              echo'<td>'.$row['id'].'</td>';
              echo'<td>'.$row['name'].'</td>';
              echo'<td>'.$row['age'].'</td>';
              echo'<td>'.$row['phone'].'</td>';
              echo'<tr>'; 
            }      
           ?>
        </tbody>
        </form>
    </table>
  </div>
 </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<script>


</script> 