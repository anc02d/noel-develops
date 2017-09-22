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
		<link rel="stylesheet" href="css/styles.css"/>

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

		<title>noelDevelops</title>
	</head>

	<body>
		<div class="container-fluid reveal">
			<div id="welcome-section">
				<div class="row">
					<div class="col-xs-12 col-md-12">
						<div class="welcome-box">
							<div class="homepage-box-text">
								<h3>Hey there, thanks for visiting my <span class="play">playfolio</span>. <br>More fun code experiments are coming soon!
								<br>Scroll down to learn more.</h3>
							</div>
						</div>
					</div>
				</div> <!--end main welcome page row-->
			</div><!--end welcome page section container-->
			<div id="portfolio-section">
				<div class="row">
					<div class="col-md-12">
						<h2>work + play</h2>
							<p>I love making dynamic and beautiful websites, collaborating on software applications, solving real-world problems, and using software as a tool for better living. Defining problems and designing solutions is fun and I love spending hours perfecting my craft.</p>
							<p>Some of my favorite projects are included here. You can find more code I've written on <a href="https://github.com/anc02d" id="github-link">my GitHub profile</a> and more websites I've created on my business site, <a href="http://thirdhandcollaborative.com" target="_blank"> Third Hand Collaborative.</a></p>
					</div>
					<div class="col-xs-12 col-md-4 portfolio-card">
						<div class="portfolio-img">
							<a href="https://github.com/solomonleyba/sprout-swap" target="_blank">
								<img src="images/sproutswap-home.png" alt="home page" class="img-responsive"></a>
						</div>
						<p>a social site that allows hobby farmers to connect with locals interested in buying or trading homegrown produce. Users make profiles and posts to offer items from their gardens, and may respond and offer to trade or buy others' fresh veggies. (team project)</p>
						<h6>Features:</h6>
						<ul>
							<li>View grower's personalized profiles</li>
							<li>Upload pics &amp; descriptions of produce to the local offers feed</li>
							<li>Map offers near users' current location</li>
						</ul>
						<ul class="tech-tags">
							<li>PHP</li>
							<li>mySQL</li>
							<li>Angular 2</li>
						</ul>
					</div><!-- sprout-swap card -->

					<div class="col-xs-12 col-md-4 portfolio-card">
						<div class="portfolio-img">
							<a href="https://highdeserttitle.com" target="_blank">
								<img src="images/nmlic-animation.gif" alt="hover animation" class="img-responsive"></a>
						</div>
						<p>a website for an Albuquerque-based title company - I had fun with hover animations inspired by the New Mexico license plates</p>
						<h6>Features:</h6>
						<ul>
							<li>Latest News section easily updated by the website owners</li>
							<li>Connected to Google business reviews</li>
							<li>Map and picture of business location</li>
						</ul>
						<ul class="tech-tags">
							<li>PHP</li>
							<li>CSS</li>
						</ul>
					</div> <!-- end high desert -->
					<div class="col-xs-12 col-md-4 portfolio-card">
						<div class="portfolio-img">
							<a href="http://noeldevelops/images/wp-loop.png" target="_blank">
								<img src="images/wp-loop.png" alt="wordpress loop" class="img-responsive"></a>
						</div>
						<p>a custom Wordpress loop within a loop to relate two different custom post types on a page and display a category of posts within a separate category</p>
						<ul class="tech-tags">
							<li>PHP</li>
							<li>CSS</li>
							<li>Wordpress</li>
						</ul>
					</div> <!-- end portfolio card 3 -->
				</div> <!-- end row -->
			</div><!--end portfolio container -->
			<span class="anchor" id="about"></span>
			<div class="row" id="about-section">
				<div class="col-md-4 col-md-offset-1 about-pic">
					<img id="me" src="images/beach-selfie.jpg" alt="selfie">
				</div>
				<div class="col-xs-12 col-md-6" id="about-text">
					<h2>Hi. I'm Noel.</h2>
					<p>When I'm not at my desk, you might find me wandering in the high desert, reading books at the library, list-making, wedding officiating, pop-up card crafting, or nurturing my billion little pets in our coral reef tank. <br/><br/>I love to travel and have explored across the US, Europe, and South America. &#161Hablo espa&#241ol (et un peu de français)! <br/><br/>Want to know more? Get in touch!</p>
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
