<table style="border-bottom:2px solid #333;">
    <form action="home.php?pagef=viewusers" method="POST">
        <tr>
            <td>ID</td>
            <td>auto generated</td>
        </tr>
        <tr>
            <td>First Name</td>
            <td><input type="text" name="first_name" /> </td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type="text" name="last_name"></td>
        </tr>
        <tr>
            <td>User Name</td>
            <td><input type="text" name="username"/></td>
        </tr>
        <tr>
            <td>password</td>
            <td><input type="password" name="password"/></td>
        </tr>
        <tr>
            <td>privilege</td>
            <td>
                <select name="privilege">
                    <option value="admin">admin</option>
                    <option value="manager" selected="selected">Manager</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>contact</td>
            <td><input type="text" name="contact"/></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="insert_user" value="insert user"/></td>
        </tr>
    </form>
</table>