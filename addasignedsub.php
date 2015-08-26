<div>
	<table>
	<form action="home.php?pagef=viewasignedsub" method="post" name="asign_sub">
		<tr>
			<td>Teacher Name :</td>
			<td><select name ="teacher">
                      <option>select teacher</option>
                                            <?php
                                                $db->teacher();
                                            ?>
                  </select></td>
			</tr>
			<tr>
			<td>Subjects :</td>
			<td>
                      
                                            <?php
                                                $db->subjectcheck();
                                            ?>
                  </td>
			</tr>
			
			
		<tr>
		<td colspan="2">
		<input type="submit" name="asign_subject" value="Asign subjects"  />
		</td>
		</tr>
		</form>
	</table>

</div>