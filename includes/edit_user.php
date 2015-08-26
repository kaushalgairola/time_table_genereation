<table style="border-bottom:2px solid #333;">
    <form action="home.php?pagef=viewusers" method="POST">
        <tr>
            <td>ID</td>
            <td><?php echo $row['id'];?> <input type="hidden" value="<?php echo $row['id'];?>" name="id"/></td>
        </tr>
        <tr>
            <td>First Name</td>
            <td><input type="text" name="first_name" value="<?php echo $row['first_name'];?>"</td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type="text" name="last_name" value="<?php echo $row['last_name'];?>"</td>
        </tr>
        <tr>
            <td>User Name</td>
            <td><input type="text" name="username" value="<?php echo $row['username'];?>"</td>
        </tr>
        <tr>
            <td>password</td>
            <td><input type="text" name="password" value="<?php echo $row['password'];?>"</td>
        </tr>
        <tr>
            <td>privilege</td>
            <td>
                <select name="privilege">
                    <option value="admin" <?php if($row['privilege']=="admin"){echo "selected=\"selected\"";}?>>admin</option>
                    <option value="manager"  <?php if($row['privilege']=="manager"){echo "selected=\"selected\"";}?>>Manager</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>contact</td>
            <td><input type="text" name="contact" value="<?php echo $row['contact'];?>"</td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="update_user" value="update user"/>&nbsp;&nbsp;&nbsp;
                <a href="home.php?pagef=remove_user&id=<?php echo $row['id']?>">remove user</a>
            </td>
        </tr>
    </form>
</table>
