<!-- Footer -->
	<footer class="page-footer font-small grey lighten-3 pt-4">
	  <!-- Footer Links -->
	  <div class="container-fluid text-center text-md-left text-muted">
		<!-- Grid row -->
		<div class="row">
		  <!-- Grid column -->
		  <div class="col-md-6 mt-md-0 mt-3">
			<!-- Content -->
			<h5 class="text-capitalize font-weight-bold">C-Suite Africa</h5>
			<p><a class="text-muted" href="#"><i class="fab fa-lg fa-facebook"></i></a> &nbsp 
			<a class="text-muted" href="#"><i class="fab fa-lg fa-linkedin"></i></a> &nbsp 
			<a class="text-muted" href="#"><i class="fab fa-lg fa-twitter-square"></i></a></p>
		  </div>
		  <!-- Grid column -->
		  <hr class="clearfix w-100 d-md-none pb-3">
		  <!-- Grid column -->
		  <div class="col-md-3 mb-md-0 mb-3">
			<!-- Links -->
			<h5 class="text-uppercase">Resources</h5>
			<ul class="list-unstyled">
			  <li>
				<a class="grey-text" href="#">News</a>
			  </li>
			  <li>
				<a class="grey-text" href="#">Management</a>
			  </li>
			  <li>
				<a class="grey-text" href="#">Store</a>
			  </li>
			  <li>
				<a class="grey-text" href="#">Gallery</a>
			  </li>
			</ul>

		  </div>
		  <!-- Grid column -->

		  <!-- Grid column -->
		  <div class="col-md-3 mb-md-0 mb-3">

			<!-- Links -->
			<h5 class="text-uppercase">About</h5>

			<ul class="list-unstyled">
			  <li>
				<a class="grey-text" href="<?=BASE_URL.'services/'?>">Our Services</a>
			  </li>
			  <li>
				<a class="grey-text" href="<?=BASE_URL.'advertise/'?>">Advertise</a>
			  </li>
			  <li>
				<a class="grey-text" href="<?=BASE_URL.'contact-us/'?>">Contact Us</a>
			  </li>
			  <li>
				<a class="grey-text" href="#">Privacy</a>
			  </li>
			</ul>

		  </div>
		  <!-- Grid column -->

		</div>
		<!-- Grid row -->

	  </div>
	  <!-- Footer Links -->

	  <!-- Copyright -->
	  <div class="footer-copyright black lighten-1 text-center py-3">© 2020 Copyright:
		<a href="<?=BASE_URL?>"> C-Suite Africa</a>
	  </div>
	  <!-- Copyright -->

	</footer>
	<!-- Footer -->
  <!-- End your project here-->

  <!-- jQuery -->
  <script type="text/javascript" src="<?=BASE_URL.'js/jquery.min.js'?>"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="<?=BASE_URL.'js/popper.min.js'?>"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?=BASE_URL.'js/bootstrap.min.js'?>"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?=BASE_URL.'js/mdb.min.js'?>"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript" src="<?=BASE_URL.'js/script.js'?>"></script>
  <script type="text/javascript">
	$(function () {
	  'use strict'
		$("[data-trigger]").on("click", function(){
			var trigger_id =  $(this).attr('data-trigger');
			$(trigger_id).toggleClass("show");
			$('body').toggleClass("offcanvas-active");
		});

		// close if press ESC button 
		$(document).on('keydown', function(event) {
			if(event.keyCode === 27) {
			   $(".navbar-collapse").removeClass("show");
			   $("body").removeClass("overlay-active");
			}
		});

		// close button 
		$(".btn-close").click(function(e){
			$(".navbar-collapse").removeClass("show");
			$("body").removeClass("offcanvas-active");
		}); 


	})
	</script>

</body>
</html>