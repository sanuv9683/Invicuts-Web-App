<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, scale=1.0">
	<title>Afterschools.lk - Home Page</title>
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
	<div class="container">
		<div class="row">
			<div class="col col-12 col-lg-2" id="sem">
				<?php foreach ($user as $row): ?>
					<div class="main-nav-box">
						<h2><?php echo $row->catoID; ?></h2>
						<span><?php echo $row->catoType; ?></span>
					</div>
				<?php endforeach; ?>
			</div>

			<div id="content" class="col col-12 col-lg-10">
				<!-- Content change with the page here-->
				<h1>Welcome to Afterschools.lk</h1>
				<p>
					<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi, aperiam distinctio, dolor dolores doloribus earum ex iusto nesciunt placeat quasi quidem repudiandae, sint totam voluptas! Ab asperiores laudantium perspiciatis.</span><span>A accusantium, ad adipisci aperiam atque commodi delectus dignissimos dolorum earum fuga modi molestias nam nobis officia omnis optio praesentium quam rerum sapiente tempore ut vel veritatis voluptates! Fugit, porro.</span><span>A ab aliquam dolorem eligendi fuga ipsum minima natus provident quae repellendus. Culpa, ex facere harum laboriosam magni nemo numquam quo recusandae reiciendis sequi, sit sunt temporibus ullam unde voluptate.</span><span>Ducimus ex exercitationem facilis fuga, fugiat illum nam porro qui quis voluptatibus. Alias, beatae, delectus dolores earum eveniet fugit itaque laboriosam maxime odio quam quidem rem repellendus ut? Sunt, tempore!</span><span>Accusamus, asperiores assumenda cumque eaque exercitationem ipsa maiores quis! Accusamus aliquid architecto assumenda beatae blanditiis, doloremque eligendi iusto nostrum numquam odio pariatur perferendis placeat, qui quos tempora? Non, repellat sint.</span><span>Aperiam aut commodi consectetur corporis deserunt distinctio, eius eos eum in nobis repellat tempora veniam, voluptatem? Accusamus et inventore iure magni officia quidem temporibus. Amet ex magnam omnis ratione similique?</span><span>Accusamus aliquam aperiam aut autem consequatur fuga labore maxime possimus rerum saepe. Eos neque possimus repudiandae sint! Ab aut corporis, dignissimos doloremque dolorum ex libero, nulla recusandae reprehenderit ut veniam?</span><span>Atque consequuntur cupiditate deserunt inventore laudantium officiis placeat quisquam, saepe. Adipisci aliquid fugit harum ipsam, iure nulla numquam obcaecati optio repellendus saepe. Dicta ea fugit itaque, labore laborum odio rem!</span><span>Autem beatae cum deserunt et excepturi impedit incidunt, ipsum maxime nam obcaecati praesentium quos, sapiente veniam? Assumenda, culpa cum dignissimos eius, fugiat nemo nostrum odio optio quibusdam, sequi vero voluptate.</span><span>Ab ad consectetur cum illo magnam nobis quam quis! Accusamus accusantium autem cum delectus dolorem doloremque dolores ducimus est ipsa, magni minima nam nobis perspiciatis quisquam soluta ullam, veritatis voluptas?</span>
				</p>
				<p>
					<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi, aperiam distinctio, dolor dolores doloribus earum ex iusto nesciunt placeat quasi quidem repudiandae, sint totam voluptas! Ab asperiores laudantium perspiciatis.</span><span>A accusantium, ad adipisci aperiam atque commodi delectus dignissimos dolorum earum fuga modi molestias nam nobis officia omnis optio praesentium quam rerum sapiente tempore ut vel veritatis voluptates! Fugit, porro.</span><span>A ab aliquam dolorem eligendi fuga ipsum minima natus provident quae repellendus. Culpa, ex facere harum laboriosam magni nemo numquam quo recusandae reiciendis sequi, sit sunt temporibus ullam unde voluptate.</span><span>Ducimus ex exercitationem facilis fuga, fugiat illum nam porro qui quis voluptatibus. Alias, beatae, delectus dolores earum eveniet fugit itaque laboriosam maxime odio quam quidem rem repellendus ut? Sunt, tempore!</span><span>Accusamus, asperiores assumenda cumque eaque exercitationem ipsa maiores quis! Accusamus aliquid architecto assumenda beatae blanditiis, doloremque eligendi iusto nostrum numquam odio pariatur perferendis placeat, qui quos tempora? Non, repellat sint.</span><span>Aperiam aut commodi consectetur corporis deserunt distinctio, eius eos eum in nobis repellat tempora veniam, voluptatem? Accusamus et inventore iure magni officia quidem temporibus. Amet ex magnam omnis ratione similique?</span><span>Accusamus aliquam aperiam aut autem consequatur fuga labore maxime possimus rerum saepe. Eos neque possimus repudiandae sint! Ab aut corporis, dignissimos doloremque dolorum ex libero, nulla recusandae reprehenderit ut veniam?</span><span>Atque consequuntur cupiditate deserunt inventore laudantium officiis placeat quisquam, saepe. Adipisci aliquid fugit harum ipsam, iure nulla numquam obcaecati optio repellendus saepe. Dicta ea fugit itaque, labore laborum odio rem!</span><span>Autem beatae cum deserunt et excepturi impedit incidunt, ipsum maxime nam obcaecati praesentium quos, sapiente veniam? Assumenda, culpa cum dignissimos eius, fugiat nemo nostrum odio optio quibusdam, sequi vero voluptate.</span><span>Ab ad consectetur cum illo magnam nobis quam quis! Accusamus accusantium autem cum delectus dolorem doloremque dolores ducimus est ipsa, magni minima nam nobis perspiciatis quisquam soluta ullam, veritatis voluptas?</span>
				</p>
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
<script>

	$(".main-nav-box").click(function () {
		$(this).find("h2").text();
		window.location.replace("<?php echo base_url()?>AL");
	});

	$("footer>div>div>div>span:last-child").click(function () {
		$("html,body").animate({
			scrollTop: "0px"
		}, 300);
	});

</script>
</body>
</html>
