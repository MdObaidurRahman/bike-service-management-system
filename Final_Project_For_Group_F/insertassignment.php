<?php
	
	ob_start();
	include("db.php");
	
	$bikeid = mysqli_real_escape_string($link, $_POST['bikeid']);
	$employeeid = mysqli_real_escape_string($link, $_POST['employeeid']);
	$status = mysqli_real_escape_string($link, $_POST['status']);
	$date = date('Y-m-d');
	
	$sql = "INSERT INTO assignment (bikeid, employeeid, status, date) 
	VALUES ('$bikeid', '$employeeid', '$status', '$date')";
	
	if(mysqli_query($link, $sql)){
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