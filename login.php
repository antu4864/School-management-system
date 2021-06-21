<?php

session_start();
if(isset($_SESSION['uid']))
{
   header('location:admin/admindash.php');
}



?>



<html>
<head>
<title>Admin Login</title>

</head>
<body>
<form align='center' method="POST" action="login.php">

<br><br><br><br>
<h3>Welcome to the Admin Login</h3><br><br><br><br>



    Username &nbsp;&nbsp<input type="text" name="uname" required><br><br>
    Password &nbsp;&nbsp<input type="password" name="pass" required><br><br>
    <input type="submit" name="login" value="Login">

</form>

</body>
</html>
<?php

include('dbcon.php');

if(isset($_POST['login']))

{
    $username =  $_POST['uname'];
    $password =  $_POST['pass'];

    $query = "SELECT username,password FROM admin WHERE username = '$username' AND password ='$password'";
   $run=mysqli_query($con,$query);
   $row= mysqli_num_rows($run);

    if($row <1)
    {
        ?>
        <script>
            alert('username and password not match !!');
            window.open('login.php','_self');
        </script>
        <?php
       
      
    }
    else
    {
     
        $data=mysqli_fetch_assoc($run);

        $user = $data['username'];

        $_SESSION['uid']=$user;
        header('location:admin/admindash.php');
    }



}
?>