<table style="border-bottom:2px solid #333;">
    <form action="home.php?pagef=viewasignedsub" method="POST">
        <tr>
			<td>View By</td>
		</tr>
        
        <tr>
            <td>Teacher Name</td>
            <td><select name ="teacher">
                      <option>select teacher</option>
                                            <?php
                                                $db->teacher();
                                            ?>
                  </select></td>
                  <td><select name ="subject">
                      <option>select subject</option>
                                            <?php
                                                $db->subject();
                                            ?>
                  </select></td>
        </tr>
        
        <tr>
            <td colspan="2"><input type="submit" name="view_asigned_subject" value="View"/></td>
        </tr>
    </form>
</table>
<?php
if(isset($_POST['view_asigned_subject']))
{
	$teacher=$_POST['teacher'];
	$subject=$_POST['subject'];
	$db->viewall();
	if($teacher!="select teacher")
		$db->get_asigned_subjectby_teacher($teacher);
	elseif($subject!="select subject")
		$db->get_asigned_subjectby_subject($subject);
	else{ echo "subject not found";}
}

?>