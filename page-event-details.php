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

<!--Main Layout-->
  <main>

    <div class="container">

      <!--Section: Blog v.4-->
      <section class="section mt-5 pb-3 wow fadeIn">

        <!--Grid row-->
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <!-- Card -->
            <div class="card card-cascade wider reverse">

              <!-- Card image -->
              <div class="view view-cascade overlay">
                <img class="card-img-top" src="<?=BASE_URL.'img/image3.jpg'?>" alt="Card image cap">
                <a href="#!">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

              <!--Post data-->
              <div class="card-body card-body-cascade text-center">
                <h2><a><strong>This is title of the webinar</strong></a></h2>
                <p>Written by <a>Abby Madison</a>, 26/08/2016</p>

                <!--Social shares-->
                <div class="social-counters ">

                  <!--Facebook-->
                  <a class="btn btn-sm btn-outline-primary">
                    <i class="fab fa-facebook-f left "></i>
                    <span class="clearfix d-none d-md-block">Facebook</span>
                  </a>

                  <!--Twitter-->
                  <a class="btn btn-sm btn-outline-primary">
                    <i class="fab fa-twitter left "></i>
                    <span class="clearfix d-none d-md-block">Twitter</span>
                  </a>

                  <!--LinkedIn-->
                  <a class="btn btn-sm btn-outline-primary">
                    <i class="fab fa-linkedin-in left "></i>
                    <span class="clearfix d-none d-md-block">LinkedIn</span>
                  </a>

                </div>
                <!--Social shares-->

              </div>
              <!--Post data-->
            </div>

            <!--Excerpt-->
            <div class="excerpt mt-5 wow fadeIn mb-4" data-wow-delay="0.3s">
			
			  <p><span class="font-weight-bold">Date: </span>19/04/2020 09:00 EAT To 12/17/2020 to 15:00 EAT</p>
			  <p><span class="font-weight-bold">Where: </span>Online</p>
			  <p><span class="font-weight-bold">Pricing: </span>Free | Paid</p>
			  <p><span class="font-weight-bold">Charge: </span>KES 12,000</p>
			  <br>
			  
              <h5><a><strong>This is title of the Webinar</strong></a></h5>
			  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate
                non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum
                et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.
              </p>

			  <h5><a><strong>Learning Objectives</strong></a></h5>
              <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod
                maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus
                autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates
                repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus,
                ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus.</p>
				<br>
				
				<h5><a><strong>Sponsors</strong></a></h5>
				<div class="row">
					<div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3">
						<img class="card-img-top" src="<?=BASE_ASSETS_IMG_URL.'client-1.png'?>" alt="Card image cap">
					</div>
					<div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3">
						<img class="card-img-top" src="<?=BASE_ASSETS_IMG_URL.'client-2.png'?>" alt="Card image cap">
					</div>
					<div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3">
						<img class="card-img-top" src="<?=BASE_ASSETS_IMG_URL.'client-3.png'?>" alt="Card image cap">
					</div>
				</div>
				
				<br>
				<p><a href="" class="btn btn-success">REGISTER FOR THIS EVENT</a></p>

            </div>
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
		  
        </div>
        <!--Grid row-->

      </section>
      <!--Section: Blog v.4-->

      <hr class="mb-5 mt-4">

    </div>

  </main>
  <!--Main Layout-->

<?php require_once('includes/footer.php'); ?>