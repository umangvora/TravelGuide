<?php

session_start();
//header('location: login.php');

$con=mysqli_connect('localhost','root','123','userreg');

//mysqli_select_db($con,'userreg');

$name = $_POST['user'];
 //$email = $_POST['email'];
 $password = $_POST['password'];

//echo "select * from usertable where user='$name'";

$pass="";
 $s = "select * from usertable where user='$name'";
 $result = mysqli_query($con, $s);
 $num = mysqli_num_rows($result);

foreach($result as $r){

	$pass=$r['password'];

}




 if($pass == $password){
 	$_SESSION['username']=$name;
 	header('location:index.php');
 }
 else{
 	header('location:login.php');
}
 	




?>