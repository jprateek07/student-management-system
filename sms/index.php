<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Student management system</title>
    </head>
    <body>
        <h3 align="right" style="margin-right: 20px;"><a href="login.php">admin login</a></h3>
        
        <h2 align="center">welcome to student management system</h2>
        <form method="post" action="index.php">
            <table style="width: 30%;" align="center" border="1">
                <tr>
                    <td colspan="2" align="center">student information </td>
                </tr>
                <tr>
                    <td align="right">choose standard</td>
                    <td>
                        <select name="std" required>
                            <option value="1">1st</option>
                            <option value="2">2nd</option>
                            <option value="3">3rd</option>
                            <option value="4">4th</option>
                             <option value="5">5th</option>

                        </select>
                    </td>
                    
                </tr>
                <tr>
                    <td align="right">enter rollnoo </td>
                    <td><input type="text" name="rollno" required=""</td>
                </tr>
                <tr>
                    <td colspan="2"  align="center"><input type="submit" name="submit" value="show info"</td>
                </tr>
            </table>
        </form>
    </body>
</html>
