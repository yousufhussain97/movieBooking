<?php 
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- font awesome links -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/slimselect.css">
	<link rel="stylesheet" href="css/admin.css">

	<!-- Icon font -->
	<link rel="stylesheet" href="webfont/tabler-icons.min.css">

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
			<i class="fa-solid fa-right-from-bracket"></i>
			</button>
		</div>
		<!-- end sidebar user -->

		<!-- sidebar nav -->
		<div class="sidebar__nav-wrap">
			<ul class="sidebar__nav">
				<li class="sidebar__nav-item">
					<a href="index.html" class="sidebar__nav-link"><i class="fa-solid fa-chart-line"></i> <span>Dashboard</span></a>
				</li>

				<li class="sidebar__nav-item">
					<a href="catalog.html" class="sidebar__nav-link sidebar__nav-link"><i class="fa-solid fa-video"></i> <span>Catalog</span></a>
				</li>
				<li class="sidebar__nav-item">
					<a href="catagory.php" class="sidebar__nav-link sidebar__nav-link--active"><i class="fa-solid fa-film"></i> <span>Cinema Catagory</span></a>
				</li>

				<li class="sidebar__nav-item">
					<a href="users.html" class="sidebar__nav-link"><i class="fa-solid fa-users"></i> <span>Users</span></a>
				</li>

				<li class="sidebar__nav-item">
					<a href="comments.html" class="sidebar__nav-link"><i class="fa-regular fa-comments"></i><span>Comments</span></a>
				</li>

				<li class="sidebar__nav-item">
					<a href="reviews.html" class="sidebar__nav-link"><i class="fa-solid fa-comments"></i> <span>Reviews</span></a>
				</li>

				<li class="sidebar__nav-item">
					<a href="settings.html" class="sidebar__nav-link"><i class="fa-solid fa-gears"></i><span>Settings</span></a>
				</li>

				<!-- dropdown -->
				<li class="sidebar__nav-item">
					<a class="sidebar__nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-regular fa-file-lines"></i> <span>Pages</span> <i class="ti ti-chevron-down"></i></a>

					<ul class="dropdown-menu sidebar__dropdown-menu">
						<li><a href="add-item.php">Add item</a></li>
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
						<h2>Movie Category</h2>

						<span class="main__title-stat">14,452 Total</span>

						<div class="main__title-wrap">
							<a href="add-cinema.php" class="main__title-link main__title-link--wrap">Add item</a>

							<select class="filter__select" name="sort" id="filter__sort">
								<option value="0">Date created</option>
								<option value="1">Rating</option>
								<option value="2">Views</option>
							</select>

							<!-- search -->
							<form action="#" class="main__title-form">
								<input type="text" placeholder="Find movie / tv series..">
								<button type="button">
								<i class="fa-solid fa-magnifying-glass"></i>
								</button>
							</form>
							<!-- end search -->
						</div>
					</div>
				</div>
				<!-- end main title -->

				<!-- items -->
				<div class="col-12">
					<div class="catalog catalog--1">
						<table class="catalog__table">
							<thead>
								<tr>
									<th>ID</th>
									<th>CINEMA</th>
									<th>SCREEN</th>
									<th>PRICE</th>
									<th>SHOW TIME</th>
									<th>DATE</th>
									<th>MOVIE NAME</th>
								</tr>
							</thead>

							<tbody>
								<?php
								include("connect.php");
								$query="SELECT * FROM `categories`";
								$result=mysqli_query($conn,$query);
								while($row=mysqli_fetch_assoc(result: $result)){?>
								?>
								<tr>
									<td>
										<div class="catalog__text"><?php echo $row['ct_id']?></div>
									</td>
									<td>
										<div class="catalog__text"><a href="#"><?php echo $row['ct_cinema']?></a></div>
									</td>
									<td>
										<div class="catalog__text">
										<i class="fa-solid fa-vr-cardboard" style="margin-right: 5px;"></i>
											<?php echo $row['ct_screen']?>
										</div>
									</td>

									<td>
										<div class="catalog__text"><?php echo $row['ct_price'], " PKR"?></div>
									</td>
									<td>
										<div class="catalog__text"><?php echo $row['ct_showtime']?></div>
									</td>
									<td>
										<div class="catalog__text catalog__text--green"><?php echo $row['ct_date']?></div>
									</td>
									<td>
										<div class="catalog__text"><?php echo $row['ct_movname']?></div>
									</td>
										<td>
											<div class="catalog__btns">
												<!-- Delete Button with trash icon -->
												<button type="button" data-bs-toggle="modal" class="catalog__btn catalog__btn--delete" data-bs-target="#modal-delete">
												<i class="fa-solid fa-trash-arrow-up"></i>
												</button>
											</div>
										</td>
									<?php 
									}
									?>
									
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- end items -->

				<!-- paginator -->
				<div class="col-12">
					<div class="main__paginator">
						<!-- amount -->
						<span class="main__paginator-pages">10 of 169</span>
						<!-- end amount -->

						<ul class="main__paginator-list">
							<li>
								<a href="#">
									<i class="ti ti-chevron-left"></i>
									<span>Prev</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span>Next</span>
									<i class="ti ti-chevron-right"></i>
								</a>
							</li>
						</ul>

						<ul class="paginator">
							<li class="paginator__item paginator__item--prev">
								<a href="#"><i class="fa-solid fa-forward"></i></a>
							</li>
							<li class="paginator__item"><a href="#">1</a></li>
							<li class="paginator__item paginator__item--active"><a href="#">2</a></li>
							<li class="paginator__item"><a href="#">3</a></li>
							<li class="paginator__item"><a href="#">4</a></li>
							<li class="paginator__item"><span>...</span></li>
							<li class="paginator__item"><a href="#">29</a></li>
							<li class="paginator__item"><a href="#">30</a></li>
							<li class="paginator__item paginator__item--next">
								<a href="#"><i class="fa-solid fa-backward"></i></a>
							</li>
						</ul>
					</div>
				</div>
				<!-- end paginator -->
			</div>
		</div>
	</main>
	<!-- end main content -->

	<!-- status modal -->
	<div class="modal fade" id="modal-status" tabindex="-1" aria-labelledby="modal-status" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal__content">
					<form action="#" class="modal__form">
						<h4 class="modal__title">Status change</h4>

						<p class="modal__text">Are you sure about immediately change status?</p>

						<div class="modal__btns">
							<button class="modal__btn modal__btn--apply" type="button"><span>Apply</span></button>
							<button class="modal__btn modal__btn--dismiss" type="button" data-bs-dismiss="modal" aria-label="Close"><span>Dismiss</span></button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- end status modal -->

	<!-- delete modal -->
	<div class="modal fade" id="modal-delete" tabindex="-1" aria-labelledby="modal-delete" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal__content">
					<form action="#" class="modal__form">
						<h4 class="modal__title">Item delete</h4>

						<p class="modal__text">Are you sure to permanently delete this item?</p>

						<div class="modal__btns">
							<button class="modal__btn modal__btn--apply" type="button"><span>Delete</span></button>
							<button class="modal__btn modal__btn--dismiss" type="button" data-bs-dismiss="modal" aria-label="Close"><span>Dismiss</span></button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- end delete modal -->

	<!-- JS -->
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/slimselect.min.js"></script>
	<script src="js/smooth-scrollbar.js"></script>
	<script src="js/admin.js"></script>
</body>
</html>