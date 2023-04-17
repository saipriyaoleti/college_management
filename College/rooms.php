<?php include('connection.php'); ?>
<!DOCTYPE html>
<html>
   <head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Rooms</title>
        
        <link rel="stylesheet" type="text/css" href="room.css">
        <link rel="stylesheet" type="text/css" href="pop.css">
    </head>
    <body>
    <div class="container">
        <div class="login-form">
        
            <form action="" method="POST">
                <h1>Rooms</h1>
                <p>Block name</p>
                <input type="text" name="block" placeholder="Enter block" required>
                <p>Room no</p>
                <input type="text" name="room" placeholder="Room no" required>
				<!-- <p>Year</p>
                <nav>
                <label for="dropdown" style="width:100%"></label>
				<select name="year" required>
					<option value="">--rating--</option>
					<option value="1">1st Year</option>
					<option value="2">2nd Year</option>
					<option value="3">3rd Year</option>
					<option value="4">4th Year</option>
	            </select>
</nav>   -->
                <p>Year</p>
                <input type="text" name="year" placeholder="Enter Year" required>
                <p>Branch</p>
                <input type="text" name="branch" placeholder="Enter branch" required>
                 <br>
                   <br><br> <label ><input type="checkbox" style="width:20px; height: 20px" name="rb[]" value="board" >Boards   </label>
                    <label><input type="checkbox" style="width:20px; height: 20px" name="rb[]" value="projector">Projector  </label>
                    <label > <input type="checkbox" style="width:20px; height: 20px" name="rb[]" value="fans">Fans </label><br><br>
                    <label ><input type="checkbox" style="width:20px; height: 20px" name="rb[]" value="lights">Lights  </label>
                    <label ><input type="checkbox" style="width:20px; height: 20px" name="rb[]" value="benches" >Benches  </label>
                    <label ><input type="checkbox" style="width:20px; height: 20px" name="rb[]"value="windows">Windows  </label>
                  <br>
                <button type="submit" name="submit" >Submit</button>
            <!-- <div class="popup" id="popup">
                <img src="tick.png">
                <h2>Thank You!</h2>
                <p>Your details have been successfully submitted.  Thanks!</p>
                <button type="button" onclick="closepopup()">OK</button>
            </div> -->
</div>
</form>
    <?php
if(isset($_POST['submit']))
{
    $block=strtolower($_POST['block']);
    $room=strtolower($_POST['room']);
    $year=strtolower($_POST['year']);
    $branch=strtolower($_POST['branch']);
    $rb=$_POST['rb'];
    $rb1=implode(",",$rb);
    echo $rb;
    $query="INSERT into rooms(block,room,year,branch,rb) values('$block','$room','$year','$branch','$rb1')";
    $data=mysqli_query($conn,$query);
    if($data)
    { 
        // echo "Data inserted ";
       header("location:popup.php");
       
    }
    else
    {
        echo "Failed";
    }
}
else{
    //echo "submit not possible";
}
?>
