<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, scale=1.0">
	<title>Afterschools.lk - Contact Us</title>
	<link rel="stylesheet" href="<?php echo base_url() ?>assests/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assests/css/main.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assests/css/dropzone.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
		  integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
	<style>
		.social-media-container i {
			padding: 11px;
		}
	</style>
</head>
<body>
<header>
	<div class="container">
		<div class="row">
			<div class="col col-12 col-md-3">
				<h1 id="title"><a href="/Official-Web/welcome">Afterschools.lk</a></h1>
			</div>
			<div class="col col-12 col-md-9">
				<div id="hdr-social-media-container" class="social-media-container">
					<a href="/Official-Web/Menu/mana">Menu<i class="fas fa-bars"></i></a>
					<a  class="active" href="/Official-Web/Menu/mcato">Catogary<i class="fab fa-cloudsmith active"></i></a>
					<a href="/Official-Web/SubjectC">Subject<i class="fas fa-atlas"></i></a>
					<a href="/Official-Web/SubjectC/sub_year">Years<i class="fas fa-globe"></i></a>
					<a href="/Official-Web/Upload">Papers<i class="fas fa-passport"></i></a>
					<a href="/Official-Web/Upload/schema">Schema<i class="fas fa-paperclip"></i></a>
					<a href="/Official-Web/Login/logout">Logout<i class="fas fa-sign-out-alt"></i></a>
				</div>
			</div>
		</div>
	</div>
</header>

<main>
	<div class="container">

		<div class="row">
			<div id="content" class="col col-5 col-lg-5">
				<!-- Content change with the page here-->
				<h1 id="sanu">Schema Manager</h1>
				<!--				<form method="post" action="-->
				<?php //base_url()?><!--Pastpapers/do_upload" enctype="multipart/form-data" >-->
				<?php echo form_open_multipart('Upload/do_upload2'); ?>
				<div class="form-group">
					<label>Select Menu</label>
					<select name="menuID" id="sidd" class="form-control"></select>
				</div>
				<div class="form-group ">
					<label>Select Stream</label>
					<select name="stream" id="strm" class="form-control"></select>
				</div>
				<div class="form-group ">
					<label>Select Subject
					</label>
					<select name="sub" id="sub" class="form-control"></select>
				</div>
				<div class="form-group ">
					<label>Select Year
					</label>
					<select name="yearID" id="year" class="form-control"></select>
				</div>
				<div class="form-group ">
					<label>Select Paper
					</label>
					<select name="paperID" id="paper" class="form-control"></select>
				</div>
				<div class="form-group ">
					<label>Enter Schema ID
					</label>
					<input class="form-control" type="text" name="schID" id="scid">
				</div>
				<div class="form-group ">
					<label>Enter Schema Name
					</label>
					<input class="form-control" type="text" name="schName">
				</div>
				<div class="form-group ">
					<label>Choose Paper
					</label>
					<input class="form-control" type="file" name="paper">
				</div>
				<button type="submit" class="btn btn-primary">Save</button>
				<button type="reset" id="btnCancel" class="btn  btn-primary">Cancel</button>
				</form>
				<!-- # No more changes -->
			</div>
			<div id="content" class="col col-7 col-lg-7">
				<table class="table table-bordered table-responsive table-hover table-striped">
					<thead>
					<tr>
						<th>Schema ID</th>
						<th>Schema URL</th>
					</tr>
					</thead>
					<tbody id="tblMe">

					</tbody>
				</table>
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
<script src="<?php echo base_url() ?>assests/js/dropzone.js"></script>
<script src="<?php echo base_url() ?>assests/js/main.js"></script>
<script src="<?php echo base_url() ?>assests/js/mainPage.js"></script>
<script type="application/javascript">
	loadSubjects();

	function loadSubjects() {
		$("#tblMe").empty();
		$.ajax({
			method: "GET",
			url: "<?php echo base_url()?>Menu/getAll",
			async: true,
			dataType: "json"
		}).done(function (response) {
			var subjects = (response);
			for (var index in subjects) {
				var subject = subjects[index];
				$("#sidd").append("<option value='" + subject.menuID + "'>" + subject.menuName + "</option>");
			}
		});
	}

	$("#sidd").change(function () {
		var selecte = $("#sidd").find(":selected").val();
		$("#strm").empty();
		$.ajax({
			method: "GET",
			url: "<?php echo base_url()?>Menu/getAllCato?menuID=" + selecte + "",
			async: true,
			dataType: "json"
		}).done(function (response) {
			var subjects = (response);
			for (var index in subjects) {
				var subject = subjects[index];
				// $("#strm").append("<tr><td>" + subject.catoID + "</td><td>" + subject.catoType + "</td></tr>");
				$("#strm").append("<option value='" + subject.catoID + "'>" + subject.catoType + "</option>");
			}
		});
	});

	$("#strm").change(function () {
		var catid = $("#strm").find(":selected").val();
		$("#sub").empty();
		$.ajax({
			method: "GET",
			url: "<?php echo base_url()?>SubjectC/getSubFromCato?catoID=" + catid + "",
			sync: true,
			dataType: "json"
		}).done(function (response) {
			var sub = (response);
			for (var index in sub) {
				var ff = sub[index];
				$("#sub").append("<option value='" + ff.subID + "'>" + ff.subName + "</option>");
				// $("#tblMe").append("<tr><td>" + ff.subID + "</td><td>" + ff.subName + "</td><td>" + ff.tag + "</td></tr>");
			}
		});
	});

	$("#sub").change(function () {
		var catid = $("#sub").find(":selected").val();
		$("#year").empty();
		$.ajax({
			method: "GET",
			url: "<?php echo base_url()?>SubjectC/getSy?id=" + catid + "",
			sync: true,
			dataType: "json"
		}).done(function (response) {
			var sub = (response);
			for (var index in sub) {
				var ff = sub[index];
				$("#year").append("<option value='" + ff.yearID + "'>" + ff.yearName + "</option>");
				// $("#tblMe").append("<tr><td>" + ff.yearID + "</td><td>" + ff.yearName + "</td></tr>");

			}
		});
	});

	$("#year").change(function () {
		var catid = $("#year").find(":selected").val();
		$("#paper").empty();
		$.ajax({
			method: "GET",
			url: "<?php echo base_url()?>Upload/getAll?yearID=" + catid + "",
			sync: true,
			dataType: "json"
		}).done(function (response) {
			var sub = (response);
			for (var index in sub) {
				var ff = sub[index];

				$("#paper").append("<option value='" + ff.papaerID + "'>" + ff.type + "</option>");
				// $("#tblMe").append("<tr><td>" + ff.papaerID + "</td><td>" + ff.pdfUrl + "</td></tr>");

			}
		});
	});

	$("#paper").change(function () {
		var catid = $("#paper").find(":selected").val();
		$("#tblMe").empty();
		$.ajax({
			method: "GET",
			url: "<?php echo base_url()?>Upload/getAll2?pid=" + catid + "",
			sync: true,
			dataType: "json"
		}).done(function (response) {
			var sub = (response);
			for (var index in sub) {
				var ff = sub[index];

				// $("#paper").append("<option value='" + ff.papaerID + "'>" + ff.type + "</option>");
				$("#tblMe").append("<tr class='tra'><td>" + ff.schemaID + "</td><td>" + ff.name + "</td></tr>");

			}
		});
	});

	maxID();
	function maxID() {
		$.ajax({
			method: "GET",
			url: "<?php echo base_url()?>MaxID/getmsmax",
			async: true,
			dataType: "json"
		}).done(function (response) {
			var aa = (response);
			$("#scid").val(aa[0].a);
		});
	}
	$('#btnCancel').click(function () {
		maxID();
	});

</script>
</body>
</html>
