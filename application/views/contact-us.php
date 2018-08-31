<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, scale=1.0">
    <title>Afterschools.lk - Contact Us</title>
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
                <h1>Contact Us</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi commodi consequuntur distinctio facere molestias odit praesentium reiciendis repellat veniam. Accusamus consequuntur culpa explicabo possimus quaerat quidem, recusandae rerum tenetur voluptatum!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa minus modi voluptatibus? Dolore dolores necessitatibus officiis possimus quibusdam quisquam repellat, reprehenderit voluptatibus. Aliquam asperiores aspernatur atque beatae ducimus perferendis, quia!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. At aut commodi consectetur cum facilis ipsam quas! Aliquid blanditiis dolore dolorum molestiae provident sint? Dolorem impedit ipsum neque, optio quas ut?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis cum quae quisquam reprehenderit unde. Cum distinctio dolor fuga fugit iusto mollitia non nulla quibusdam, quidem reiciendis repellendus temporibus veniam voluptates.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, commodi, cumque dolorum esse id in, inventore iure molestiae non praesentium provident quisquam recusandae repellendus sequi suscipit temporibus voluptate. Minus, quisquam.
                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci dignissimos distinctio excepturi fuga laboriosam magni minima nihil, nostrum odio officia pariatur, sapiente voluptas? Blanditiis fugit modi omnis quidem recusandae totam!</span><span>Amet consequatur consequuntur deleniti dolores fugiat impedit labore minus molestiae, nemo perferendis quam qui quidem quisquam sint tempora. Accusantium aspernatur atque, beatae dolorem dolores est nam natus nobis perspiciatis ullam.</span><span>Amet dolore dolores eligendi maxime perspiciatis reprehenderit tempore. Aliquam animi corporis debitis, deserunt doloremque eaque eius esse fugiat impedit in ipsa iure mollitia quia quis repellat soluta totam unde voluptates!</span><span>Consectetur culpa dolores ipsam libero. Ipsa omnis porro qui unde? Deleniti est incidunt magni maxime quae quam qui quo! Accusantium aperiam eius facere in voluptatibus! Delectus illum nisi quia tempora!</span><span>Delectus quas quibusdam quo similique. Aliquid aperiam assumenda at consectetur, consequuntur cupiditate deleniti, eligendi et explicabo ipsam iusto magnam nesciunt perspiciatis quis reiciendis repudiandae sit. Exercitationem expedita facilis illum rem!</span>
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
<script src="<?php echo  base_url()?>assests/js/jquery.js"></script>
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
