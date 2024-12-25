<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/splide.min.css">
	<link rel="stylesheet" href="css/slimselect.css">
	<link rel="stylesheet" href="css/plyr.css">
	<link rel="stylesheet" href="css/photoswipe.css">
	<link rel="stylesheet" href="css/default-skin.css">
	<link rel="stylesheet" href="css/main.css">

	<!-- New External CSS File -->
	<link rel="stylesheet" href="css/style.css"> <!-- Link to the new CSS file -->

	<!-- Icon font -->
	<link rel="stylesheet" href="webfont/tabler-icons.min.css">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="icon/favicon-32x32.png">

	<meta name="description" content="Online Movie Ticket Booking">
	<meta name="keywords" content="movie, tickets, cinema, online booking">
	<meta name="author" content="Your Name">
	<title>Movie Ticket Booking</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			text-align: center;
		}

		.stage {
			width: 60%;
			margin: 20px auto;
			padding: 10px;
			background-color: #ccc;
			border-radius: 10px;
			font-weight: bold;
		}

		.seats {
			display: grid;
			grid-template-columns: repeat(11, 40px);
			gap: 10px;
			justify-content: center;
			margin-top: 20px;
		}

		.seat {
			width: 40px;
			height: 40px;
			line-height: 40px;
			border-radius: 5px;
			text-align: center;
			cursor: pointer;
			user-select: none;
		}

		.gold {
			background-color: #FFD700;
		}

		.platinum {
			background-color: #00BFFF;
		}

		.box {
			background-color: #8A2BE2;
		}

		.unavailable {
			background-color: #ccc;
			cursor: not-allowed;
		}

		.seat:hover:not(.unavailable) {
			opacity: 0.8;
		}

		.row-label {
			grid-column: 1 / span 11;
			font-weight: bold;
		}
	</style>
</head>

<body>
	<div class="sign section--bg" data-bg="img/bg/section__bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
						<!-- Movie Ticket Booking Form -->
						<form action="#" class="sign__form" method="POST">
							<a href="index.html" class="sign__logo">
								<img src="img/logo.svg" alt="Logo">
							</a>

							<h3 class="text-center"style="color:white!important;margin:20px;font-weight:bolder;font-size:45px">Book Your Movie Ticket</h3>
							<?php
							include("../admin/connect.php");
							$selkt="SELECT * FROM `categories`";
							$reslt=mysqli_query($conn,$selkt);
							if($reslt){
							
							?>

							<!-- Movie Title -->
							<div class="sign__group">
								<label for="time-slot"style="color:white;">On Screen Movies</label>
								<select id="time-slot" class="sign__input" required>
									<?php
									while($rw=mysqli_fetch_assoc(result:$reslt)){ 
									?>
									<option><?php echo $rw['ct_movname'] ?></option>
									<!-- <option value="1:00 PM">1:00 PM</option>
									<option value="4:00 PM">4:00 PM</option>
									<option value="7:00 PM">7:00 PM</option>
									<option value="10:00 PM">10:00 PM</option> -->
									<?php }?>
								</select>
							</div>
							

							<!-- Cinema Details -->
							<div class="card" style="width: 18rem;background-color:black;color:white">
								<div class="card-header">
									Cinema Features
								</div>
								<ul class="list-group list-group-flush" >
								<?php
									while($rw=mysqli_fetch_assoc(result:$reslt)){ 
									?>
									<li class="list-group-item"style="color:white!important;background-color:black!important;"><?php echo "Available in Cinemas: ",$rw['ct_cinema']?></li>
									<li class="list-group-item"style="color:white!important;background-color:black!important;"><?php echo "Available Dates: ",$rw['ct_date']?></li>
									<li class="list-group-item"style="color:white!important;background-color:black!important;"><?php echo "Available Showtimes: ",$rw['ct_showtime']?></li>
									<li class="list-group-item"style="color:white!important;background-color:black!important;"><?php echo "Available Screens: ",$rw['ct_screen']?></li>
									<?php } ?>
								</ul>
								</div>
								<?php }?>
								
							<!-- Person Name -->
							<div class="sign__group">
								<input type="text" class="sign__input" placeholder="Your Name" required name="usernm">
							</div>
							<button class="sign__btn" type="submit" style="width: 250px;
								margin: 20px 10px 20px 10px;padding: 10px;" name="sbbtn">
								<a style="color:orange;">
									Submit</a></button>

							<!-- Date Selection -->
							<div class="sign__group">
								<label for="movie-date"style="color:white;">Select Date</label>
								<input type="date" id="movie-date" class="sign__input" required>
							</div>
							
							
							<div class="sign__group">
								<label for="time-slot"style="color:white;">Available Dates</label>
								<select id="time-slot" class="sign__input" required>
									<option value="10:00 AM">10:00 AM</option>
									<option value="1:00 PM">1:00 PM</option>
									<option value="4:00 PM">4:00 PM</option>
									<option value="7:00 PM">7:00 PM</option>
									<option value="10:00 PM">10:00 PM</option>
								</select>
							</div>

							<!-- Time Slot Selection -->
							<div class="sign__group">
								<label for="time-slot"style="color:white;">Available Time Slots</label>
								<select id="time-slot" class="sign__input" required>
									<option value="10:00 AM">10:00 AM</option>
									<option value="1:00 PM">1:00 PM</option>
									<option value="4:00 PM">4:00 PM</option>
									<option value="7:00 PM">7:00 PM</option>
									<option value="10:00 PM">10:00 PM</option>
								</select>
							</div>

							<!-- Available Screen Type -->
							<div class="sign__group">
								<label for="screen-type"style="color:white;">Available Screen Types</label>
								<select id="screen-type" class="sign__input" required>
									<option value="2D">2D</option>
									<option value="3D">3D</option>
									<option value="4D">4D</option>
									<option value="VR">VR</option>
								</select>
							</div>

							<!-- Seat Selection Image -->
							<title >Cinema Seat Plan</title>

							<h1 style="color:white!important;">Cinema Seat Plan</h1>
							

							<div class="seats">
								<!-- Row A -->
								<div class="row-label"style="color:white;">A</div>
								<div class="seat gold">A1</div>
								<div class="seat gold">A2</div>
								<div class="seat platinum">A3</div>
								<div class="seat platinum">A4</div>
								<div class="seat platinum">A5</div>
								<div class="seat platinum">A6</div>
								<div class="seat platinum">A7</div>
								<div class="seat platinum">A8</div>
								<div class="seat box">A9</div>
								<div class="seat box">A10</div>
								<div class="seat box">A11</div>

								<!-- Row B -->
								<div class="row-label"style="color:white;">B</div>
								<div class="seat gold">B1</div>
								<div class="seat gold">B2</div>
								<div class="seat platinum">B3</div>
								<div class="seat platinum">B4</div>
								<div class="seat platinum">B5</div>
								<div class="seat platinum">B6</div>
								<div class="seat platinum">B7</div>
								<div class="seat box">B8</div>
								<div class="seat box">B9</div>
								<div class="seat unavailable">B10</div>
								<div class="seat unavailable">B11</div>
								<!-- Row C -->

								<div class="row-label" style="color:white;">C</div>
								<span></span><span></span>
								<div class="seat platinum">C1</div>
								<div class="seat platinum">C2</div>
								<div class="seat platinum">C3</div>
								<div class="seat platinum">C4</div>
								<div class="seat platinum">C5</div>
								<div class="seat box">C6</div>
								<div class="seat box">C7</div>
								<!-- Row D -->

								<div class="row-label"style="color:white;">D</div>
								<span></span><span></span><span></span><span></span>
								<div class="seat platinum">D1</div>
								<div class="seat platinum">D2</div>
								<div class="seat platinum">D3</div>



								<!-- Repeat similar structure for other rows -->
								<!-- Booking Button -->
								<button class="sign__btn" type="submit" style="width: 250px;
								margin: 80px 200px 0px -210px;padding: 10px;">
								<a href="ticket.html" style="color:orange;">
									Generate Ticket</a></button>

						</form>
						<!-- End Movie Ticket Booking Form -->
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- JS -->
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/splide.min.js"></script>
	<script src="js/slimselect.min.js"></script>
	<script src="js/smooth-scrollbar.js"></script>
	<script src="js/plyr.min.js"></script>
	<script src="js/photoswipe.min.js"></script>
	<script src="js/photoswipe-ui-default.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>