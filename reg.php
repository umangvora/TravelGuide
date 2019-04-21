<?php
 
 session_start();

 $con=mysqli_connect('localhost','root','123','userreg');

 //mysqli_select_db($con,'userreg');

 $name = $_POST['user'];
 $email = $_POST['email'];
 $password = $_POST['password'];

/*
 $s = "select * from usertable where user='$name'";
 $result = mysqli_query($con, $s);
 //$num = mysqli_num_rows($result);

 if($num == 1){
 	echo "Usrname is Already Taken";
 }
 else{*/
 	$reg= "insert into usertable(user,email,password) values ('".$name."','".$email."','".$password."')";
 	mysqli_query($con,$reg);
 	echo "Registration successfully";
 //}
 	header('location:index.php');




?>