<?php
include_once 'includes/session.php';
confirm_logged_in();
include_once 'includes/db.php';
?>
<div id="logo">
	
	<a href="http://localhost/TTGS/home.php" style="text-decoration:none;"><h1 style="color:#38B0E3;">Time Table Generation System</h1></a>
	<a href="http://localhost/TTGS/home.php?page=generate" style="text-decoration:none;"><h3 style="color:#38c4E3;">Generate TimeTable</h3></a>

</div>
<div style="background-color: #1B1B1B; width:200px; height:60px; float:right; margin-top:30px; color:#0080FF">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;welcome <?php echo $_SESSION['name'];?>
&nbsp;&nbsp;<a href="includes/logout.php">Logout</a>
</div>
      
