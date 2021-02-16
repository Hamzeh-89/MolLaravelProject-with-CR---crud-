
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="au theme template">
	<meta name="author" content="Hau Nguyen">
	<meta name="keywords" content="au theme template">

	<!-- Title Page-->
	<title>MOL Complaints And Reports Dashboard</title>

	<!-- Fontfaces CSS-->
	<link href="theme/css/font-face.css" rel="stylesheet" media="all">
	<link href="theme/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
	<link href="theme/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
	<link href="theme/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

	<!-- Bootstrap CSS-->
	<link href="theme/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

	<!-- Vendor CSS-->
	<link href="theme/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
	<link href="theme/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
	<link href="theme/vendor/wow/animate.css" rel="stylesheet" media="all">
	<link href="theme/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
	<link href="theme/vendor/slick/slick.css" rel="stylesheet" media="all">
	<link href="theme/vendor/select2/select2.min.css" rel="stylesheet" media="all">
	<link href="theme/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

	<!-- Main CSS-->
	<link href="theme/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
	<div class="page-wrapper">
		<!-- HEADER MOBILE-->
		<header class="header-mobile d-block d-lg-none">
			<div class="header-mobile__bar">
				<div class="container-fluid">
					<div class="header-mobile-inner">
						<a class="logo" href="index.html">
							<img src="theme/images/icon/mollogo21.png" alt="MOL" />
						</a>
						<button class="hamburger hamburger--slider" type="button">
							<span class="hamburger-box">
								<span class="hamburger-inner"></span>
							</span>
						</button>
					</div>
				</div>
			</div>

		</header>
		<!-- END HEADER MOBILE-->

		<!-- MENU SIDEBAR-->
		<aside class="menu-sidebar d-none d-lg-block">
			<div class="logo">
				<a href="#">
					<img src="theme/images/icon/mollogo21.png" alt="MOL" />
				</a>
			</div>
			<div class="menu-sidebar__content js-scrollbar1">
				<nav class="navbar-sidebar">
					<ul class="list-unstyled navbar__list">

						<li>
							<a class="js-arrow" href="manage_admin">
								<i class="fas fa-copy"></i>Manage Admin</a>
							</li>
							<li>
								<a class="js-arrow" href="manage_citizen">
									<i class="fas fa-copy"></i>Manage Citizen</a>
								</li>

								<li>
									<a class="js-arrow" href="#"><i class="fas fa-copy"></i>Manage Cases</a>
									<ul class="list-unstyled navbar__sub-list js-sub-list">

										<a class="js-arrow" href="manage_cases"><i class="fas fa-desktop"></i>Add Cases</a>
										<ul class="list-unstyled navbar__sub-list js-sub-list"></ul> 

										<a class="js-arrow" href="listofcases.php"><i class="fas fa-desktop"></i>List Of Cases</a>
										<ul class="list-unstyled navbar__sub-list js-sub-list"></ul>
									</ul>
								</li>

							</ul>

						</div>
					</aside>
					<!-- END MENU SIDEBAR-->

					<!-- PAGE CONTAINER-->
					<div class="page-container">
						<!-- HEADER DESKTOP-->
						<header class="header-desktop">
							<div class="section__content section__content--p30">
								<div class="container-fluid">
									<div class="header-wrap">
										<form class="form-header" action="" method="POST">
											
										</form>
										<div class="header-button">

											<div class="account-wrap">
												<div class="account-item clearfix js-item-menu">
													<div class="image">
														<img src="" alt="" />
													</div>
													<div class="content"> 
														<a class="js-acc-btn" href="#">

														</a>
													</div>
													<div class="account-dropdown js-dropdown">
														<div class="info clearfix">
															<div class="image">
																<a href="#">
																	<img src="" alt="" />
																</a>
															</div>
															<div class="content">
																<h5 class="name">
																	<a href="#">
																	</a>
																</h5>
																<span class="email">
																</span>
															</div>
														</div>

														<div class="account-dropdown__footer">
															<a href="logout.php">
																<i class="zmdi zmdi-power"></i>Logout</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</header>
							<!-- HEADER DESKTOP-->

							<!-- MAIN CONTENT-->
							<div class="main-content">
								<div class="section__content section__content--p30">
									<div class="container-fluid">
										<div class="row">
											@yield('manage_admin')
											@yield('manage_citizen')
											@yield('manage_cases')
											</div>
											
															
															<div class="row">
																<div class="col-md-12">
																	<div class="copyright">
			<p>Copyright © 2021 MOL. All rights reserved. Template by <a href="http://www.mol.gov.jo/Default/Ar">Ministry Of Labor</a>.</p>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- END MAIN CONTENT-->
												<!-- END PAGE CONTAINER-->
											</div>

										

										<!-- Jquery JS-->
										<script src="theme/vendor/jquery-3.2.1.min.js"></script>
										<!-- Bootstrap JS-->
										<script src="theme/vendor/bootstrap-4.1/popper.min.js"></script>
										<script src="theme/vendor/bootstrap-4.1/bootstrap.min.js"></script>
										<!-- Vendor JS       -->
										<script src="theme/vendor/slick/slick.min.js"></script>
										<script src="theme/vendor/wow/wow.min.js"></script>
										<script src="theme/vendor/animsition/animsition.min.js"></script>
										<script src="theme/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"> </script>
										<script src="theme/vendor/counter-up/jquery.waypoints.min.js"></script>
										<script src="theme/vendor/counter-up/jquery.counterup.min.js"></script>
										<script src="theme/vendor/circle-progress/circle-progress.min.js"></script>
										<script src="theme/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
										<script src="theme/vendor/chartjs/Chart.bundle.min.js"></script>
										<script src="theme/vendor/select2/select2.min.js"></script>

										<!-- Main JS-->
										<script src="theme/js/main.js"></script>

									</body>

									</html>
									<!-- end document-->
