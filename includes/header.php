<?php
	require_once('files/cyberConfig.inc.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta property="og:title" content="C-Suite | Cybersecurity News & Consultancy Services" />
  <meta property="og:description" content="We provide comprehensive coverage on cybersecurity and the latest trends and innovations" />
  <meta property="og:image" content="" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?=BASE_URL?>" />
  <meta name="author" content="C-Suite">
  <meta name="description" content="We provide comprehensive coverage on cybersecurity and the latest trends and innovations" />
  <title>C-Suite | Cybersecurity News & Consultancy Services</title>
  <!-- MDB icon -->
  <!--<link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">-->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="<?=BASE_URL.'css/bootstrap.min.css'?>">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="<?=BASE_URL.'css/mdb.min.css'?>">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="<?=BASE_URL.'css/style.css'?>">
  <style type="text/css">
	body.offcanvas-active{
		overflow:hidden;
	}
	.offcanvas-header{ display:none; }

	@media (max-width: 992px) {
	  .offcanvas-header{ display:block; }
	  .navbar-collapse {
		position: fixed;
		top:0; 
		bottom: 0;
		left: 100%;
		width: 100%;
		padding-right: 1rem;
		padding-left: 1rem;
		overflow-y: auto;
		visibility: hidden;
		background-color: black;
		opacity: 96%;
		transition: visibility .2s ease-in-out, transform .2s ease-in-out;
	  }
	  .navbar-collapse.show {
		visibility: visible;
		transform: translateX(-100%);
	  }
	}
	
	.navbar .nav-item .dropdown-menu .dropdown-item:hover{color:black !important; }
	
	@media all and (min-width: 992px) {
		.navbar .nav-item .dropdown-menu{  display:block; opacity: 0;  visibility: hidden; transition:.3s; margin-top:0;  }
		.navbar .nav-item:hover .nav-link{ color: #fff;  }
		.navbar .dropdown-menu.fade-down{ top:80%; transform: rotateX(-75deg); transform-origin: 0% 0%; }
		.navbar .dropdown-menu.fade-up{ top:180%;  }
		.navbar .nav-item:hover .dropdown-menu{ transition: .3s; opacity:1; visibility:visible; top:100%; transform: rotateX(0deg); }
	}
  </style>
  <style>
	.map-container {
        height: 200px;
        position: relative;
      }

      .map-container iframe {
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        position: absolute;
      }
  </style>
</head>
<body>

  <!-- Start your project here-->  
	<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
	  <a class="navbar-brand font-weight-bold" href="<?=BASE_URL?>">C-Suite Africa</a>
	  <button class="navbar-toggler" type="button" data-trigger="#main_nav">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="navbar-collapse" id="main_nav">

	<div class="offcanvas-header mt-3">  
		<button class="btn btn-outline-danger btn-close float-right"><i class="fas fa-times fa-lg"></i></button>
		<h5 class="py-2 text-white">Menu</h5>
	</div>

	<ul class="navbar-nav mx-auto">
		<li class="nav-item dropdown">
			<a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">News</a>
			<ul class="dropdown-menu fade-up bg-dark">
			  <li><a class="dropdown-item text-white" href="<?=BASE_URL.'category/'?>">Category</a></li>
			  <li><a class="dropdown-item text-white" href="<?=BASE_URL.'category/'?>">Category</a></li>
			</ul>
		</li>
		<li class="nav-item dropdown">
			<a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">Management</a>
			<ul class="dropdown-menu fade-up bg-dark">
			  <li><a class="dropdown-item text-white" href="<?=BASE_URL.'category/'?>">Category</a></li>
			  <li><a class="dropdown-item text-white" href="<?=BASE_URL.'category/'?>">Category</a></li>
			</ul>
		</li>
		<li class="nav-item dropdown">
			<a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">Events</a>
			<ul class="dropdown-menu fade-up bg-dark">
			  <li><a class="dropdown-item text-white" href="<?=BASE_URL.'upcoming-webinars/'?>">Upcoming Webinars</a></li>
			  <li><a class="dropdown-item text-white" href="<?=BASE_URL.'past-webinars/'?>">Past Webinars</a></li>
			</ul>
		</li>
		<li class="nav-item"><a class="nav-link" href="<?=BASE_URL.'gallery/'?>">Gallery</a></li>
		<li class="nav-item"><a class="nav-link" href="<?=BASE_URL.'store/'?>">Store</a></li>
		<li class="nav-item dropdown">
			<a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">About Us</a>
			<ul class="dropdown-menu fade-up bg-dark">
			  <li><a class="dropdown-item text-white" href="<?=BASE_URL.'services/'?>">Our Services</a></li>
			  <li><a class="dropdown-item text-white" href="<?=BASE_URL.'contact-us/'?>">Contact Us</a></li>
			</ul>
		</li>
		<li class="nav-item"><a class="nav-link" href="<?=BASE_URL.'advertise/'?>">Advertise</a></li>
	</ul>

	<ul class="navbar-nav ml-auto">
		<form class="form-inline my-1 my-lg-0 align-self-stretch">
            <input
			  style="width: 120px;"
              class="form-control mr-sm-0"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
        </form>
		<li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-facebook"></i></a></li>
		<li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-linkedin"></i></a></li>
		<li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-twitter-square"></i></a></li>
	</ul>
	  </div> <!-- navbar-collapse.// -->
	</nav>