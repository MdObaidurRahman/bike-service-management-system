<?php
	//ob_start();
	include("db.php");
	mysqli_query($link, "SET CHARACTER SET utf8");
	mysqli_query($link, "SET SESSION collation_connection ='utf8_general_ci'"); 
	
	$employeeid = mysqli_real_escape_string($link, $_POST['employeeid']);
	$employeename = mysqli_real_escape_string($link, $_POST['employeename']);
	$contact = mysqli_real_escape_string($link, $_POST['contact']);
	$assignmentid = mysqli_real_escape_string($link, $_POST['assignmentid']);
	$notes = mysqli_real_escape_string($link, $_POST['notes']);
			
	//Insert first sql table query ie: student1 table	
	$sql = "UPDATE employee SET 
				employeename = '$employeename',
				contact = '$contact',
				assignmentid = '$assignmentid',
				notes = '$notes'
			WHERE employeeid = '$employeeid' ";
	
	//print_r($_POST); exit();
	if(mysqli_query($link, $sql)){
		$msg="Successfully Updated!";
		echo "<script type='text/javascript'>
			alert('$msg');
			window.location = 'admin.php';
		</script>";
		
		//header("Location:index.php");
	}else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}

	// close connection
	mysqli_close($link);

	
?>