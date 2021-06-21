<html>
<head>
<title>admin login</title>

</head>
<body>
<form align='center' method="POST">

<h3>welcome to the admin login</h3><br><br><br><br><br><br>


    username<input type="text" name="uname" required><br><br>
    password<input type="password" name="pass" required><br><br>
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

   if (!empty($username) && !empty($password))
    {
            $query = "SELECT username,password FROM admin WHERE username = '$username' AND password ='$password'";
            $res = mysqli_query($con, $query);
            
            if (mysqli_num_rows($res) == 1) 
            {
               echo "password match";
            } 
            else
             {
                
                echo "not match";
             }
    }
}
 ?>