<?php 
	include("auth.php"); 
	include("db.php"); 
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

<h2>View Assign Report</h2>
<?php 
	include("db.php");
	mysqli_query($link, 'SET CHARACTER SET utf8');
	mysqli_query($link, "SET SESSION collation_connection ='utf8_general_ci'") or 
	die (mysql_error());
	$query1 = "SELECT T1.*, T2.*, T3.* FROM assignment T1
			INNER JOIN bikeuser T2 ON T1.bikeid = T2.bikeuserid
            INNER JOIN employee T3 ON T1.employeeid = T3.employeeid";
	$result = mysqli_query($link, $query1);	
	$x=1;
?>

<table>
  <tr>
    <th>Bike Model</th>
    <th>Assign</th>
    <th>Assign Date</th>
	<th>Number Plate</th>
	<th>Status</th>
	<!--<th>Action</th>-->
  </tr>
  <?php	while($row=mysqli_fetch_array($result)) { ?>
  <tr>
    <td><?php echo $row['bikemodel']; ?></td>
    <td><?php echo $row['employeename']; ?></td>
    <td><?php echo substr($row['date'],0,10); ?></td>
	<td><?php echo $row['numberplate']; ?></td>
	<td><?php echo $row['status']; ?></td>
	<!--<td>
		&nbsp;&nbsp;<a href="bikeuser_updateview.php?code=<?php //echo $row['bikeuserid']; ?>"><img src="edit.gif" /></a>&nbsp;&nbsp;
		<a href="bikeuser_deleteview.php?code=<?php //echo $row['bikeuserid']; ?>"><img src="del.gif"></a>&nbsp;&nbsp;
		<a href="bikeuser_assignment.php?code=<?php //echo $row['bikeuserid']; ?>"><img src="assignment.png"></a>
	</td>-->
  </tr>
  <?php } ?>
</table>

<a href="admin.php">Back to Admin Panel</a> 
</body>
</html>