<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, scale=1.0">
    <title>Afterschools.lk - About Us</title>
	<link rel="stylesheet" href="<?php echo  base_url()?>assests/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo  base_url()?>assests/css/main.css">
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
            <div class="col col-12 col-lg-2">
                <div class="main-nav-box">
                    <h2>O/L</h2>
                    <span>Ordinary Level</span>
                </div>
                <div class="main-nav-box">
                    <h2>A/L</h2>
                    <span>Advanced Level</span>
                </div>
            </div>

            <div id="content" class="col col-12 col-lg-10">
                <!-- Content change with the page here-->
                <h1>About Us</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi commodi consequuntur distinctio facere molestias odit praesentium reiciendis repellat veniam. Accusamus consequuntur culpa explicabo possimus quaerat quidem, recusandae rerum tenetur voluptatum!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa minus modi voluptatibus? Dolore dolores necessitatibus officiis possimus quibusdam quisquam repellat, reprehenderit voluptatibus. Aliquam asperiores aspernatur atque beatae ducimus perferendis, quia!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. At aut commodi consectetur cum facilis ipsam quas! Aliquid blanditiis dolore dolorum molestiae provident sint? Dolorem impedit ipsum neque, optio quas ut?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis cum quae quisquam reprehenderit unde. Cum distinctio dolor fuga fugit iusto mollitia non nulla quibusdam, quidem reiciendis repellendus temporibus veniam voluptates.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, commodi, cumque dolorum esse id in, inventore iure molestiae non praesentium provident quisquam recusandae repellendus sequi suscipit temporibus voluptate. Minus, quisquam.
                </p>
                <section>
                    <h3>Our Vision</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, aliquam aperiam aspernatur blanditiis commodi corporis, dignissimos ea et eum excepturi impedit, inventore possimus praesentium repellat temporibus ullam vel velit! Excepturi.
                    </p>
                </section>
                <section>
                    <h3>Our Mission</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, aliquam aperiam aspernatur blanditiis commodi corporis, dignissimos ea et eum excepturi impedit, inventore possimus praesentium repellat temporibus ullam vel velit! Excepturi.
                    </p>
                </section>
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
<script src="<?php echo  base_url()?>assests/js/jquery.js"></script>
<script src="<?php echo  base_url()?>assests/js/mainPage.js"></script>
<script>
	$(".main-nav-box").click(function () {
		switch ($(this).find("h2").text()) {
			case "O/L":
				window.location.replace("<?php echo base_url()?>OL");
				break;
			case "A/L":
				window.location.replace("<?php echo base_url()?>AL");
				break;
		}
	});

	$("footer>div>div>div>span:last-child").click(function () {
		$("html,body").animate({
			scrollTop: "0px"
		}, 300);
	});

</script>
</body>
</html>
