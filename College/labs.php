<?php include("connection.php");?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Labs</title>
        <link rel="stylesheet" type="text/css" href="lab.css">
    </head>
    <body>
        <div class="Labs">
            <form action="#" method="post">
                <h1>Labs</h1>
                <p>Labname</p>
                <input type="text" name="lab_name" placeholder="Lab Name" required>
                <p>Computer No</p>
                <input type="computer no" name="computer_no" placeholder="Computer no" ></br>
                <p>Problems</p>
                <textarea name="problem" rows="5" cols="30" required></textarea></br>
                <button type="submit" name="submit">Submit</button>
            </form>
        </div>
    </body>
</html>
<?php
if(isset($_POST['submit']))
{
    $lab_name=strtolower($_POST['lab_name']);
    $computer_no=$_POST['computer_no'];
    $problem=strtolower($_POST['problem']);
    $query="INSERT into labs(lab_name,computer_no,problem) values('$lab_name','$computer_no','$problem')";
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