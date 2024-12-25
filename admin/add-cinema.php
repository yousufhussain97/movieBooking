<?php
session_start();
include('connect.php');

if(isset($_POST["pubbtn"])){
	$movname=$_POST['movname'];
	$screen=$_POST['screen'];
	$cinema=$_POST['cinema'];
	$price=$_POST['price'];
	$showtime=$_POST['showtime'];
	$date=$_POST['date'];


	$insert="INSERT INTO `categories`(`ct_cinema`, `ct_screen`, `ct_price`, `ct_showtime`, `ct_date`, `ct_movname`) VALUES ('$cinema','$screen','$price','$showtime','$date','$movname')";
	$run=mysqli_query($conn,$insert);
	if($run){
		header("location:catagory.php");
		
	}
}

?>
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/slimselect.css">
	<link rel="stylesheet" href="css/admin.css">

	<!-- Icon font -->
	<!-- <link rel="stylesheet" href="webfont/tabler-icons.min.css"> -->
	<!-- fontAwesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- Favicons -->
	<link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="icon/favicon-32x32.png">

	<meta name="description" content="Online Movies, TV Shows & Cinema HTML Template">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>HotFlix – Online Movies, TV Shows & Cinema HTML Template</title>
</head>

<body>
	<!-- header -->
	<header class="header">
		<div class="header__content">
			<!-- header logo -->
			<a href="index.html" class="header__logo">
				<img src="img/logo.svg" alt="">
			</a>
			<!-- end header logo -->

			<!-- header menu btn -->
			<button class="header__btn" type="button">
				<span></span>
				<span></span>
				<span></span>
			</button>
			<!-- end header menu btn -->
		</div>
	</header>
	<!-- end header -->

	<!-- sidebar -->
	<div class="sidebar">
		<!-- sidebar logo -->
		<a href="index.html" class="sidebar__logo">
			<img src="img/logo.svg" alt="">
		</a>
		<!-- end sidebar logo -->
		
		<!-- sidebar user -->
		<div class="sidebar__user">
			<div class="sidebar__user-img">
				<img src="img/user.svg" alt="">
			</div>

			<div class="sidebar__user-title">
				<span>Admin</span>
				<p>John Doe</p>
			</div>

			<button class="sidebar__user-btn" type="button">
				<i class="ti ti-logout"></i>
			</button>
		</div>
		<!-- end sidebar user -->

		<!-- sidebar nav -->
		<div class="sidebar__nav-wrap">
			<ul class="sidebar__nav">
				<li class="sidebar__nav-item">
					<a href="index.html" class="sidebar__nav-link"><i class="fa-solid fa-video"></i> <span>Dashboard</span></a>
				</li>

				<li class="sidebar__nav-item">
					<a href="catalog.html" class="sidebar__nav-link"><i class="fa-solid fa-film"></i><span>Catalog</span></a>
				</li>

				<li class="sidebar__nav-item">
					<a href="users.html" class="sidebar__nav-link"><i class="fa-solid fa-users"></i> <span>Users</span></a>
				</li>

				<li class="sidebar__nav-item">
					<a href="comments.html" class="sidebar__nav-link"><i class="fa-solid fa-comments"></i> <span>Comments</span></a>
				</li>

				<li class="sidebar__nav-item">
					<a href="reviews.html" class="sidebar__nav-link"><i class="fa-solid fa-comments"></i> <span>Reviews</span></a>
				</li>

				<li class="sidebar__nav-item">
					<a href="settings.html" class="sidebar__nav-link"><i class="fa-solid fa-gears"></i><span>Settings</span></a>
				</li>

				<!-- dropdown -->
				<li class="sidebar__nav-item">
					<a class="sidebar__nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-regular fa-file-lines"></i><span>Pages</span> <i class="ti ti-chevron-down"></i></a>

					<ul class="dropdown-menu sidebar__dropdown-menu">
						<li><a href="add-item.html">Add item</a></li>
						<li><a href="edit-user.html">Edit user</a></li>
						<li><a href="signin.html">Sign In</a></li>
						<li><a href="signup.html">Sign Up</a></li>
						<li><a href="forgot.html">Forgot password</a></li>
						<li><a href="404.html">404 Page</a></li>
					</ul>
				</li>
				<!-- end dropdown -->

				<li class="sidebar__nav-item">
					<a href="../main/index.html" class="sidebar__nav-link"><i class="fa-solid fa-arrow-left-long"></i><span>Back to HotFlix</span></a>
				</li>
			</ul>
		</div>
		<!-- end sidebar nav -->
		
		<!-- sidebar copyright -->
		<div class="sidebar__copyright">© HOTFLIX, 2019—2024. <br>Create by <a href="https://themeforest.net/user/dmitryvolkov/portfolio" target="_blank">Dmitry Volkov</a></div>
		<!-- end sidebar copyright -->
	</div>
	<!-- end sidebar -->

	<!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<div class="row">
				<!-- main title -->
				<div class="col-12">
					<div class="main__title">
						<h2>Add new item</h2>
					</div>
				</div>
				<!-- end main title -->

				<!-- form -->
				<div class="col-12">
					<form action="#" class="sign__form sign__form--add" method="POST">
						<div class="row">
							<div class="col-12 col-xl-7">
								<div class="row">
									<div class="col-12">
										<div class="sign__group">
											<input type="text" class="sign__input" name="movname"placeholder="Movie Name">
										</div>
									</div>
								</div>
							</div>

							<div class="col-12 col-xl-5">
								<div class="row">
									<div class="col-12 col-md-6">
										<div class="sign__group">
											<select class="sign__selectjs" name="screen" id="sign__quality">
												<option value="3D">3D</option>
												<option value="2D">2D</option>
												<option value="4D">4D</option>
												<option value="VR">VR</option>
											</select>
										</div>
									</div>
									<div class="col-12 col-md-6">
										<div class="sign__group">
											<select class="sign__selectjs" name="cinema" id="sign__quality"style="color:white;">
												<option value="Nuplex">Nuplex</option>
												<option value="Atrium">Atrium</option>
												<option value="Cineplex">Cineplex</option>
												<option value="Capri">Capri</option>
											</select>
										</div>
									</div>
									<div class="col-12 col-md-6">
										<div class="sign__group">
											<input type="text" class="sign__input" name="price" placeholder="Price (i.e. PKR)">
										</div>
									</div>

									<div class="col-12 col-md-6">
										<div class="sign__group">
											<input type="text" class="sign__input" name="showtime"placeholder="Showtime">
										</div>
									</div>

									<div class="col-12 col-md-6">
										<div class="sign__group">
											<input type="text" class="sign__input" name="date" placeholder="Premiere date">
										</div>
									</div>
								<div class="form-group">
									<button type="submit" name="pubbtn" class="btn btn-primary">Publish</button>
									 <div class="submitting"></div>
								</div>
							</div>
												
						</div>
					</form>
				</div>
				<!-- end form -->
			</div>
		</div>
	</main>
	<!-- end main content -->

	<!-- JS -->
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/slimselect.min.js"></script>
	<script src="js/smooth-scrollbar.js"></script>
	<script src="js/admin.js"></script>
</body>

// include('connect.php');

// if(isset($_POST["pubbtn"])){
// 	$movname=$_POST['movname'];
// 	$screen=$_POST['screen'];
// 	$cinema=$_POST['cinema'];
// 	$price=$_POST['price'];
// 	$showtime=$_POST['showtime'];
// 	$date=$_POST['date'];


// 	$insert="INSERT INTO `categories`(`ct_cinema`, `ct_screen`, `ct_price`, `ct_showtime`, `ct_date`, `ct_movname`) VALUES ('$cinema','$screen','$price','$showtime','$date','$movname')";
// 	$run=mysqli_query($conn,$insert);
// 	if($run){
// 		header("location:catagory.php");
		
// 	}
// }

</html>
