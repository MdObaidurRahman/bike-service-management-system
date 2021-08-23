<?php 
	include("../auth.php"); 
	include("../db.php"); 
?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>View Report</h2>
<?php 
	include("../db.php");
	mysqli_query($link, 'SET CHARACTER SET utf8');
	mysqli_query($link, "SET SESSION collation_connection ='utf8_general_ci'") or 
	die (mysql_error());
	$userid = $_SESSION['username'];
	
	/*$query2 = "SELECT * FROM usermanager WHERE username = '$userid' ";
	$result2 = mysqli_query($link, $query2);
	$row2=mysqli_fetch_array($result2);
	$empid = $row2['UserID'];*/
	
	
	$query1 = "SELECT T1.*, T2.*, T3.* FROM assignment T1 
				  INNER JOIN bikeuser T2 ON T1.bikeid = T2.bikeuserid 
				  INNER JOIN employee T3 ON T1.employeeid = T3.employeeid 
				Where T3.username = '$userid'";
	$result = mysqli_query($link, $query1);	
	$x=1;
?>

<table>
  <tr>
    <th>Bike Model</th>
    <th>Assignee</th>
    <th>Assign Date</th>
	<th>Number Plate</th>
	<th>Status</th>
	<th>Action</th>
  </tr>
  <?php	while($row=mysqli_fetch_array($result)) { ?>
  <tr>
    <td><?php echo $row['bikemodel']; ?></td>
    <td><?php echo $row['employeename']; ?></td>
    <td><?php echo substr($row['date'],0,10); ?></td>
	<td><?php echo $row['numberplate']; ?></td>
	<td><?php echo $row['status']; ?></td>
	<td>
		&nbsp;&nbsp;<a href="bikeuser_update.php?code=<?php echo $row['bikeuserid']; ?>"><img src="../edit.gif"></a>&nbsp;&nbsp;		
	</td>
  </tr>
  <?php } ?>
</table>

<a href="employee.php">Back to Home</a> 
</body>
</html>