<?php
include("connection.php");?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">   
    <link rel="stylesheet" href="st.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">Duvvada</div>
          <div class="text-two">Visakhapatnam</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">0891 - 27 55 222/333/444/555</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">pravallika.narava@gmail.com</div>
          <div class="text-two">keerthypriya2002@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div><br><br>
        <p>If you have any work from me or any types of quries related to my website, you can send me message from here. It's my pleasure to help you.</p>
      <form action="#">
        <div class="input-box">
          <input type="text" placeholder="Enter your name" name="name" required>
        </div>
        <div class="input-box">
          <input type="text" placeholder="Enter your email" name="email" required>
        </div>
        <div class="input-box message-box">
          <textarea name="message" required></textarea>
        </div>
        <div class="button">
          <input type="button" value="Send Now" name="submit">
        </div>
      </form>
    </div>
    </div>
  </div>
</body>
</html>
<?php
if(($_POST['submit']))
{
    $name=($_POST['name']);
    $email=($_POST['email']);
    $message=($_POST['message']);
    $query="INSERT into contact values('$name','$email','$message')";
    $data=mysqli_query($conn,$query);
    if($data)
    { 
       echo "Message is sent";
    }
    else{
      echo "message not sent";
    }
  }
  ?>