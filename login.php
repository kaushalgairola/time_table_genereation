<?php
require_once 'includes/session.php';
require_once 'includes/db.php';
    //require_once 'includes/functions.php';
    if(isset($_POST['submit'])){
       $privilege = $db->login($_POST['username'],$_POST['password']);
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>TTGS</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />

</head>

<body background="images/backgd.jpg">
<div id="login">
	<div id="logtitle">
		<span style="margin-top:15px; margin-left:200px;">LOGIN HERE</span>
	</div>

		<table>
                                <form action ="login.php" method="post" id="login_form">
                                  <tr>
                                      <td>username</td>
                                      <td><input type="text" name="username" id="username"/></td>
                                  </tr>
                                  <tr>
                                      <td>password</td>
                                      <td><input type="password" name="password" id="password"/></td>
                                  </tr>
                                  <tr>
                                      <td></td>
                                      <td><input type="submit" name="submit" id="submit" value="submit" style="background-color: #0099FF; border-radius:5px;"/></td>
                                  </tr>
                                </form>
                                <script type="text/javascript">
                                    var frmvalidator = new Validator("login_form");
                                    frmvalidator.addValidation("username","req","Please enter username");
                                    frmvalidator.addValidation("password","req","Please enter password");
                                </script>
                              <tr>
                                  <td colspan="2">
                                      <?php
                                        if (isset($privilege)){
                                            if($privilege==0){
                                                echo "<p style=\"color:#fff;font-weight:bold;font-size:20px;\">wrong username password</p>";
                                            }
                                        }
                                      ?>
                                  </td>
                              </tr>
        </table>
</div>
</body>
</html>