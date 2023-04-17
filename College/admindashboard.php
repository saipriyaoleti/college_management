<?php include("connection.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/1825bd9b94.js" crossorigin="anonymous"></script>
	<!-- My CSS -->
	<link rel="stylesheet" href="dash2.css">

	<title>AdminHub</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">College Management</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="#">
				<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="home.php">&nbsp;&nbsp;
				<i class="fa-solid fa-house"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span class="text">Home</span>
				</a>
			</li>
			<li>
				<a href="about.php">
				<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">About</span>
				</a>
			</li>
			<li>
				<a href="contact.php">
				<i class='bx bxs-group' ></i>
					<span class="text">Contact Us</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="feedback.php">
				<i class='bx bxs-message-dots' ></i>
					<span class="text">Feedback</span>
				</a>
			</li>
			<li>
				<a href="home.php" class="logout">
				<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
		</nav>
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				
			</div>

			<ul class="box-info">
				<li>
				<i class='bx bxs-group' ></i>
					<span class="text">
						<p>Rooms</p>
                        <h1>
                            <?php
                            $que="delete from rooms where id not in(select max(id) from rooms group by block,room,year,branch,rb)";
                            $da=mysqli_query($conn,$que);
                              $room= "select * from rooms";
                              $room_num=mysqli_query($conn,$room);
                              if($room_total=mysqli_num_rows($room_num))
                              {
                                echo $room_total;
                              }
                              else
                              {
                                echo "0";
                              }
                              ?>
                           </h1>
                            <button type="submit">
                          <a href="displayrooms.php"><h1>Click Here</h1></a>
                          </button>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<p>Labs</p>
                        <h1>
                            <?php
                            $que="delete from labs where id not in(select max(id) from labs group by lab_name,computer_no,problem)";
                            $da=mysqli_query($conn,$que);
                              $lab= "select * from labs";
                              $lab_num=mysqli_query($conn,$lab);
                              if($lab_total=mysqli_num_rows($lab_num))
                              {
                                echo $lab_total;
                              }
                              else
                              {
                                echo "0";
                              }
                              ?>
                            
                            </h1>
                            <button type="submit">
                                <a href="displaylabs.php"><h1>Click Here</h1></a>
                                </button>
					</span>
				</li>
				<li>
				<i class='bx bxs-group' ></i>
					<span class="text">
						<p>Others</p>
                        <h1>
                            <?php
                            $que="delete from others where id not in(select max(id) from others group by block,problem)";
                            $da=mysqli_query($conn,$que);
                              $other= "select * from others";
                              $other_num=mysqli_query($conn,$other);
                              if($other_total=mysqli_num_rows($other_num))
                              {
                                echo $other_total;
                              }
                              else
                              {
                                echo "0";
                              }
                              ?>
                            </h1> 
                            <button type="submit">
                                <a href="displayothers.php"><h1>Click Here</h1></a>
                                </button>
					</span>
				</li>
			</ul>


			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="dashscript.js"></script>
</body>
</html>