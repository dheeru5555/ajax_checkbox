<?php
   
   $conn = mysqli_connect('localhost','root','','test');

    foreach($_POST['check_list'] as $dataID)
     {
        $sql = "DELETE from student WHERE id =$dataID";
        $query = mysqli_query($conn,$sql);
     }
     if($query)
        {
            header('Location:index.php');
        }
        else
        {
            echo "Error";
        }
     
 


?>