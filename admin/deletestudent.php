<?php
session_start();

if(isset($_SESSION['uid']))
{
    echo "";

}
else
{
    header("location: ../login.php");
}

?>
<?php

include('header.php');
include('titleheader.php');
?>
<table align="center">
<form action="deletestudent.php" method="post">
    <tr>
        <th>Enter Standerd</th>
        <td><input type="number" name="standerd" placeholder="Enter standerd" required></td>
    

        <th>Enter Name</th>
        <td><input type="text" name="stuname" placeholder="Enter Name" required></td>

        <td><input type="submit" name="submit" value="Search">
    </tr>

</form>
</table>

<table align="center" width="80%" border="1" style="margin-top:10px;">
    <tr style="background-color:green; color:#fff;">
        <th>No</th>
        <th>Image</th>
        <th>Name</th>
        <th>Roll no</th>
        <th>Edit</th>
            
    </tr>

    <?php

if(isset($_POST['submit']))
{
    include('../dbcon.php');

    $standerd=$_POST['standerd'];
    $name=$_POST['stuname'];

    $sql="SELECT standerd,name FROM student WHERE standerd = '$standerd' AND name ='$name'";
    $run=mysqli_query($con,$sql);

    if(mysqli_num_rows($run)<1)
    {
        echo "<tr><td colspan='5'>No Record Found</td></tr> ";
    }

    else
    {
        $count=0;
        while($data=mysqli_fetch_assoc($run))
        {
            $count++;
            ?>
               <tr>
                    <td><?php echo $count; ?></td>
                    <td><img src="../dataimg/<?php echo $data['image']; ?>" style="max-width:100px"/></td> 
                    <td><?php echo $data['name']; ?></td>
                    <td><?php echo $data['name']; ?></td>
                    <td><a href="deleteform.php?sid=<?php echo $data['id'];  ?>">Delete</a></td>
            
                </tr>   



            <?php
        }

    }


}

?>

</table>

