<?php
 
    $conn = mysqli_connect('localhost','root','123' ,'maindata');

    $stay=$_GET['serch123'];
    $query = "select * from maindata where city='$stay'";
    $query_run = mysqli_query($conn,$query);
    //$task_data = mysqli_fetch_array($query_run);
   // $row= mysqli_fetch_array($query_run,MYSQLI_ASSOC);
    /*while($row = mysqli_fetch_array($query_run, MYSQLI_ASSOC))
    {
        echo $row['data'];
    }*/
    
    foreach($query_run as $result){

        echo $result['Famouse places'];  
        echo $result['top hotels'];
        echo $result['top restaurants'];
        echo $result['other details'];  

    }


?>