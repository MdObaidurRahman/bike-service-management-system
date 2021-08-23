<?php 
	include("auth.php"); 
	include("db.php"); 
	include("header.php");
?>

<body>
    
	<div class="header">
     <?php include("menu.php"); ?>
	 
     <div class="about-services">
         <ul>
             <li>                 
                 <img src="bike1.jpg">
				 <h1><a href="bikeuser.php">Create Users</a></h1>
                 <p>Please create users for your service centers</p>
             </li>
             <li>
                 <a href="bikeuserview.php"><img src="bike1.jpg">
                 <h1>View Report</h1></a>
                 <p>You can see the detail report of the services</p>
             </li>
             <li>
                <a href="bikeuserviewedit.php"><img src="bike1.jpg">
                <h1>Update and Delete</h1></a>
                <p>User our update app for update purpose</p>
             </li>
         </ul>
     </div>
     <div class="social-icons">
		
		
         <ul>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
         </ul>
     </div>
     
	
   
</div>
</body>
</html>