<?php 
	include("auth.php"); 
	include("db.php"); 

	include("db.php");
	mysqli_query($link, 'SET CHARACTER SET utf8');
	mysqli_query($link, "SET SESSION collation_connection ='utf8_general_ci'") or 
	die (mysql_error());
	
	if(isset($_REQUEST['code'])){
		//$subjectid = $_REQUEST['code'];
		$employeeid = $_REQUEST['code'];
	}
	
	$sql = "DELETE FROM employee WHERE employeeid = '$employeeid' "; //exit();
	if(mysqli_query($link, $sql)){
		$msg="Successfully Deleted!";
		echo "<script type='text/javascript'>
			alert('$msg');
			window.location = 'admin.php';
		</script>";
		
		//header("Location:index.php");
	}else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
	
			/*
			$query = "SELECT * FROM bikeuser";
			$result = mysqli_query($link, $query);	
			$row=mysqli_fetch_array($result);
			*/
?>