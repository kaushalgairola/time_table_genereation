<div id="cont">
<?php 
if(@$_GET['page']!="")
{
$page = @$_GET['page'];
switch($page)
{
	case "$page":
	include_once $page.".php";
	break;
	default:
	echo "page can not load";
}
}
elseif (@$_GET['pagef']) {
	$pagef = $_GET['pagef'];
                            
		switch($pagef)
{
	case "$pagef":
	include_once $pagef.".php";
	break;
	default:
	echo "page can not load";
}					
}							/*   if ($pagef=="viewbranch"){
                                    
                                    $db->view_branch();
                                }else if ($pagef=="viewusers"){
                                    $db->get_users();
                                }
                                //else if($pagef=="editusers" && isset ($_GET['id'])){
                                 //   include_once "edit_users.php";
                                //}
                                else if($pagef=="viewteacher"){
                                    //include_once "addteacher.php";
                                    $db->view_teacher();
                                }
                                else if($pagef =="remove_user"){
                                    $db->remove_user();
                                }
                                else if($pagef =="viewsemester"){
                                    //include_once "addsemester.php";
                                    $db->view_semester();
                                }
                                else if($pagef=="edit_hotel" && isset ($_GET['id'])){
                                    $db->edit_hotel();
                                }
                                else if($pagef=="addroom"){
                                    $db->add_room();
                                }
                                else if($pagef=="viewsubject"){
                                    $db->view_subject();
                                    //include_once "addsubject.php";
                                }
                                else if($pagef=="addtime"){
                                    //$db->add_time();
                                }
                                else if($pagef=="remove_hotel"){
                                    $db->remove_hotel();
                                }
                                else if($pagef=="customers"){
                                   $db->admin_customers();
                                }                                
                        }*/
                            else{
                                echo "<h1>welcome to you admin section <br/>mr. {$_SESSION['name']}</h1>";
                            }

?>
</div>