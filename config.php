<?php
	$hostname="localhost";
	$user="root";
	$password="";
	
	$connection=mysql_connect($hostname, $user, $password);
	if($connection){
		mysql_select_db('db_toufiq');
		
		$sql="INSERT INTO tbl_user(fname,lname,uname,email,password)VALUES('$fname','$lname','$uname','$email','$pass');";
		/* echo $sql;
		die(); */
		if($sql){
			mysql_query($sql);
			echo "<h2>Data Inserted Successfully!</h2>";
		}
		else {
			die ("Query Problem".mysql_error());
		}
		
		}
	
	else {
		die("Database Connection Failed".mysql_error());
	}
?>