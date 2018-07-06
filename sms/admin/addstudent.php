<?php
session_start();

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
?>
<div class="admintitle" align="center">
    
    <h4><a href="logout.php" style="float: right; margin-right:30px; color:#fff; font-size:30px;">logout</a></h4>
    <h1 style="font-size:50px;">welcome to admin dashboard</h1>
</div>
<form action="addstudent.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>roll no.</td>
            <td><input type="text" name="rollno" required></td>
        </tr>
          <tr>
            <td>full name</td>
            <td><input type="text" name="name" required></td>
        </tr>
         <tr>
            <td> city</td>
            <td><input type="text" name="city" required></td>
        </tr>
         <tr>
            <td> parents contact no..</td>
            <td><input type="text" name="pcon" required></td>
        </tr>
         <tr>
            <td> standard</td>
            <td><input type="number" name="std" required></td>
        </tr>
         <tr>
            <td>image</td>
            <td><input type="file" name="simg" required></td>
        </tr>
          <tr>
            <td><input type="submit" name="submit" value="submit" required></td>
        </tr>
       
    </table>
</form>
</body>
</html>
//<?php
//if(isset($_POST['submit']))
//{
//    include('../dbcon.php');
//    $rolno=$_POST['rollno'];
//    $name=$_POST['name'];
//    $city=$_POST['city'];
//    $pcon=$_POST['pcon'];
//    $std=$_POST['std'];
//    $imagename=$_FILES['simg']['name'];
//    $tempname=$_FILES['simg']['tmp_name'];
//    move_uploaded_file($tempname,"../dataimg/name");
//    
//    $qry="INSERT INTO `student`(`id`, `rollno`, `name`, `city`, `pcont`, `standard`, `image`) VALUES ('NULL',$rolno','$name','$city','$pcon','$std','$tempname');";
//    $run= mysqli_query($con, $qry);
//    if($run==true)
//    { 
//        ?>
<script>
    alert('data inserted');
 </script>  
 //<?php
//}}
//?>
        