<?php 
	include("../auth.php"); 
	include("../db.php"); 
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin || Bike Service Management</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../style.css">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    
</head>
<body>
    
	<div class="header">
     <div class="navbar">
         <div class="logo">           
             <img src="../bike.jpg">
             <h3>~Bike Service Booking~</h3>
         </div>
         <div class="menu">
             <ul>
             <li><a href="../bk/home.html">Home</a></li>             
				 <li><a href="../logout.php">Logout</a></li>
             </ul>
         </div>
     </div>   
	 
     <div class="about-services">
         <ul>		 
			 <li><span></span>
                <a href="assignmentviewedit.php"><img src="../bike1.jpg"></a>
                <h1>My Assignment</h1>
             </li>
			 
         </ul>
     </div>
     
	 <div class="social-icons">    </div>
     
	
   
</div>
</body>
</html>