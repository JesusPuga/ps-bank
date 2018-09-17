<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>SP Bank</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Finance In Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<?php
	echo "hello world"
?>
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
	<!-- banner -->
	<div class="banner">
		<div class="header">
			<div class="container">
						<div class="header-left">
					<div class="w3layouts-logo">
						<h1>
							<a href="index.html">SP Bank</a>
						</h1>
					</div>
				</div>
				<div class="top-nav">
						<nav class="navbar navbar-default">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li><a class="active" href="index.html">Inicio</a></li>
									<li><a href="about.html">Sobre nosotors</a></li>
									<li><a href="signin.html">Crear cuenta</a></li>
									<li><a href="login.html">Inicio de sesión</a></li>
								</ul>
							</div>
						</nav>
				</div>
			</div>
		</div>
		<div class="banner-info">
			<div class="container">
				<div class="w3-banner-info">
					<div class="slider">
						<div class="callbacks_container">
							<ul class="rslides callbacks callbacks1" id="slider4">
								<li>
									<div class="w3layouts-banner-info">
										<h3>Maneje su dinero integralmente</h3>
										<p>Ahorre e invierta</p>
										<div class="w3ls-button">
											<a href="single.html">Leer más</a>
										</div>
									</div>
								</li>
								<li>
									<div class="w3layouts-banner-info">
										<h3>Crezca con su PyMe</h3>
										<p>Prepare su micro empresa para crecer</p>
										<div class="w3ls-button">
											<a href="single.html">Read More</a>
										</div>
									</div>
								</li>
							</ul>
						</div>
						<div class="clearfix"> </div>
									<script>
										// You can also use "$(window).load(function() {"
										$(function () {
										  // Slideshow 4
										  $("#slider4").responsiveSlides({
											auto: true,
											pager:true,
											nav:false,
											speed: 400,
											namespace: "callbacks",
											before: function () {
											  $('.events').append("<li>before event fired.</li>");
											},
											after: function () {
											  $('.events').append("<li>after event fired.</li>");
											}
										  });

										});
									 </script>
									<!--banner Slider starts Here-->
					</div>
				</div>
				<div class="agileinfo-social-grids">
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- welcome -->
	<div class="welcome">
		<div class="container">
			<div class="agileits-heading">
				<h2>Bienvenido</h2>
			</div>
			<div class="w3lcome-grids">
				<div class="welcome-agile-row">
					<div class="col-md-6 welcome-grid">
						<div class="welcome-grid-right">
							<img src="images/2.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="welcome-grid-left">
							<h4>magnam aliquam </h4>
							<p>Adipisci velit, sed quia non numquam eius modi tempora incidunt
								ut labore et dolore magnam aliquam quaerat voluptatem</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-6 welcome-grid">
						<div class="welcome-grid-right agileinfo-welcm-grid">
							<img src="images/3.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="welcome-grid-left agileinfo-welcm-grid2">
							<h4>quaerat volupta</h4>
							<p>Adipisci velit, sed quia non numquam eius modi tempora incidunt
								ut labore et dolore magnam aliquam quaerat voluptatem</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="welcome-agile-row2">
					<div class="col-md-6 welcome-grid">
						<div class="welcome-grid-right">
							<img src="images/4.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="welcome-grid-left">
							<h4>aliquam quaerat</h4>
							<p>Adipisci velit, sed quia non numquam eius modi tempora incidunt
								ut labore et dolore magnam aliquam quaerat voluptatem</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-6 welcome-grid">
						<div class="welcome-grid-right agileinfo-welcm-grid">
							<img src="images/5.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="welcome-grid-left agileinfo-welcm-grid2">
							<h4>voluptatem magnam</h4>
							<p>Adipisci velit, sed quia non numquam eius modi tempora incidunt
								ut labore et dolore magnam aliquam quaerat voluptatem</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- //welcome -->
	<!-- services -->
	<div class="services">
		<div class="container">
			<div class="agileits-heading">
				<h3>Servicios</h3>
			</div>
			<div class="agileinfo-services-grids">
				<div class="services-top-grids">
					<div class="col-md-3 wthree-services-grid">
						<i class="fa fa-money" aria-hidden="true"></i>
						<h4>Vivamus</h4>
						<p>Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
					</div>
					<div class="col-md-3 wthree-services-grid">
						<i class="fa fa-credit-card" aria-hidden="true"></i>
						<h4>Vivamus</h4>
						<p>Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
					</div>
					<div class="col-md-3 wthree-services-grid">
						<i class="fa fa-cc-paypal" aria-hidden="true"></i>
						<h4>Vivamus</h4>
						<p>Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
					</div>
					<div class="col-md-3 wthree-services-grid">
						<i class="fa fa-cc-stripe" aria-hidden="true"></i>
						<h4>Vivamus</h4>
						<p>Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="services-bottom-grids">
					<div class="col-md-3 wthree-services-grid">
						<i class="fa fa-user" aria-hidden="true"></i>
						<h4>Vivamus</h4>
						<p>Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
					</div>
					<div class="col-md-3 wthree-services-grid">
						<i class="fa fa-thumbs-up" aria-hidden="true"></i>
						<h4>Vivamus</h4>
						<p>Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
					</div>
					<div class="col-md-3 wthree-services-grid">
						<i class="fa fa-asterisk" aria-hidden="true"></i>
						<h4>Vivamus</h4>
						<p>Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
					</div>
					<div class="col-md-3 wthree-services-grid">
						<i class="fa fa-envelope" aria-hidden="true"></i>
						<h4>Vivamus</h4>
						<p>Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- //services -->
	<!-- testimonial -->
	<div class="jarallax testimonial">
		<div class="testimonial-dot">
			<div class="container">
				<div class="agileits-heading testimonial-heading">
					<h3>¿Qué piensan nuestros clientes?</h3>
				</div>
				<div class="w3-agile-testimonial">
					<div class="slider">
						<div class="callbacks_container">
							<ul class="rslides callbacks callbacks1" id="slider3">
								<li>
									<div class="testimonial-img-grid">
										<div class="testimonial-img t-img1">
											<img src="images/14.jpg" alt="" />
										</div>
									</div>
									<div class="testimonial-img-info">
										<p>Nunc interdum elit nec sapien vehicula, ut blandit nulla ultrices. Sed ullamcorper metus eget efficitur rutrum. Aliquam a nunc odio. Aenean fermentum finibus efficitur.</p>
										<h5>Peter Guptill</h5>
										<h6>Proin blandit</h6>
									</div>
								</li>
								<li>
									<div class="testimonial-img-grid">
										<div class="testimonial-img t-img1">
											<img src="images/15.jpg" alt="" />
										</div>
									</div>
									<div class="testimonial-img-info">
										<p>Morbi est est, mollis id diam a, pellentesque dignissim lorem. Sed malesuada sed lacus sit amet vestibulum. Sed nibh purus, egestas eu orci vel, mollis interdum orci.</p>
										<h5>Mary Jane</h5>
										<h6>Lorem ipsum</h6>
									</div>
								</li>
							</ul>
						</div>
						<div class="clearfix"> </div>
						<script>
									// You can also use "$(window).load(function() {"
									$(function () {
									  // Slideshow 4
									  $("#slider3").responsiveSlides({
										auto: true,
										pager:false,
										nav:false,
										speed: 500,
										namespace: "callbacks",
										before: function () {
										  $('.events').append("<li>before event fired.</li>");
										},
										after: function () {
										  $('.events').append("<li>after event fired.</li>");
										}
									  });

									});
						</script>
						<!--banner Slider starts Here-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //testimonial -->
	<!-- news -->
	<!-- //news -->
	<!-- address -->
		<div class="address">
			<div class="col-md-16 address-left" style="text-align: center">
				<h4>Información de contacto</h4>
				<ul>
					<li><i class="fa fa-map-marker"></i> 123 San Sebastian, New York City USA.</li>
					<li><i class="fa fa-mobile"></i> 333 222 3333 </li>
					<li><i class="fa fa-phone"></i> +222 11 4444 </li>
					<li><i class="fa fa-envelope-o"></i> <a href="mailto:example@mail.com"> mail@example.com</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- //address -->
		<!-- footer -->
		<div class="footer">
			<div class="container">
				<h3><a href="index.html">Finance In</a></h3>
				<p>© 2017 Finance In. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
			</div>
		</div>
		<!-- //footer -->
	<script src="js/responsiveslides.min.js"></script>
	<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>

	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
	<!-- //here ends scrolling icon -->
</body>
</html>
