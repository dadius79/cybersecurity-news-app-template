<?php
	require_once('files/cyberConfig.inc.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Cybersecurity</title>
  <!-- MDB icon -->
  <!--<link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">-->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="<?=BASE_URL.'css/bootstrap.min.css'?>">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="<?=BASE_URL.'css/mdb.min.css'?>">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="<?=BASE_URL.'css/style.css'?>">
</head>
<body>

  <!-- Start your project here-->  
  <!--Navbar-->
	<nav class="navbar fixed-top navbar-expand-lg navbar-light grey lighten-3 d-block">

	  <div class="container">

		<!-- Collapse button -->
		<button class="navbar-toggler large-screen-display" type="button" data-toggle="collapse" data-target="#basicExampleNav"
		  aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>

		<!-- Collapsible content -->
		<div class="collapse navbar-collapse mb-1 large-screen-display" id="basicExampleNav">
		  
		  <a class="navbar-brand pt-0 pb-1 font-weight-bold" href="<?=BASE_URL?>">CyberSecurity</a>
		  
		  <ul class="navbar-nav ml-auto nav-flex-icons">
			<li class="nav-item"><a href="#!" class="nav-link waves-effect"><span class="badge red z-depth-1 mr-1"> 2 </span><i id="navbar-static-cart" alt="Cart" class="fas fa-shopping-cart"></i><span class="sr-only"> Cart </span></a></li>

			<li class="nav-item">
			  <a class="nav-link font-weight-normal" href="#!"><i id="navbar-static-cart" alt="Cart" class="fas fa-search"></i></a>
			</li>
		  </ul>

		</div>
		<!-- Collapsible content -->

	  </div>
	  
	  <hr class="w-100 mt-0">
	  
	  <div class="container pb-2">

		<!-- Collapse button -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav1"
		  aria-controls="basicExampleNav1" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>

		<!-- Collapsible content -->
		<div class="collapse navbar-collapse pt-1" id="basicExampleNav1">

		  <!-- Links -->
		  <ul class="navbar-nav mr-auto text-capitalize font-weight-normal">
			<li class="nav-item">
			  <a class="nav-link text-muted" href="<?=BASE_URL.'category/'?>">News</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link text-muted" href="<?=BASE_URL.'category/'?>">Columns</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link text-muted" href="<?=BASE_URL.'category/'?>">Management</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link text-muted" href="<?=BASE_URL.'category/'?>">Physical</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link text-muted" href="<?=BASE_URL.'category/'?>">Cyber</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link text-muted" href="<?=BASE_URL.'category/'?>">Sectors</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link text-muted" href="<?=BASE_URL.'category/'?>">Exclusives</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link text-muted" href="<?=BASE_URL.'gallery/'?>">Gallery</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link text-muted" href="<?=BASE_URL.'store/'?>">Store</a>
			</li>
			<li class="nav-item dropdown">
			  <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
				aria-haspopup="true" aria-expanded="false"><span class="d-none d-xl-inline-block ml-1">Tools</span></a>
			  <div class="dropdown-menu dropdown-dark dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
				<a class="dropdown-item" href="#">Action</a>
				<a class="dropdown-item" href="#">Another action</a>
				<a class="dropdown-item" href="#">Something else here</a>
			  </div>
			</li>
			<li class="nav-item">
			  <a class="nav-link text-muted" href="#">Contact</a>
			</li>

		  </ul>
		  <!-- Links -->
		  
		  <ul class="navbar-nav ml-auto nav-flex-icons" style="display:none;">
			<li class="nav-item"><a href="#!" class="nav-link waves-effect"><span class="badge red z-depth-1 mr-1"> 2 </span><i id="navbar-static-cart" alt="Cart" class="fas fa-shopping-cart"></i><span class="sr-only"> Cart </span></a></li>

			<li class="nav-item">
			  <a class="nav-link font-weight-normal" href="#!"><i id="navbar-static-cart" alt="Cart" class="fas fa-search"></i></a>
			</li>
		  </ul>

		</div>
		<!-- Collapsible content -->

	  </div>

	</nav>
	<!--/.Navbar-->