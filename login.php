<?php

if(empty($_POST['fname'])){
	
	echo "Please fillup input filed";
}
elseif(empty($_POST['lname'])){
	echo "Please fillup input filed";
}
elseif(empty($_POST['uname'])){
	echo "Please fillup input filed";
}
elseif(empty($_POST['email'])){
	echo "Please fillup input filed";
}
elseif(empty($_POST['password'])){
	echo "Please fillup input filed";
}
else{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$uname=$_POST['uname'];
	$email=$_POST['email'];
	$pass=$_POST['password'];
	
require ('config.php'); 	
}

?>

