<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, scale=1.0">
    <title>Afterschools.lk - Terms and Condition</title>
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
                <h1 id="title"><a href="errors/index.html">Afterschools.lk</a></h1>
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
                <h1>Terms and Conditions</h1>
                <p>
                    our use of the web site at teachers.cie.org.uk ('the Site') is governed by these terms of use, and
                    by using this Site you consent to these terms of use. You may print and keep a copy of these terms
                    of use. The terms of use are a legal agreement between us and can only be modified with the prior
                    written consent of the University of Cambridge Local Examinations Syndicate (UCLES). UCLES reserves
                    the right to change the terms at its discretion by changing them on this web page of the Site.
                </p>
                <p>
                    If you do not agree with any of the terms and conditions in these terms of use you should cease use of the Site immediately.
                </p>
                <h4>1 Accuracy of Information and Disclaimer</h4>
                <p>1.1 UCLES will use its reasonable endeavours to ensure that all information on the Site is accurate. However, the Site and material available on the Site is provided for general information purposes only and is not intended to provide comprehensive information or guidance on the subjects covered. Before entering into any contract based on or relating to information on this site, you should obtain full information from the organisation of individual with whom you are establishing the contract. UCLES is not responsible for information provided by any third party in relation to such a contract.</p>
                <p>1.2 You acknowledge that any reliance on any information or other material contained on this Site is entirely at your own risk and all other warranties, undertakings, conditions and terms, express or implied, whether by common law, statute, custom, trade usage, course of dealings or otherwise (including without limitation as to quality, fitness for purpose, performance or suitability for purpose) in respect of the Site are hereby excluded to the fullest extent permitted by law.</p>
                <p>1.3 Nothing in these terms of use shall exclude our liability to you for fraudulent misrepresentation by UCLES or its employees or for death or personal injury resulting from UCLES' negligence or that of our employees.</p>
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

</script>
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
