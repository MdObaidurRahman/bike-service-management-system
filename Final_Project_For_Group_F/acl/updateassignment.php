<?php
	ob_start();
	include("../db.php");
	mysqli_query($link, "SET CHARACTER SET utf8");
	mysqli_query($link, "SET SESSION collation_connection ='utf8_general_ci'"); 
	
	$status = mysqli_real_escape_string($link, $_POST['status']);
	$bikeuserid = mysqli_real_escape_string($link, $_POST['bikeuserid']);
			
	//Insert first sql table query ie: student1 table	
	echo $sql = "UPDATE assignment SET 
				status = '$status'				
			WHERE bikeid = '$bikeuserid' ";
	
	//print_r($_POST); exit();
	if(mysqli_query($link, $sql)){
		$msg="Successfully Updated!";
		echo "<script type='text/javascript'>
			alert('$msg');
			window.location = 'employee.php';
		</script>";
		
		//header("Location:index.php");
	}else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}

	// close connection
	mysqli_close($link);

	
?>