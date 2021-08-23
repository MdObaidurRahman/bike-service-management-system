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

<h2>View Report</h2>
<?php 
	include("db.php");
	mysqli_query($link, 'SET CHARACTER SET utf8');
	mysqli_query($link, "SET SESSION collation_connection ='utf8_general_ci'") or 
	die (mysql_error());
	$query1 = "SELECT * FROM employee";
	$result = mysqli_query($link, $query1);	
	$x=1;
?>

<table>
  <tr>
    <th>Employee Name</th>
    <th>Contact</th>    
	<th>Notes</th>
	<th>Action</th>
  </tr>
  <?php	while($row=mysqli_fetch_array($result)) { ?>
  <tr>
    <td><?php echo $row['employeename']; ?></td>
    <td><?php echo $row['contact']; ?></td>    
	<td><?php echo $row['notes']; ?></td>
	<td><a href="employee_updateview.php?code=<?php echo $row['employeeid']; ?>"><img src="edit.gif" /></a>&nbsp;&nbsp;&nbsp;
		<a href="employee_deleteview.php?code=<?php echo $row['employeeid']; ?>"><img src="del.gif"></a></td>
  </tr>
  <?php } ?>
</table>

<a href="admin.php">Back to Admin Panel</a> 
</body>
</html>