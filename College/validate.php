<?php include("connection.php");
$username=$_POST['username'];
$password=$_POST['password'];
$x="password";
$y=mysqli_fetch_assoc($x);
if($y==!'')
{
    if($password!=$y['password'])
    {
    echo '<script?alert("Wrong Password")</script>';
    }
    else
    {
    header('location:admindash.php');
    }
}
else
{
echo '<script?alert("Invalid Username or Password")</script>';
}
?>