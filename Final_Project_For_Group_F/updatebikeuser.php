<?php
	//ob_start();
	include("db.php");
	mysqli_query($link, "SET CHARACTER SET utf8");
	mysqli_query($link, "SET SESSION collation_connection ='utf8_general_ci'"); 
	
	$bikeuserid = mysqli_real_escape_string($link, $_POST['bikeuserid']);
	$fullname = mysqli_real_escape_string($link, $_POST['fullname']);
	$bikemodel = mysqli_real_escape_string($link, $_POST['bikemodel']);
	$numberplate = mysqli_real_escape_string($link, $_POST['numberplate']);
	$address = mysqli_real_escape_string($link, $_POST['address']);
	$mobile = mysqli_real_escape_string($link, $_POST['mobile']);
			
	//Insert first sql table query ie: student1 table	
	$sql = "UPDATE bikeuser SET 
				fullname = '$fullname',
				bikemodel = '$bikemodel',
				numberplate = '$numberplate',
				address = '$address',
				mobile = '$mobile'
			WHERE bikeuserid = '$bikeuserid' ";
	
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