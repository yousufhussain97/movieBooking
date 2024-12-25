<?php
session_start();
include("../admin/connect.php");

// Check if the form is submitted and process the selected movie
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['movie_name'])) {
    $selectedMovie = $_POST['movie_name'];

    // Query to get cinema details for the selected movie
    $cinemaQuery = "SELECT * FROM categories WHERE ct_movname = '$selectedMovie'";
    $cinemaResult = mysqli_query($conn, $cinemaQuery);
} else {
    // Default empty query (in case no movie is selected yet)
    $cinemaResult = null;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Include your CSS links here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Movie Ticket Booking</title>
    <style>
        .cinema-card {
            background-color: #222;
            color: #fff;
            margin: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }
        .cinema-card .card-header {
            background-color: #333;
            font-weight: bold;
        }
        .cinema-card .list-group-item {
            background-color: #222;
            color: #fff;
            border: none;
        }
        .cinema-card:hover {
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.5);
        }
        .cinema-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
		/* for Seat Booking */
		

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
			text-align: center;
		}
    </style>
</head>
<body>
    <div class="sign section--bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sign__content">
                        <form action="" method="POST">
                            <h3 class="text-center" style="color:white!important; margin:20px; font-weight:bolder; font-size:45px">
                                Book Your Movie Ticket
                            </h3>

                            <!-- Movie Title Dropdown -->
                            <div class="sign__group">
                                <label for="movie_name" style="color:white;">On Screen Movies</label>
                                <select name="movie_name" id="movie_name" class="sign__input" required>
                                    <?php
                                    // Fetch all movies from the database to populate the dropdown
                                    $movieQuery = "SELECT DISTINCT ct_movname FROM categories";
                                    $movieResult = mysqli_query($conn, $movieQuery);
                                    while ($movie = mysqli_fetch_assoc($movieResult)) {
                                        $selected = (isset($selectedMovie) && $selectedMovie == $movie['ct_movname']) ? 'selected' : '';
                                        echo "<option value='{$movie['ct_movname']}' $selected>{$movie['ct_movname']}</option>";
                                    }
                                    ?>
                                </select>
                            </div>

                            <!-- Cinema Details Section -->
                            <?php if ($cinemaResult && mysqli_num_rows($cinemaResult) > 0) { ?>
                                <div class="cinema-container">
                                    <?php while ($row = mysqli_fetch_assoc($cinemaResult)) { ?>
                                        <div class="card cinema-card" style="width: 18rem;">
                                            <div class="card-header">
                                                Cinema: <?php echo $row['ct_cinema']; ?>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    <strong>Available Date:</strong> <?php echo $row['ct_date']; ?>
                                                </li>
                                                <li class="list-group-item">
                                                    <strong>Available Showtime:</strong> <?php echo $row['ct_showtime']; ?>
                                                </li>
                                                <li class="list-group-item">
                                                    <strong>Available Screen:</strong> <?php echo $row['ct_screen']; ?>
                                                </li>
												<li class="list-group-item">
                                                    <strong>Ticket Price :</strong> <?php echo $row['ct_price']; ?>
                                                </li>
                                            </ul>
                                        </div>
                                    <?php } ?>
                                </div>
                            <?php } else { ?>
                                <p style="color:white;">No cinema details available for the selected movie.</p>
                            <?php } ?>

                            <!-- Submit Button -->
                            <button class="sign__btn" type="submit" style="width: 400px;
							margin: 20px 320px 30px 290px;padding: 10px;">
                                <span style="color:orange;">Submit</span>
                            </button>
							<!-- ------- -->
							 <!-- Person Name -->
				<div class="sign__group">
					<input type="text" class="sign__input" placeholder="Your Name" name="usernm">
				</div>
				<!-- Date Selection -->
				<div class="sign__group" >
					<label for="movie-date"style="color:white;">Select Date</label>
					<input type="date" id="movie-date" class="sign__input"  >
				</div>
				<!-- Time Slot Selection -->
				<div class="sign__group">
					<label for="time-slot"style="color:white;">Select Time Slots</label>
						<select id="time-slot" class="sign__input" >
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
					<select id="screen-type" class="sign__input" >
						<option value="2D">2D</option>
						<option value="3D">3D</option>
						<option value="4D">4D</option>
						<option value="VR">VR</option>
					</select>
				</div>
				<!-- Seat Selection Image -->
				<h3 class="text-center" style="color:white!important; margin:20px; 
				font-weight:bolder; font-size:45px">Cinema Seat Plan</h3>
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
						<!-- Booking Button -->
						<button class="sign__btn" type="submit" style="width: 250px;
							margin: 80px 200px 0px -210px;padding: 10px;">
							<a href="ticket.html" style="color:orange;">
							Generate Ticket</a></button>
                        </form>
                    </div>
                </div>
				
				</div>
			</div>
		</div>

    <!-- Include your JavaScript files here -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
