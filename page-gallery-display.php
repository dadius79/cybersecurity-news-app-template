<?php require_once('includes/header.php'); ?>

	<div class="container mt-3 pt-0 mb-5 pb-4">
	</div>
	
	 <?php
		echo'<div class="container mt-3 mb-5">
		  <section style="background-image: url(\''.BASE_ASSETS_IMG_URL.'bannerimage.jpg\'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
			
			<div class="mask rgba-black-strong py-1">

			  <div class="container text-center my-1">

				<h3 class="font-weight-bold text-center text-white pb-1">Ad Banner</h3>
				<p class="lead text-center text-white pt-1 mb-3">Add Banner Text.</p>
			  </div>
			</div>
		  </section>
		  
		</div>';
	?>
	 
	<div class="container mt-5 mb-5 pb-4">
	    <section>
			<div class="row">
				<div class="col-md-12 col-lg-8 mb-5 pb-1">
					<!--Carousel Wrapper-->
					<div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-interval="false" data-ride="carousel">
						<!--Slides-->
						<div class="carousel-inner" role="listbox">
							<div class="carousel-item active">
								<img class="d-block w-100" src="<?=BASE_URL.'img/camera.jpg'?>" alt="First slide">
								<div class="carousel-caption d-block d-sm-block">
									<h5 class="text-muted">Headline of Image</h5>
									<p class="text-muted">This is some text used to describe the image</p>
								</div>
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="<?=BASE_URL.'img/laptop.jpg'?>" alt="Second slide">
								<div class="carousel-caption d-block d-sm-block">
									<h5 class="text-muted">Headline of Image</h5>
									<p class="text-muted">This is some text used to describe the image</p>
								</div>
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="<?=BASE_URL.'img/smartphone.jpeg'?>" alt="Third slide">
								<div class="carousel-caption d-block d-sm-block">
									<h5 class="text-muted">Headline of Image</h5>
									<p class="text-muted">This is some text used to describe the image</p>
								</div>
							</div>
						</div>
						<!--/.Slides-->
						<!--Controls-->
						<a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
						<!--/.Controls-->
						<ol class="carousel-indicators">
							<li data-target="#carousel-thumb" data-slide-to="0" class="active"> <img class="d-block w-100" src="<?=BASE_URL.'img/camera.jpg'?>" class="img-fluid"></li>
							<li data-target="#carousel-thumb" data-slide-to="1"><img class="d-block w-100" src="<?=BASE_URL.'img/laptop.jpg'?>" class="img-fluid"></li>
							<li data-target="#carousel-thumb" data-slide-to="2"><img class="d-block w-100" src="<?=BASE_URL.'img/smartphone.jpeg'?>" class="img-fluid"></li>
						</ol>
					</div>
					<!--/.Carousel Wrapper-->
				</div>
				
			<!--side section-->
			<div class="col-md-12 col-lg-4 mb-4">
				<!-- Section -->
			<?php
			  echo '<section class="mb-4" style="background-image: url(\''.BASE_ASSETS_IMG_URL.'bannerimage.jpg\'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
				
				<div class="mask rgba-black-strong py-1">

				  <div class="container text-center my-1">

					<h3 class="font-weight-bold text-center text-white pb-2">News and Updates</h3>
					<p class="lead text-center text-white pt-2 mb-5">Subscribe to our newsletter and receive the latest news
					  from C-Suite.</p>

					<form class="input-grey mb-5" action="" method="post" target="_blank">
					  <div class="form-row">
						<div class="col-md-12 mx-auto mb-2">
						  <div class="input-group input-group-lg z-depth-1">
							<div class="input-group-prepend">
							  <span class="input-group-text rgba-white-light border-0"><i class="fa fa-envelope text-white"></i></span>
							</div>
							<input type="email" name="EMAIL" class="form-control form-control-lg rgba-white-light text-white border-0 z-depth-0" placeholder="Email Address">
						  </div>
						</div>

						<div class="col-md-12 mx-auto">
						  <button class="btn btn-sm btn-primary">Subscribe</button>
						</div>
					  </div>
					</form>
				  </div>

				</div>

			  </section>';
			  ?>
			  <!-- Section -->
			  
			  <?php
			  echo '<div class="row mb-4">
					  <div class="col-lg-8 col-md-9 mb-lg-0 mb-4 mx-auto">

						  <section style="background-image: url(\''.BASE_ASSETS_IMG_URL.'image11.jpeg\'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
							
							<div class="mask rgba-black-strong py-1">

							  <div class="container text-center my-1">

								<h3 class="font-weight-bold text-center white-text pb-1">Ad Banner</h3>
								<p class="lead text-center white-text pt-1 mb-3">Add Banner Text.</p>
							  </div>
							</div>
						  </section>

					  </div>
				</div>';
				?>
				
				<div class="row mb-4">
					<!-- Grid column -->
					  <div class="col-lg-12 col-md-12 mb-lg-0 mb-4">

						<!-- Card -->
						<div class="card hoverable">

						  <!-- Card image -->
						  <img class="card-img-top" src="<?=BASE_URL.'img/image12.jpeg'?>" alt="Card image cap">

						  <!-- Card content -->
						  <div class="card-body">

							<!-- Title -->
							<a href="<?=BASE_URL.'article/'?>" class="text-primary font-weight-bold">We relocated to a new garage</a>
							<!-- Text -->
							<p class="card-title text-muted font-small mt-3 mb-2">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title.</p>								
						  </div>

						</div>
						<!-- Card -->

					  </div>
					  <!-- Grid column -->
				</div>
				<!--end row-->
				
				<div class="col mt-2 mb-4">
					<h5 class="text-center">Top Stories</h5>
				</div>
				
				<!-- Small news -->
				<div class="single-news mb-4">

				  <!-- Grid row -->
				  <div class="row">

					<!-- Grid column -->
					<div class="col-md-3">

					  <!--Image-->
					  <div class="view overlay rounded z-depth-1 mb-4">
						<img class="img-fluid" src="<?=BASE_URL.'img/image3.jpg'?>" alt="Sample image">
						<a>
						  <div class="mask rgba-white-slight"></div>
						</a>
					  </div>

					</div>
					<!-- Grid column -->

					<!-- Grid column -->
					<div class="col-md-9">

					  <!-- Excerpt -->
					  <p class="font-weight-bold text-primary"><a href="<?=BASE_URL.'article/'?>">Article Headline</a></p>
					  <div class="d-flex justify-content-between">
						<div class="col-11 text-truncate pl-0 mb-3">
						  <a href="<?=BASE_URL.'article/'?>" class="dark-grey-text">At vero eos et accusamus et iusto odio dignissimos
							ducimus qui blanditiis</a>
						</div>
						<a><i class="fas fa-angle-double-right"></i></a>
					  </div>

					</div>
					<!-- Grid column -->

				  </div>
				  <!-- Grid row -->

				</div>
				<!-- Small news -->

				<!-- Small news -->
				<div class="single-news mb-4">

				  <!-- Grid row -->
				  <div class="row">

					<!-- Grid column -->
					<div class="col-md-3">

					  <!--Image-->
					  <div class="view overlay rounded z-depth-1 mb-4">
						<img class="img-fluid" src="<?=BASE_URL.'img/image2.jpg'?>"
						  alt="Sample image">
						<a>
						  <div class="mask rgba-white-slight"></div>
						</a>
					  </div>

					</div>
					<!-- Grid column -->

					<!-- Grid column -->
					<div class="col-md-9">

					  <!-- Excerpt -->
					  <p class="font-weight-bold text-primary"><a href="<?=BASE_URL.'article/'?>">Article Headline</a></p>
					  <div class="d-flex justify-content-between">
						<div class="col-11 text-truncate pl-0 mb-3">
						  <a href="<?=BASE_URL.'article/'?>" class="dark-grey-text">Itaque earum rerum hic tenetur a sapiente delectus</a>
						</div>
						<a><i class="fas fa-angle-double-right"></i></a>
					  </div>

					</div>
					<!-- Grid column -->

				  </div>
				  <!-- Grid row -->

				</div>
				<!-- Small news -->

				<!-- Small news -->
				<div class="single-news mb-4">

				  <!-- Grid row -->
				  <div class="row">

					<!-- Grid column -->
					<div class="col-md-3">

					  <!--Image-->
					  <div class="view overlay rounded z-depth-1 mb-4">
						<img class="img-fluid" src="<?=BASE_URL.'img/image1.jpg'?>" alt="Sample image">
						<a>
						  <div class="mask rgba-white-slight"></div>
						</a>
					  </div>

					</div>
					<!-- Grid column -->

					<!-- Grid column -->
					<div class="col-md-9">

					  <!-- Excerpt -->
					  <p class="font-weight-bold text-primary"><a href="<?=BASE_URL.'article/'?>">Article Headline</a></p>
					  <div class="d-flex justify-content-between">
						<div class="col-11 text-truncate pl-0 mb-3">
						  <a href="<?=BASE_URL.'article/'?>" class="dark-grey-text">Soluta nobis est eligendi optio cumque nihil impedit quo
							minus</a>
						</div>
						<a><i class="fas fa-angle-double-right"></i></a>
					  </div>

					</div>
					<!-- Grid column -->

				  </div>
				  <!-- Grid row -->

				</div>
				<!-- Small news -->

				<!-- Small news -->
				<div class="single-news">

				  <!-- Grid row -->
				  <div class="row">

					<!-- Grid column -->
					<div class="col-md-3">

					  <!--Image-->
					  <div class="view overlay rounded z-depth-1 mb-md-0 mb-4">
						<img class="img-fluid" src="<?=BASE_URL.'img/image10.jpeg'?>" alt="Sample image">
						<a>
						  <div class="mask rgba-white-slight"></div>
						</a>
					  </div>

					</div>
					<!-- Grid column -->

					<!-- Grid column -->
					<div class="col-md-9">

					  <!-- Excerpt -->
					  <p class="font-weight-bold text-primary"><a href="<?=BASE_URL.'article/'?>">Article Headline</a></p>
					  <div class="d-flex justify-content-between">
						<div class="col-11 text-truncate pl-0 mb-lg-3">
						  <a href="<?=BASE_URL.'article/'?>" class="dark-grey-text">Duis aute irure dolor in reprehenderit in voluptate</a>
						</div>
						<a><i class="fas fa-angle-double-right"></i></a>
					  </div>

					</div>
					<!-- Grid column -->

				  </div>
				  <!-- Grid row -->

				</div>
				<!-- Small news -->
				
			</div><!--end col-->
				<!--side section-->
				
		</div><!--end row-->
		</section>
	</div>

<?php require_once('includes/footer.php'); ?>