<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, scale=1.0">
	<title>Afterschools.lk - Home Page</title>
	<link rel="stylesheet" href="<?php echo base_url() ?>assests/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assests/css/main.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assests/css/al.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assests/css/loader.css">
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
				<?php foreach ($user as $row): ?>
					<div class="main-nav-box">
						<h2><?php echo  $row->catoType; ?></h2>
						<span><?php echo $row->catoID; ?></span>
					</div>
				<?php endforeach; ?>
			</div>

			<div id="content" class="col col-12 col-lg-8">
				<!-- Content change with the page here-->
				<h1>Cambridge International - Advanced Level</h1>
				<p>Please select a subject from the list below:</p>
				<p class="form-group">
					<label>
						Show me qualifications in:
					</label>
					<select id="cmbQualification" class="form-control">
						<option value="all">All subject areas</option>
						<option value="english">English</option>
						<option value="general studies">General Studies</option>
						<option value="humanities">Humanities</option>
						<option value="languages">Languages</option>
						<option value="mathematics">Mathematics</option>
						<option value="science">Science</option>
						<option value="social sciences">Social Sciences</option>
						<option value="technology">Technology</option>
						<option value="arts">The Arts</option>
					</select>
				</p>
				<hr>
				<div id="loader-container">
					<div class="lds-ripple">
						<div></div>
						<div></div>
					</div>
				</div>
				<ul id="ulQualifications">

				</ul>
				<!-- # No more changes -->
			</div>

			<div id="advertisement" class="col col-12 col-lg-2">
				<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque cupiditate doloremque enim est
					exercitationem fuga laboriosam maiores minima nisi nostrum quos saepe sed similique, vero
					voluptatem! Aliquid, distinctio nesciunt! Labore!
				</div>
				<div>Accusantium ad consequuntur cumque cupiditate, facere illum in natus perferendis veritatis! Animi
					corporis iusto nobis quam reiciendis sunt. Beatae culpa dolore eos excepturi iure maxime, quis vero?
					Assumenda commodi, eligendi.
				</div>
				<div>Accusantium ad consequuntur cumque cupiditate, facere illum in natus perferendis veritatis! Animi
					corporis iusto nobis quam reiciendis sunt. Beatae culpa dolore eos excepturi iure maxime, quis vero?
					Assumenda commodi, eligendi.
				</div>
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
<script>
	// $("#cmbQualification").change(function(){
	// 	loadSubjects();
	// });
    //
	// $(document).ready(function(){
	// 	loadSubjects();
	// })

	$(".main-nav-box").click(function () {
		$("#loader-container").removeClass("hide");
		$("#ulQualifications").addClass("hide");
		var val = $(this).find("span").text();
		$.ajax({
			method:"GET",
			url:"<?php echo base_url()?>SubjectC/getSubFromCato?catoID="+val+"",
			sync:true,
			dataType:"json"
		}).done(function (response) {
			$("#loader-container").addClass("hide");
			$("#ulQualifications").removeClass("hide");
			$("#ulQualifications li").remove();
			var sub=(response);
			for(var index in sub){
				var ff=	sub[index];
				if ($("#cmbQualification").val() == "all") {
					$("#ulQualifications").append("<li><a href='/Official-Web/AL/alsubs?id=" + ff.subID + "&name="+ff.subName+"'>" + ff.subName + "</a></li>");
				} else {
					if (ff.tag === $("#cmbQualification").val()) {
						$("#ulQualifications").append("<li><a href='/Official-Web/AL/alsubs?id=" + ff.subID + "&name=\"+ff.subName+\"'>" + ff.subName + "</a></li>");
					}
				}
				// $("#tblMe").append("<tr><td>" + ff.subID + "</td><td>" + ff.subName + "</td><td>" + ff.tag + "</td></tr>");
			}
		});

	});


</script>
</body>
</html>
