<?php
session_start();
if($_SESSION['uid'])
{
   echo "";
}
 else
    
 {
     header('location: ../login.php');
 }
 ?>
<?php
 include ('header.php');
?>
<div class="admintitle" align="center">
    
    <h4><a href="logout.php" style="float: right; margin-right:30px; color:#fff; font-size:30px;">logout</a></h4>
    <h1 style="font-size:50px;">welcome to admin dashboard</h1>
</div>

<div class="dashboard">
    <table border="1" style="width:50%;" align="center">
        <tr>
            <td>1.</td><td><a href="addstudent.php.php" style="font-size: 25px;">insert student details</a></td>
        </tr>
        <tr>
            <td>2.</td><td><a href="updatestudent.php.php" style="font-size: 25px;">update student details</a></td>
        </tr>
        <tr>
            <td>3.</td><td><a href="deletestudent.php.php" style="font-size: 25px;">delete student details</a></td>
        </tr>
    </table>
</div>
</body>
</html>
















