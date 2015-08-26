<table style="border-bottom:2px solid #333;">
    <form action="home.php?pagef=viewsubject" method="POST">
        <tr>
			<td>View By</td>
		</tr>
        
        <tr>
            <td>Semester Name</td>
            <td><select name ="semester">
                      <option>select semester</option>
                                            <?php
                                                $db->semester();
                                            ?>
                  </select></td>
                  <td><select name ="branch">
                      <option>select branch</option>
                                            <?php
                                                $db->branch();
                                            ?>
                  </select></td>
        </tr>
        
        <tr>
            <td colspan="2"><input type="submit" name="viewsubject" value="View"/></td>
        </tr>
    </form>
</table>
<?php
if(isset($_POST['viewsubject']))
{
	$semester=$_POST['semester'];
	$branch=$_POST['branch'];
	if($semester!="select semester" && $branch!="select branch")
	{
		$db->getsubjectbyall($semester,$branch);
	}
	elseif($semester!="select semester")
		$db->getsubjectbysem($semester);
	elseif($branch!="select branch")
		$db->getsubjectbybranch($branch);
	else{ echo "subject not found";}
}
?>