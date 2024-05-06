<?php
include '../config.php';
if(isset($_GET['deletebookid']))
{
    $id=$_GET['deletebookid'];

    $sql="delete from `book` where book_id=$id";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        echo "Deleted Successfull";
        header('location: ../admin/manage_book.php');
    }
    else
    {
        die(mysqli_error($conn));
    }
}
?>