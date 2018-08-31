<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, scale=1.0">
	<title>Afterschools.lk - Contact Us</title>
	<link rel="stylesheet" href="<?php echo base_url() ?>assests/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assests/css/main.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
		  integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
</head>
<body>
<header>
	<div class="container">
		<div class="row">
			<div class="col col-12 col-md-3">
				<h1 id="title"><a href="/Official-Web/Welcome">Afterschools.lk</a></h1>
			</div>
			<div class="col col-12 col-md-9">
				<div id="hdr-social-media-container" class="social-media-container">
					<a href="http://facebook.com"><i class="fab fa-facebook"></i></a>
					<a href="http://google.com"><i class="fab fa-google-plus-g"></i></a>
					<a href="http://twitter.com"><i class="fab fa-twitter"></i></a>
				</div>
			</div>
		</div>
	</div>
</header>

<main>
	<div class="container" style="min-height: 486px;">

		<div class="row">
			<div class="col col-5 col-lg-2">

			</div>

			<div id="content" class="col col-7 col-lg-4" style="padding-top: 40px; height: 384px;box-shadow: 0px 5px 28px -5px rgba(77,69,77,1);">
				<!-- Content change with the page here-->
				<h1>Sign In</h1>
				<form method="post" action="Login/log">
					<div class="form-group">
						<label>UserName :</label>
						<input type="text" name="username" class="form-control" placeholder="username">
					</div>
					<div class="form-group">
						<label>Password :</label>
						<input type="password" name="password" class="form-control" placeholder="password">
					</div>
					<button type="submit" class="btn btn-primary">Login</button>
				</form>
				<!-- # No more changes -->
			</div>
		</div>
	</div>
</main>

<footer>
	<div class="container">
		<div class="row">
			<div class="col col-12 col-lg-4">
                <span>
                    Copyright &copy; 2018 - Afterschools.lk
                </span>
				<br>
				<a href="about-us.html">About Us</a><br>
				<a href="contact-us.html">Contact Us</a><br>
				<a href="terms-and-condition.html">Terms and Conditions</a><br>
				<br>
				<span>Back to Top ^</span>
			</div>
			<div class="col col-12 col-lg-4">
				<div id="ft-social-media-container" class="social-media-container">
					<a href="http://facebook.com"><i class="fab fa-facebook"></i></a>
					<a href="http://google.com"><i class="fab fa-google-plus-g"></i></a>
					<a href="http://twitter.com"><i class="fab fa-twitter"></i></a>
				</div>
			</div>
			<div id="ft-logo-container" class="col col-12 col-lg-4">
				<h1><a href="errors/index.html">AfterSchools.lk</a></h1>
				<span>"Lorem ipsum dolor sit amet"</span>
			</div>
		</div>
	</div>
</footer>
<script src="<?php echo base_url() ?>assests/js/jquery.js"></script>
<script src="<?php echo base_url() ?>assests/js/mainPage.js"></script>
</body>
</html>
