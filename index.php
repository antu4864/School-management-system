<html>
<head>
<title>student management system</title>
</head>
<body>
<h3 align="right"><a href="login.php">Admin login</a></h3>
<h1 align='center'>Welcome to the Student Management System</h1>

<form align='center' method="POST" action="index.php">
   <h2> student information</h2><br><br>
    Choose std.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <select name ="std">
                <option value="1">1st</option>
                <option value="2">2nd</option>
                <option value="3">3rd</option>
                <option value="4">4th</option>
                <option value="5">5th</option>
                <option value="6">6th</option>
                    </select><br><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;Enter Roll no.&nbsp;&nbsp;<input type="text" name="rollno" require><br><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Show Info">
</form>

</body>
</html>

<?php

if(isset($_POST['submit']))
{
    $standerd=$_POST['std'];
    $rollno=$_POST['rollno'];

    //include('dbcon.php');
    //showdetails($standerd,$rollno);




    {
        include('dbcon.php');
    
        $sql= "SELECT *  FROM `student` WHERE 'rollno'='$rollno' AND 'standerd'='$standerd'";
            
         $run=mysqli_query($con,$sql);
        if(mysqli_num_rows($run)>0)
        {
            $data=mysqli_fetch_assoc($run);
        }
        else
        {
            echo "<script>alert('match not found');</script>";
        }
    }
    
 




}
?>