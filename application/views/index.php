<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, scale=1.0">
	<title>Afterschools.lk - Home Page</title>
	<link rel="stylesheet" href="<?php echo base_url() ?>assests/boos/bootstrap.min.css"/>
	<script type="text/javascript" rel="script" src="<?php echo base_url() ?>assests/boosjs/bootstrap.min.js"></script>
	<link rel="stylesheet" href="<?php echo base_url() ?>assests/css/main.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
		  integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.11/css/lightgallery.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<style>
		#content{
			padding: 0px;
		}
	</style>
</head>
<body>
<header>
	<div class="container-fulid" style="padding-left: 5px; padding-right: 15px;">
		<div class="row">
			<div class="col col-12 col-md-3">
				<h1 id="title"><a href="/Official-Web/Welcome">Invictus.edu.lk</a></h1>
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
	<div class="container-fluid">

		<div class="row">
			<div class="col col-12 col-lg-2" id="men"  style="padding: 0px 5px 0px;">

			</div>

			<div id="content" class="col col-12 col-lg-10">
				<!-- Content change with the page here-->
				<!--				slider-->
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<style>
						@media all and (min-width: 0) and (max-width: 360px) {
							#pp{
								font-size: 15px!important;
							}
						}
					</style>
					<div class="carousel-inner">
						<div class="carousel-item">
							<div class="" style="position: absolute;color: white;right: 50px;top: 100px">
								<p id="pp" style="font-size: 30px;font-family: 'Roboto', sans-serif;opacity: 0.7">I never tech my pupils,<br>  I only provide the conditions<br> in  which they can learn</p>
							</div>
							<img class="d-block w-100" src="<?php echo base_url() ?>assests/img/slider-1.jpg"
								 alt="First slide">
						</div>
						<div class="carousel-item active">
							<img class="d-block w-100" src="<?php echo base_url() ?>assests/img/slider 2.jpg"
								 alt="Second slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="<?php echo base_url() ?>assests/img/slder3pp.jpg"
								 alt="Third slide">
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>

				<!--				slider-->
				<div class="jumbotron" style="margin-top:20px">
				<h1 style="font-family: 'Roboto', sans-serif;font-size:35px">Welcome to Afterschools.lk</h1>
				<p class="">
					<span><strong>Invictus was established in 2015 In Panadura in order to supports the students who follows
						English and literature subjects for local and international curriculum. “Invictus’ word’s origin is Latin and
						means Unconquerable and the founder of INVICTUS Mr. Chathura sanjaya Wijenaike chose the name
						inspired by a Victorian poem called Invictus written by William Henley. It was also the very poem which
						inspired Nelson Mandela for presidency.</strong></span>
					</p>
					</div>
					<style>
					.v{
						font-family: 'Roboto', sans-serif;
						font-size:28px;
					}
					</style>
					<div class="jumbotron">
					<h1 class="v">Our Vision</h2>
					<p class="">
					<span>To create a society with literature and ultimately a society of good values.</span>
					</p>
					<h1 class="v">Our Mission</h2>
					<p>
					<span>Making the children avid readers, great writers and brilliant speakers most of all sensitive and careful
					listeners</span>
					</p>
					<h1 class="v">Our Motto</h2>
					<p>
					<span>I am the master of my fate <br>
						I am the captain of my soul</span>
					</p>

					<h1 class="v">Our Staff</h1>
					<dl>
						<dt>Managing Director and Chief Lecturer</dt>
						<ul>
							<li>Chathura Sanjaya Wijayanayake</li>
							<li>BA (USJP)</li>
							<li>MA Linguistics (UCMB))</li>
							<li>NDE (SLIATE)</li>
							<li>BA (USJP)</li>
							<li>DIP in Criminology (USJP)</li>
							<li>Certificate course in Crime Investigation counselling and police public relation (SLP)</li>
							<li>DIP in Customer service (IATA)</li>
						<ul>
					</dl>
					</div>








				<!-- # No more changes -->
				<script src="<?php echo base_url() ?>assests/js/jssor.slider-27.4.0.min.js" type="text/javascript"></script>
				<script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:1200,$Zoom:1,$Easing:{$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2},
              {$Duration:1000,$Zoom:11,$SlideOut:true,$Easing:{$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Zoom:1,$Rotate:1,$During:{$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Easing:{$Zoom:$Jease$.$Swing,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$Swing},$Opacity:2,$Round:{$Rotate:0.5}},
              {$Duration:1000,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Zoom:$Jease$.$InQuint,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InQuint},$Opacity:2,$Round:{$Rotate:0.8}},
              {$Duration:1200,x:0.5,$Cols:2,$Zoom:1,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:4,$Cols:2,$Zoom:11,$SlideOut:true,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.6,$Zoom:1,$Rotate:1,$During:{$Left:[0.2,0.8],$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Opacity:2,$Round:{$Rotate:0.5}},
              {$Duration:1000,x:-4,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InQuint,$Zoom:$Jease$.$InQuart,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InQuint},$Opacity:2,$Round:{$Rotate:0.8}},
              {$Duration:1200,x:-0.6,$Zoom:1,$Rotate:1,$During:{$Left:[0.2,0.8],$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Opacity:2,$Round:{$Rotate:0.5}},
              {$Duration:1000,x:4,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InQuint,$Zoom:$Jease$.$InQuart,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InQuint},$Opacity:2,$Round:{$Rotate:0.8}},
              {$Duration:1200,x:0.5,y:0.3,$Cols:2,$Zoom:1,$Rotate:1,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.7}},
              {$Duration:1000,x:0.5,y:0.3,$Cols:2,$Zoom:1,$Rotate:1,$SlideOut:true,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.7}},
              {$Duration:1200,x:-4,y:2,$Rows:2,$Zoom:11,$Rotate:1,$Assembly:2049,$ChessMode:{$Row:28},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.7}},
              {$Duration:1200,x:1,y:2,$Cols:2,$Zoom:11,$Rotate:1,$Assembly:2049,$ChessMode:{$Column:19},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.8}}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Rows: 2,
                $SpacingX: 14,
                $SpacingY: 12,
                $Orientation: 2,
                $Align: 156
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 960;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider arrow skin 093 css*/
        .jssora093 {display:block;position:absolute;cursor:pointer;}
        .jssora093 .c {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;}
        .jssora093 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;}
        .jssora093:hover {opacity:.8;}
        .jssora093.jssora093dn {opacity:.6;}
        .jssora093.jssora093ds {opacity:.3;pointer-events:none;}

        /*jssor slider thumbnail skin 101 css*/
        .jssort101 .p {position: absolute;top:0;left:0;box-sizing:border-box;background:#000;}
        .jssort101 .p .cv {position:relative;top:0;left:0;width:100%;height:100%;border:2px solid #000;box-sizing:border-box;z-index:1;}
        .jssort101 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;visibility:hidden;}
        .jssort101 .p:hover .cv, .jssort101 .p.pdn .cv {border:none;border-color:transparent;}
        .jssort101 .p:hover{padding:2px;}
        .jssort101 .p:hover .cv {background-color:rgba(0,0,0,6);opacity:.35;}
        .jssort101 .p:hover.pdn{padding:0;}
        .jssort101 .p:hover.pdn .cv {border:2px solid #fff;background:none;opacity:.35;}
        .jssort101 .pav .cv {border-color:#fff;opacity:.35;}
        .jssort101 .pav .a, .jssort101 .p:hover .a {visibility:visible;}
        .jssort101 .t {position:absolute;top:0;left:0;width:100%;height:100%;border:none;opacity:.6;}
        .jssort101 .pav .t, .jssort101 .p:hover .t{opacity:1;}
    </style>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:960px;height:480px;overflow:hidden;visibility:hidden;background-color:#24262e;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:240px;width:720px;height:480px;overflow:hidden;">
            <div>
                <img data-u="image" src="img/004.jpg" />
                <img data-u="thumb" src="img/004-s99x66.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/005.jpg" />
                <img data-u="thumb" src="img/005-s99x66.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/006.jpg" />
                <img data-u="thumb" src="img/006-s99x66.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/007.jpg" />
                <img data-u="thumb" src="img/007-s99x66.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/008.jpg" />
                <img data-u="thumb" src="img/008-s99x66.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/009.jpg" />
                <img data-u="thumb" src="img/009-s99x66.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/010.jpg" />
                <img data-u="thumb" src="img/010-s99x66.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/013.jpg" />
                <img data-u="thumb" src="img/013-s99x66.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/014.jpg" />
                <img data-u="thumb" src="img/014-s99x66.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/015.jpg" />
                <img data-u="thumb" src="img/015-s99x66.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/016.jpg" />
                <img data-u="thumb" src="img/016-s99x66.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/017.jpg" />
                <img data-u="thumb" src="img/017-s99x66.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/018.jpg" />
                <img data-u="thumb" src="img/018-s99x66.jpg" />
            </div>
        </div>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;top:0px;width:240px;height:480px;background-color:#000;" data-autocenter="2" data-scale-left="0.75">
            <div data-u="slides">
                <div data-u="prototype" class="p" style="width:99px;height:66px;">
                    <div data-u="thumbnailtemplate" class="t"></div>
                    <svg viewbox="0 0 16000 16000" class="cv">
                        <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                        <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                        <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                    </svg>
                </div>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora093" style="width:50px;height:50px;top:0px;left:270px;" data-autocenter="2">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                <polyline class="a" points="7777.8,6080 5857.8,8000 7777.8,9920 "></polyline>
                <line class="a" x1="10142.2" y1="8000" x2="5857.8" y2="8000"></line>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora093" style="width:50px;height:50px;top:0px;right:30px;" data-autocenter="2">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                <polyline class="a" points="8222.2,6080 10142.2,8000 8222.2,9920 "></polyline>
                <line class="a" x1="5857.8" y1="8000" x2="10142.2" y2="8000"></line>
            </svg>
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
    <!-- #endregion Jssor Slider End -->



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
<script type="text/javascript" rel="script" src="<?php echo base_url() ?>assests/boosjs/jquery-3.3.1.min.js"></script>
<script type="text/javascript" rel="script" src="<?php echo base_url() ?>assests/boosjs/bootstrap.min.js"></script>
<script type="text/javascript" rel="script" src="<?php echo base_url() ?>assests/js/jssor.slider-27.4.0.min.js"></script>
<!--<script src="--><?php //echo base_url() ?><!--assests/js/jquery.js"></script>-->
<script src="<?php echo base_url() ?>assests/js/mainPage.js"></script>
<script>
	loadSubjects();

	function loadSubjects() {
		$("#men").empty();
		$.ajax({
			method: "GET",
			url: "<?php echo base_url()?>Menu/getAll",
			async: true,
			dataType: "json"
		}).done(function (response) {
			var subjects = (response);
			for (var index in subjects) {
				var subject = subjects[index];
				var temp = '<div class="main-nav-box">\n\
					<h2>' + subject.menuName + '</h2>\n\
					<span>' + subject.menuID + '</span>\n\
				</div>';
				$("#men").append(temp);
				$(".main-nav-box").click(function () {
					var val = $(this).find("span").text();
					window.location.replace("<?php echo base_url()?>Menu?id=" + val + "");

				});
			}
		});
	}


	$("footer>div>div>div>span:last-child").click(function () {
		$("html,body").animate({
			scrollTop: "0px"
		}, 300);
	});

</script>
</body>
</html>