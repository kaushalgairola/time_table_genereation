<?php
//include_once "connection.php";
//include_once "session_config.php";
//include_once "function.php";
require_once 'includes/session.php';
require_once 'includes/db.php';
require_once 'includes/functions.php';

if(@$_GET['msg']=="viewall"){
	$db->viewall();
}

if (isset($_POST['asign_subject'])
        && $_POST['teacher'] != ''){
        $teacher =$_POST['teacher'];
		$subjects=$_POST['sub'];
		for($i=0;$i<count($subjects);$i++){
			$subject=$subjects[$i];
			$query =  "INSERT INTO subject_asigned (subject_name, teacher_name)
        VALUES ('{$subject}', '{$teacher}')";
        $result = mysql_query($query);
		}
		//print_r($subjects);
			
        }
				
		 if (isset($_POST['update_user'])){
        $id=$_POST['id'];
        $first_name =$_POST['first_name'];
        $last_name =$_POST['last_name'];
        $username = $_POST['username'];
        $password=$_POST['password'];
        $privilege = $_POST['privilege'];
        $contact = $_POST['contact'];
        $query = "UPDATE admin SET first_name = '{$first_name}', last_name = '{$last_name}',
            username = '{$username}', password = '{$password}', privilege = '{$privilege}',
            contact ='{$contact}' WHERE id='{$id}' limit 1";
        $result = mysql_query($query);
    }


if (isset($_POST['insert_user'])
        && $_POST['first_name'] != ''
        && $_POST['last_name'] != ''
        && $_POST['username'] != ''
        && $_POST['password'] != ''
        && $_POST['privilege'] != ''
        && $_POST['contact'] != ''    ){
        $first_name =$_POST['first_name'];
        $last_name =$_POST['last_name'];
        $username = $_POST['username'];
        $password=$_POST['password'];
        $privilege = $_POST['privilege'];
        $contact = $_POST['contact'];
        $query =  "INSERT INTO admin (id, first_name, last_name, username, password, privilege, contact)
        VALUES (NULL, '{$first_name}', '{$last_name}', '{$username}', '{$password}', '{$privilege}',
        '{$contact}')";
        $result = mysql_query($query);
        }

    
    if (isset($_POST['addsemester'])
        && $_POST['s_name'] != '' ){
        $s_name =$_POST['s_name'];
        //$no_of_sub =$_POST['no_of_sub'];
        //$branch = $_POST['branch'];
        $query =  "INSERT INTO semester (s_name)
        VALUES ('{$s_name}')";
        $result = mysql_query($query);
        }

if (isset($_POST['addteacher'])
        && $_POST['teacher_name'] != '' ){
        $teacher_name =$_POST['teacher_name'];
    //$sub_name =$_POST['subject'];
        //$no_of_sub =$_POST['no_of_sub'];
        //$branch = $_POST['branch'];
        $query =  "INSERT INTO teacher (teacher_name)
        VALUES ('{$teacher_name}')";
        $result = mysql_query($query);
        }

        if (isset($_POST['addbranch'])
        && $_POST['b_name'] != '' ){
        $b_name =$_POST['b_name'];
        //$no_of_sub =$_POST['no_of_sub'];
        //$branch = $_POST['branch'];
        $query =  "INSERT INTO branch (b_name)
        VALUES ('{$b_name}')";
        $result = mysql_query($query);
        }
        if (isset($_POST['addsubject'])
        && $_POST['sub_name'] != ''){
        $sub_name =$_POST['sub_name'];
        //$type = $_POST['type'];
        //$no_of_sub =$_POST['no_of_sub'];
        $sem = $_POST['semester'];
        $branch = $_POST['branch'];
        $query =  "INSERT INTO subject (sub_name, s_name, b_name)
        VALUES ('{$sub_name}', '{$sem}', '{$branch}')";
        $result = mysql_query($query);
        }
		

		
?>
<html>
<head>
<meta>
<title>Your Store</title>
<base>
<link href="images/cart.png" rel="icon" />
<link rel="stylesheet" type="text/css" href="catalog/view/theme/default/stylesheet/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="catalog/view/theme/default/stylesheet/slideshow.css" media="screen" />
<link rel="stylesheet" type="text/css" href="catalog/view/theme/default/stylesheet/carousel.css" media="screen" />
<script type="text/javascript" src="catalog/view/javascript/jquery/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="catalog/view/javascript/jquery/ui/jquery-ui-1.8.16.custom.min.js"></script>
<link rel="stylesheet" type="text/css" href="catalog/view/javascript/jquery/ui/themes/ui-lightness/jquery-ui-1.8.16.custom.css" />
<script type="text/javascript" src="catalog/view/javascript/jquery/ui/external/jquery.cookie.js"></script>
<script type="text/javascript" src="catalog/view/javascript/jquery/colorbox/jquery.colorbox.js"></script>
<link rel="stylesheet" type="text/css" href="catalog/view/javascript/jquery/colorbox/colorbox.css" media="screen" />
<script type="text/javascript" src="catalog/view/javascript/jquery/tabs.js"></script>
<script type="text/javascript" src="catalog/view/javascript/common.js"></script>
<script type="text/javascript" src="catalog/view/javascript/jquery/nivo-slider/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="catalog/view/javascript/jquery/jquery.jcarousel.min.js"></script>

</head>
<body>
<div id="container">
	<div id="header">
    	<?php include_once "header.php";?>
	</div>
	<div id="menu">
  		<?php include_once "topnav.php"; ?>
	</div>
	<div id="content">
		<?php include_once "content.php"; ?>		
	</div>
	<div id="footer">
  		<?php include_once "footer.php";?> 
	</div>

</div>
</body>
</html>