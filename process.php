<?php
include_once "connection.php";
include_once "session_config.php";
include_once "function.php";
//***********login 
if(isset($_POST['login']))
{
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$sql = "select *from users where user = '".$user."' AND pass = '".$pass."'";
	$res = mysql_query($sql);
	while($row = mysql_fetch_array($res))
			{

				if(mysql_num_rows($res) ==1)
				{
				session_start();
				$_SESSION['log']='true';
				$_SESSION['user'] = $user;
				Redirect("home.php?msg=success");
				}
			}
}				
//************************logout***************
if(@$_GET['msg']=='logout')
{
	session_start();
	session_destroy(); //destroys the current session
	session_unset();
	Redirect("index.php?msg=logout");
}

?>