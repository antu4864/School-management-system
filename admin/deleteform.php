?php


    if(isset($_POST['submit']))
    {
        include('../dbcon.php');
        
        $id=$_REQUEST['id'];

        $qry="DELETE FROM `student` WHERE `id`='$id'";
        
        $run=mysqli_query($con,$qry);

        if ($run==true)
        {
 ?>
            <script>
                alert('data update succssfully');
                window.open('delete.php ','_self');

            </script>
            <?php
        }
    }


?>
