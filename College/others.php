<?php include("connection.php");?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Others</title>
        <link rel="stylesheet" type="text/css" href="other.css">
    </head>
    <body>
        <div class="Others">
            <form action="#" method="POST">
                <h1>Others</h1>
                <p>Block name</p>
                <input type="text" name="block" placeholder="Enter block" required>
                <p>Problem</p>
                <textarea name="problem" rows="8" cols="100" required></textarea></br>
                <button type="submit" name="submit"><h3>Submit</h3></button>
            </form>
        </div>
    </body>
</html>
<?php
if(isset($_POST['submit']))
{
    $block=strtolower($_POST['block']);
    $problem=strtolower($_POST['problem']);
    $query="INSERT into others(block,problem) values('$block','$problem')";
    $data=mysqli_query($conn,$query);
    if($data)
    {
        header("location:popup.php");
    }
    else
    {
        echo "Failed";
    }
}
else{
   // echo "submit not possible";
}
?>