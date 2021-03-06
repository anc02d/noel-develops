<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<link rel="apple-touch-icon" sizes="180x180" href="images/noel_favi_pink.png">
		<link rel="icon" type="image/png" href="images/noel_favi_pink.png" sizes="32x32">
		<link rel="icon" type="image/png" href="images/noel_favi_pink.png" sizes="16x16">

		<link rel="mask-icon" href="images/noel_favi_pink.png" color="#ff3340">

		<!--Bootstrap Stylesheet from CDN-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
				integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Font Awesome -->
		<link type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"
				rel="stylesheet"/>

		<!--My Custom CSS stylesheet @author Noel Cothren ---->
		<link rel="stylesheet" href="css/frontend-styles.css"/>

		<!--jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
		<!--Bootstrap Javascript--->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
				  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
				  crossorigin="anonymous"></script>

		<!--		scroll anchor -->
		<script src="js/scroll-anchor.js"></script>

		<!-- jQuery Form, Validate, Additional Methods -->
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/additional-methods.min.js"></script>

		<!-- My JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<script>
			$(function() {
				$('.navbar-nav').on('click', function() {
					if($('.navbar-header .navbar-toggle').css('display') != 'none') {
						$(".navbar-header .navbar-toggle").trigger("click");
					}
				});
			});
		</script>

		<title>Noel Develops</title>
	</head>

	<body>
		<div class="container">
			<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" id="logo" href="#welcome-section">Noel <|> Develops</a>
				</div>

				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="navbar-left"><a href="#welcome">Home</a></li>
						<li class="navbar-left"><a href="#about">About</a></li>
						<!--						<li class="navbar-left"><a href="#skills-section">Skills</a></li>-->
						<li class="navbar-right"><a href="#portfolio">Portfolio</a></li>
						<!--						<li class="navbar-right"><a href="#skills-section">Links</a></li>-->
						<li class="navbar-right"><a href="#contact">Contact</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<span class="anchor" id="welcome"></span>
		<div class="container-fluid reveal">
			<div id="welcome-section">
				<div class="row">
					<div class="col-xs-12 col-md-12">
						<div class="welcome-box">
							<div class="homepage-box-text">
								<h3>Hey there, thanks for visiting!</h3>
							</div>
						</div>
					</div>
				</div> <!--end main welcome page row-->
				<span id="portfolio-link"></span>
			</div><!--end welcome page section container-->
			<span class="anchor" id="portfolio"></span>
			<div id="portfolio-section">
				<h2>WORK & PLAY</h2>
				<div class="row">
					<div class="col-xs-12 col-md-4 portfolio-img-div">
						<a href="https://sprout-swap.com">
							<img src="images/sprout-swap-logo.png" alt="Sprout-Swap.com" class="port-img img-responsive">
						</a>
						<p>Sprout Swap is a social site that allows local growers to connect with people who may be interested
							in buying or swapping their homegrown vegetables. Users with profiles may make posts offering items
							from their gardens, and other users may respond and offer to trade or buy these fresh veggies.</p>
						<img src="images/sproutswap-home.png" alt="home page" id="sprout-swap"
							  class="port-img img-responsive">
					</div>
					<div class="col-xs-12 col-md-4" id="portfolio-text">
						<p>I believe in going above and
							beyond, providing fantastic customer service, and maintaining an excellent standard of work. </p>
						<p>I love making dynamic and beautiful websites, collaborating on software applications, and solving
							real-world problems using software as a tool for better living. Trying
							to define problems and design solutions is so fun that I
							don’t mind spending hours perfecting my craft.</p>
						<p>So far, I have worked on web sites and applications using HTML, CSS, PHP, mySQL, JavaScript, and
							Angular 2. Some of my favorite programming projects are included here, and you can find
							more on <a href="https://github.com/anc02d" id="github-link">my GitHub profile.</a></p>
					</div>
					<div class="col-xs-12 col-md-4 portfolio-img-div"><br/><br/>
						<p id="placeholder">More images coming soon! Check out
							<a href="https://github.com/anc02d" id="github-link">my GitHub profile.</a> to see code I've
							written.</p>
					</div>
				</div>
			</div><!--end portfolio container -->
			<span class="anchor" id="about"></span>
			<div class="row" id="about-section">
				<div id="about-img">
					<div class="col-xs-12 col-md-4 col-md-offset-1" id="about-text">
						<h2>Hi. I'm Noel.</h2>
						<p>When I'm not working on a project, you might find me wandering in the high desert, taking trips to
							the library, list-making, wedding officiating, pop-up card crafting, or nurturing my billion little
							pets in our coral reef tank. <br/><br/>I love to travel and have explored across the US, Europe,
							and South America. &#161Hablo espa&#241ol!<br/><br/>Want to know more? Get in touch! </p>
					</div>
				</div>
			</div> <!--end #about-section container -->
			<div class="row" id="skills-section">
				<div class="col-xs-12 col-md-2"></div>
				<div class="col-xs-12 col-md-2"></div>
				<div class="col-xs-12 col-md-2"></div>
				<div class="col-xs-12 col-md-2"></div>
				<div class="col-xs-12 col-md-2"></div>
				<div class="col-xs-12 col-md-2"></div>
			</div> <!-- end skills/links section -->
		</div>
		<div class="row" id="contact-section">
			<h1>Let's work together!</h1>
			<p>Send me a message to get in touch.</p> <br/>
			<div class="col-xs-12 col-md-8 col-md-offset-2">
				<form id="contact-form" action="php/mailer.php" method="post">
					<div class="form-group">
						<label for="formInputEmail">Email address
						</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="youremail@yoursite.com">
					</div>
					<div class="form-group">
						<label for="formInputName">Name &/or Company</label>
						<input type="text" id="name" name="name" class="form-control" maxlength="64"
								 placeholder="Your name and/or the name of your business">
					</div>
					<div class="form-group form-horizontal-well">
						<label for="formInputMessage">
							Message
						</label>
						<textarea type="text" class="form-control" rows="3" id="message" name="message"
									 placeholder="How can I help you?"></textarea>
					</div>
					<div class="g-recaptcha" data-sitekey="6LdXbRcUAAAAAD8YqILaySEsGeARVv2DDCLkl3tE"></div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
				<!--empty area for form error/success output-->
				<div class="row">
					<div class="col-xs-12">
						<div id="output-area"></div>
					</div>
				</div>
			</div>
		</div>
		<div id="contact"></div>
	</body>
</html>