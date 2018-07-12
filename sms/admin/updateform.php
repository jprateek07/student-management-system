<?php session_start();

if(isset($_SESSION['uid']))
{
    echo "";
}
else
{
    header('location:../login.php');
}
?>
<?php
 include ('header.php');
 include('../dbcon.php');
 $sid=$_GET['sid'];
 $sql="SELECT * FROM `student` WHERE `id`='$sid'";
 $run= mysqli_query($con, $sql);
 $data= mysqli_fetch_assoc($run);
?>
<div class="admintitle" align="center">
    <a href="admindash.php" style="float: left; margin-right:30px; color:#fff; font-size: 20px;">back to dashboard</a>  
    <h4><a href="logout.php" style="float: right; margin-right:30px; color:#fff; font-size:30px;">logout</a></h4>
    <h1 style="font-size:50px;">welcome to admin dashboard</h1>
</div>
<form action="updatedata.php" method="post" enctype="multipart/form-data">
    <table align="center" border="1" style="width: 70%; margin-top: 40px">
        <tr>
            <td>roll no.</td>
            <td><input type="text" name="rollno" value=<?php echo $data ['rollno'];?> required></td>
        </tr>
          <tr>
            <td>full name</td>
            <td><input type="text" name="name" value=<?php echo $data ['name'];?>required></td>
        </tr>
         <tr>
            <td> city</td>
            <td><input type="text" name="city"value=<?php echo $data ['city'];?> required></td>
        </tr>
         <tr>
            <td> parents contact no..</td>
            <td><input type="text" name="pcon" value=<?php echo $data ['pcont'];?>required></td>
        </tr>
         <tr>
            <td> standard</td>
            <td><input type="number" name="std" value=<?php echo $data ['standard'];?>required></td>
        </tr>
         <tr>
            <td>image</td>
            <td><input type="file" name="simg" required></td>
        </tr>
          <tr>
              <td align="center" colspan="2">
                  <input type="hidden" name="sid" value="<?php echo $data['id'];?>"/>
                  <input type="submit" name="submit" value="submit"  required>
              </td>
        </tr>
       
    </table>
</form>
</body>
