<table style="border-bottom:2px solid #333;">
    <form action="home.php?pagef=viewsubject" method="POST">
        <tr>
            <td>ID</td>
            <td>auto generated</td>
        </tr>
        <tr>
            <td>Subject Name</td>
            <td><input type="text" name="sub_name" /> </td>
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
            <td colspan="2"><input type="submit" name="addsubject" value="add subject"/></td>
        </tr>
    </form>
</table>