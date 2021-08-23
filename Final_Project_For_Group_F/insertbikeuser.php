<?php
	
	ob_start();
	include("db.php");
	
	$fullname = mysqli_real_escape_string($link, $_POST['fullname']);
	$bikemodel = mysqli_real_escape_string($link, $_POST['bikemodel']);
	$numberplate = mysqli_real_escape_string($link, $_POST['numberplate']);
	$address = mysqli_real_escape_string($link, $_POST['address']);
	$mobile = mysqli_real_escape_string($link, $_POST['mobile']);	
	//$Notes = mysqli_real_escape_string($link, $_POST['Notes']);

	//Insert first sql table query ie: student1 table	
	$sql = "INSERT INTO bikeuser (fullname, bikemodel, numberplate, address, mobile) 
	VALUES ('$fullname', '$bikemodel', '$numberplate', '$address', '$mobile')";
	
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