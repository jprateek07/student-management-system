<?php
function showdetails($standard,$rollno)
{
    include('dbcon.php');
    $sql="SELECT * FROM `student` WHERE `rollno`='$rollno' AND `standard`='$standard'";
    $run= mysqli_query($con, $sql);
    if(mysqli_num_rows($run)>0)
    {
      $data= mysqli_fetch_assoc($run);
      ?>
<table border="1" style="width: 50%; margin-top: 20px;" align="center">
    
        <tr>
            <th clospan="3">STUDENT DETAILS</th>
        </tr>
         <tr>
             <td rowspan="5"><img src="dataimg/<?php echo['image'];?>" style="max-height:150px; max-width: 120px; padding-left: 40px;"/></td>
            </th>roll no</th>
            <td><?php echo $data['rollno'];  ?></td>
         </tr>
         <tr>
             <th>NAME</th>
             <td><?php echo $data['name']; ?></td>
         </tr>
         <tr>
             <th>standard</th>
             <td><?php echo $data['standard']; ?></td>
         </tr>
         <tr>
             <th>PARENTS CONTACT</th>
             <td><?php echo $data['pcont']; ?></td>
         </tr>
         <tr>
             <th>city</th>
             <td><?php echo $data['city']; ?></td>
         </tr>
       
    
</table>
<?php
}
 else
     {
      echo "<script>alert('no student found');</script>";   
    }
}
?>