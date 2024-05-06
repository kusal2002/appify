<?php
include '../config.php';
if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid'];

    $sql="delete from `apps` where app_id=$id";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        // echo "Deleted Successfull";
        header('location: ../admin/manage_app.php');
    }
    else
    {
        die(mysqli_error($conn));
    }
}
?>