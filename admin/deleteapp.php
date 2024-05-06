
<?php
include '../config.php';
if(isset($_GET['deleteappid']))
{
    $id=$_GET['deleteappid'];

    $sql="delete from `apps` where app_id=$id";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        // echo "Deleted Successfull";
        header('location: ../admin/manage_blog.php');
    }
    else
    {
        die(mysqli_error($conn));
    }
}
?>