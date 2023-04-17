<?php include("connection.php");?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login Form</title>
        <link rel="stylesheet" type="text/css" href="style.css">
       
    </head>
    <body>
        <div class="login-form">
            <form  method="POST" >
                <h1>Login Form</h1>
                <p>Username</p>
                <input type="text" name="username" placeholder="User Name" required>
                <p>Password</p>
                <input type="password" name="password" placeholder="Password" required><br>
              <button type="submit" name="login">Login</button>
            </form>
        </div>
    </body>
</html>
 
<?php

if(isset($_POST['login']))
{
$username=$_POST['username'];
$password=$_POST['password'];

 if($username=='admin')
 {
   if($password!='password')
   {
     ?><script>alert('wrong password')</script><?php
  }
    else    {
    header("location:admindashboard.php");
    exit();
     }
 }
 else
 {
    ?><script>alert("Invalid username or password")</script><?php
}
}
?>
