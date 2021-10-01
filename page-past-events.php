<?php require_once('includes/header.php'); 

$test_value = "slug-one";

?>

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

<div class="container mt-5">

  <!--Section: Content-->
  <section class="dark-grey-text">

    <!-- Section heading -->
    <h5 class="text-left font-weight-bold mb-4 pb-2">Past Events</h5>
    <!-- Section description -->
    <p class="text-left w-responsive mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur veniam.</p>

	<hr>
	
	<div class="row">
	
	<div class="col-md-12 col-lg-8">
	<!-- Grid row -->
    <div class="row align-items-center">

      <!-- Grid column -->
      <div class="col-lg-5 col-xl-4">

        <!-- Featured image -->
        <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
          <img class="img-fluid" src="<?=BASE_URL.'img/image9.jpeg'?>" alt="Sample image">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-7 col-xl-8">

        <!-- Post title -->
        <h4 class="font-weight-bold mb-3"><strong>Title of the Event</strong></h4>
        <!-- Excerpt -->
        <p class="dark-grey-text">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit
          quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus
          et aut officiis cum soluta nobis est eligendi placeat facere aut rerum.</p>
		<p><span class="font-weight-bold">Date:</span> 19/04/2020 To 12/17/2020 </p>
        <!-- Watch button -->
        <button class="btn btn-primary btn-md mx-0 btn-rounded" data-toggle="modal" data-target="#slug-one">Watch</button>
		
		<div class="modal fade" id="slug-one" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <!-- Change class .modal-sm to change the size of the modal -->
			  <div class="modal-dialog modal-lg" role="document">


				<div class="modal-content">
				  <div class="modal-header">
					<h4 class="modal-title w-100 text-center font-weight-bold" id="myModalLabel">Title of the Event</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				  <div class="modal-body">
					<div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
					  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/A3PDXmYoF5U"
						allowfullscreen></iframe>
					</div>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-danger btn-sm mx-auto" data-dismiss="modal">Close</button>
				  </div>
				</div>
			  </div>
			</div>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

    <hr class="my-5">
	
	<!-- Grid row -->
    <div class="row align-items-center">

      <!-- Grid column -->
      <div class="col-lg-5 col-xl-4">

        <!-- Featured image -->
        <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
          <img class="img-fluid" src="<?=BASE_URL.'img/image8.jpg'?>" alt="Sample image">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-7 col-xl-8">

        <!-- Post title -->
        <h4 class="font-weight-bold mb-3"><strong>Title of the Event</strong></h4>
        <!-- Excerpt -->
        <p class="dark-grey-text">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit
          quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus
          et aut officiis cum soluta nobis est eligendi placeat facere aut rerum.</p>
		<p><span class="font-weight-bold">Date:</span> 19/04/2020 To 12/17/2020 </p>
        <!-- Watch button -->
        <button class="btn btn-primary btn-md mx-0 btn-rounded" data-toggle="modal" data-target="#slug-one">Watch</button>
		
		<div class="modal fade" id="slug-one" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <!-- Change class .modal-sm to change the size of the modal -->
			  <div class="modal-dialog modal-lg" role="document">


				<div class="modal-content">
				  <div class="modal-header">
					<h4 class="modal-title w-100 text-center font-weight-bold" id="myModalLabel">Title of the Event</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				  <div class="modal-body">
					<div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
					  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/A3PDXmYoF5U"
						allowfullscreen></iframe>
					</div>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-danger btn-sm mx-auto" data-dismiss="modal">Close</button>
				  </div>
				</div>
			  </div>
			</div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

    <hr class="my-5">
	
	<!-- Grid row -->
    <div class="row align-items-center">

      <!-- Grid column -->
      <div class="col-lg-5 col-xl-4">

        <!-- Featured image -->
        <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
          <img class="img-fluid" src="<?=BASE_URL.'img/image7.jpeg'?>" alt="Sample image">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-7 col-xl-8">

        <!-- Post title -->
        <h4 class="font-weight-bold mb-3"><strong>Title of the Event</strong></h4>
        <!-- Excerpt -->
        <p class="dark-grey-text">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit
          quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus
          et aut officiis cum soluta nobis est eligendi placeat facere aut rerum.</p>
		<p><span class="font-weight-bold">Date:</span> 19/04/2020 To 12/17/2020 </p>
        <!-- Watch button -->
        <button class="btn btn-primary btn-md mx-0 btn-rounded" data-toggle="modal" data-target="#slug-one">Watch</button>
		
		<div class="modal fade" id="slug-one" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <!-- Change class .modal-sm to change the size of the modal -->
			  <div class="modal-dialog modal-lg" role="document">


				<div class="modal-content">
				  <div class="modal-header">
					<h4 class="modal-title w-100 text-center font-weight-bold" id="myModalLabel">Title of the Event</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				  <div class="modal-body">
					<div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
					  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/A3PDXmYoF5U"
						allowfullscreen></iframe>
					</div>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-danger btn-sm mx-auto" data-dismiss="modal">Close</button>
				  </div>
				</div>
			  </div>
			</div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

    <hr class="my-5">
	
	<!-- Grid row -->
    <div class="row align-items-center">

      <!-- Grid column -->
      <div class="col-lg-5 col-xl-4">

        <!-- Featured image -->
        <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
          <img class="img-fluid" src="<?=BASE_URL.'img/image6.jpeg'?>" alt="Sample image">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-7 col-xl-8">

        <!-- Post title -->
        <h4 class="font-weight-bold mb-3"><strong>Title of the Event</strong></h4>
        <!-- Excerpt -->
        <p class="dark-grey-text">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit
          quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus
          et aut officiis cum soluta nobis est eligendi placeat facere aut rerum.</p>
		<p><span class="font-weight-bold">Date:</span> 19/04/2020 To 12/17/2020 </p>
        <!-- Watch button -->
        <button class="btn btn-primary btn-md mx-0 btn-rounded" data-toggle="modal" data-target="#slug-one">Watch</button>
		
		<div class="modal fade" id="slug-one" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <!-- Change class .modal-sm to change the size of the modal -->
			  <div class="modal-dialog modal-lg" role="document">


				<div class="modal-content">
				  <div class="modal-header">
					<h4 class="modal-title w-100 text-center font-weight-bold" id="myModalLabel">Title of the Event</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				  <div class="modal-body">
					<div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
					  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/A3PDXmYoF5U"
						allowfullscreen></iframe>
					</div>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-danger btn-sm mx-auto" data-dismiss="modal">Close</button>
				  </div>
				</div>
			  </div>
			</div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

    <hr class="my-5">
	
	<!-- Grid row -->
    <div class="row align-items-center">

      <!-- Grid column -->
      <div class="col-lg-5 col-xl-4">

        <!-- Featured image -->
        <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
          <img class="img-fluid" src="<?=BASE_URL.'img/image5.jpg'?>" alt="Sample image">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-7 col-xl-8">

        <!-- Post title -->
        <h4 class="font-weight-bold mb-3"><strong>Title of the Event</strong></h4>
        <!-- Excerpt -->
        <p class="dark-grey-text">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit
          quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus
          et aut officiis cum soluta nobis est eligendi placeat facere aut rerum.</p>
		<p><span class="font-weight-bold">Date:</span> 19/04/2020 To 12/17/2020 </p>
        <!-- Watch button -->
        <button class="btn btn-primary btn-md mx-0 btn-rounded" data-toggle="modal" data-target="#slug-one">Watch</button>
		
		<div class="modal fade" id="slug-one" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <!-- Change class .modal-sm to change the size of the modal -->
			  <div class="modal-dialog modal-lg" role="document">


				<div class="modal-content">
				  <div class="modal-header">
					<h4 class="modal-title w-100 text-center font-weight-bold" id="myModalLabel">Title of the Event</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				  <div class="modal-body">
					<div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
					  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/A3PDXmYoF5U"
						allowfullscreen></iframe>
					</div>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-danger btn-sm mx-auto" data-dismiss="modal">Close</button>
				  </div>
				</div>
			  </div>
			</div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

    <hr class="my-5">
	
	<!-- Grid row -->
    <div class="row align-items-center">

      <!-- Grid column -->
      <div class="col-lg-5 col-xl-4">

        <!-- Featured image -->
        <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
          <img class="img-fluid" src="<?=BASE_URL.'img/image4.jpg'?>" alt="Sample image">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-7 col-xl-8">

        <!-- Post title -->
        <h4 class="font-weight-bold mb-3"><strong>Title of the Event</strong></h4>
        <!-- Excerpt -->
        <p class="dark-grey-text">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit
          quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus
          et aut officiis cum soluta nobis est eligendi placeat facere aut rerum.</p>
		<p><span class="font-weight-bold">Date:</span> 19/04/2020 To 12/17/2020 </p>
        <!-- Watch button -->
        <button class="btn btn-primary btn-md mx-0 btn-rounded" data-toggle="modal" data-target="#slug-one">Watch</button>
		
		<div class="modal fade" id="slug-one" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <!-- Change class .modal-sm to change the size of the modal -->
			  <div class="modal-dialog modal-lg" role="document">


				<div class="modal-content">
				  <div class="modal-header">
					<h4 class="modal-title w-100 text-center font-weight-bold" id="myModalLabel">Title of the Event</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				  <div class="modal-body">
					<div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
					  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/A3PDXmYoF5U"
						allowfullscreen></iframe>
					</div>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-danger btn-sm mx-auto" data-dismiss="modal">Close</button>
				  </div>
				</div>
			  </div>
			</div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->
	
	<hr class="my-5">
	
	<div class="col mt-5 pt-1 mb-5">
		<!--Pagination-->
      <nav class="d-flex justify-content-center wow fadeIn">
        <ul class="pagination pg-blue">

          <!--Arrow left-->
          <li class="page-item disabled">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
              <span class="sr-only">Previous</span>
            </a>
          </li>

          <li class="page-item active">
            <a class="page-link" href="#">1
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">2</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">3</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">4</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">5</a>
          </li>

          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
              <span class="sr-only">Next</span>
            </a>
          </li>
        </ul>
      </nav>
      <!--Pagination-->
	</div>
	
	</div>
	
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
	
	</div>

  </section>
  <!--Section: Content-->


</div>

<?php require_once('includes/footer.php'); ?>