<?php
	
	ob_start();
	include("db.php");
	
	$employeename = mysqli_real_escape_string($link, $_POST['employeename']);
	$username = mysqli_real_escape_string($link, $_POST['username']);
	$contact = mysqli_real_escape_string($link, $_POST['contact']);	
	$notes = mysqli_real_escape_string($link, $_POST['notes']);	
	
	$password = mysqli_real_escape_string($link, $_POST['username']);
	//Insert first sql table query	
	$sql = "INSERT INTO employee (employeename, username, contact, notes) 
	VALUES ('$employeename', '$username', '$contact', '$notes')";
	
	if(mysqli_query($link, $sql)){
		$sql1 = "INSERT INTO usermanager (username, password, usertype, status) 
			VALUES ('$username', MD5('$password'), '2', '1')"; //exit();
		mysqli_query($link, $sql1);
		
		$msg="Successfully Inserted!!";
		echo "<script type='text/javascript'>
			alert('$msg');
			window.location = 'admin.php';
		</script>";

	}else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
	// close connection
	mysqli_close($link);
	
?>