<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'imports.php'; ?>
</head>
<body>

	<!-- HEADER -->
	<?php include 'header.php'; ?>

	<!-- CONTATO  -->
	<section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3 py-5 pr-md-12">
					<div class="heading-section heading-section-white ftco-animate mb-5">
						<h2 class="mb-4">Faça Parte</h2>
						<p>Preencha seus dados para ganhar um e-Book e receber novidades. Além disso você vai ficar sabendo, em primeira mão, quando o Start 55 estiver disponível. </p>
					</div>
					<form action="ebook.php" method="post" class="appointment-form ftco-animate">
						<div class="d-md-flex">
							<div class="form-group">
								<input name="name" type="text" class="form-control" placeholder="Nome" required="true">
							</div>
						</div>
						<div class="d-md-flex">
							<div class="form-group">
								<input name="age" type="number" class="form-control" placeholder="Idade" required="true">
							</div>
						</div>
						<div class="d-md-flex">
							<div class="form-group">
								<input name="email" type="text" class="form-control" placeholder="E-mail" required="true">
							</div>
						</div>
						<div class="d-md-flex">
							<div class="form-group ml-md-4">
								<input type="submit" value="QUERO FAZER PARTE" class="btn btn-secondary py-3 px-4">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<!-- FOOTER -->	
	<?php include 'footer.php'; ?>



		<!-- LOADER -->
		<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


		<script src="js/jquery.min.js"></script>
		<script src="js/jquery-migrate-3.0.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/jquery.waypoints.min.js"></script>
		<script src="js/jquery.stellar.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/aos.js"></script>
		<script src="js/jquery.animateNumber.min.js"></script>
		<script src="js/bootstrap-datepicker.js"></script>
		<script src="js/jquery.timepicker.min.js"></script>
		<script src="js/scrollax.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
		<script src="js/google-map.js"></script>
		<script src="js/main.js"></script>

		<?php include 'footer.php'; ?>

	</body>
	</html>