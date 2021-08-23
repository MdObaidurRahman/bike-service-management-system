<?php 
	include("auth.php"); 
	include("db.php"); 
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form action="insertassignment.php" method="post" accept-charset="utf-8">	

  <div class="container">
    <h1>Assign Employee(Mechanic)</h1>
    <hr>
	
	<?php
			include("db.php");
			mysqli_query($link, 'SET CHARACTER SET utf8');
			mysqli_query($link, "SET SESSION collation_connection ='utf8_general_ci'") or 
			die (mysql_error());
			
			if(isset($_REQUEST['code'])){
				$codeid = $_REQUEST['code'];
			}		
		?>
	
    <label for="employeeid"><b>Select Employee</b></label>
	<?php 
		$query = "SELECT employeeid, employeename FROM employee";
		$result = mysqli_query($link, $query);
	?>
    <select name="employeeid" id="employeeid">	
		<option value="">Select Employee</option>
		<?php			
			while($row=mysqli_fetch_array($result)) {
				echo "<option value='".$row['employeeid']."'>".$row['employeename']."</option>";
			}
		?>									
	</select><br/><br/>
	
    <label for="bikeid"><b>Select Bike</b></label>
    <?php
		if(isset($_REQUEST['code'])){
			//$subjectid = $_REQUEST['code'];
			$codeid = $_REQUEST['code'];
		}
		$query = "SELECT bikeuserid, bikemodel FROM bikeuser Where bikeuserid = '$codeid'";
		$result = mysqli_query($link, $query);
	?>
    <select name="bikeid" id="bikeid">			
		<?php			
			while($row=mysqli_fetch_array($result)) {
				echo "<option value='".$row['bikeuserid']."'>".$row['bikemodel']."</option>";
			}
		?>									
	</select><br/><br/>
	
	<label for="status"><b>Select Status</b></label>   
    <select name="status" id="status">	
		<option value="">Select Status</option>
		<option value="ASSIGNED">Assign</option>
		<option value="NOT_ASSIGNED">Not Assigned</option>		
	</select><br/><br/>
	
    
    <hr>
    

    <button type="submit" class="registerbtn">Assign</button>
  </div>
  
</form>

</body>
</html>
