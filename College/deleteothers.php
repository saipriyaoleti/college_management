<?php include("connection.php");
$id=$_GET['id'];
$query="DELETE FROM others where id='$id' ";
$data=mysqli_query($conn,$query);
if($data)
{
    header("location:admindashboard.php");
}
else{
    echo "Failed to delete";
}
?>