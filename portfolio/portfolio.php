<!DOCTYPE HTML>
<!--
	Dan Mohr
	Portfolio Page
-->
<html>
<head>
	<title>Daniel Mohr Photography Portfolio</title>
	<meta name="viewport" content="width=1120,user-scalable=no" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="Recent photography highlights" content="" />
	<meta name="Daniel Dan Mohr Photography Photos Wedding Weddings Portfolio" content="" />
	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400" rel="stylesheet" type="text/css" />
	<!--[if lte IE 8]><script src="js/html5shiv.js"></script>-->
	<script src="js/jquery.min.js"></script> 
	<script src="js/jquery.poptrox.min.js"></script>
	<script src="js/config.js"></script>
	<script src="js/skel.min.js"></script>
	<noscript>
		<link rel="stylesheet" href="css/skel-noscript.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/style-desktop.css" />
		<link rel="stylesheet" href="css/style-noscript.css" />
	</noscript>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<!--[if lte IE 8]><link rel="stylesheet" href="css/ie8.css" /><![endif]-->

</head>
<body>

	<div id="wrapper">
		<br><div class=clearfix/>
		<div class="container">
<!-- 			<div class="panel panel-default">
				<div class="panel-heading">
					<h1>Under Construction</h1>
				</div>		
				<div class="panel-body">
					Page is currently under development. Please see highlights on <a href="http://www.facebook.com/DanielMohrPhotography">Facebook</a> in the meantime.<br><br>
					<a href="http://www.facebook.com/DanielMohrPhotography" class = "btn btn-default bottomButton">Facebook albums</a>
				</div>				
			</div> -->

			<div class="container clear-text">
				<div class="jumbotron">
					<h1><span class="transparent-icon"><img src="images/hardhat.png"></span>Under Construction</h1>
					<p>
						Portfolio is currently under development. Check back soon!<br>
						Please see highlights on <a href="http://www.facebook.com/DanielMohrPhotography"><i class="fa fa-facebook-square"></i> Facebook</a> in the meantime.<br><br>
						
						<a href="../index.html" class="btn btn-default"><i class="glyphicon glyphicon-home"></i> Back</a>
						<a href="http://www.facebook.com/DanielMohrPhotography" class = "btn btn-default"><i class="fa fa-facebook"></i> Facebook albums</a>

					</p>
				</div>
			</div>
		</div>

		<!-- Optionally show iframe to facebook -->
		<!-- <iframe src="http://www.facebook.com/DanielMohrPhotography"></iframe> -->

		<div id="main" style="display:none;">
			<div id="reel">
				<!-- ******************************************************************************************** -->
				<!-- ******************************************************************************************** -->
				

				<!-- Header Item -->

				<div id="header" class="item" data-width="400">
					<h1>Portfolio</h1>
					<p>Daniel Mohr Photography<br />
						Highlights</p>
					</div>
					
					<!-- Thumb Items -->
						<!-- Populate with a for loop?
					 	for (i = 0; i <= numThumbs; i++){
							populate here...
						} 
						
						$thumbDir = "images/thumbs/";
							$thumbs = glob($dirname."*.jpg");
							foreach($images as $image) {
							echo '<img src="'.$image.'" /><br />';
						} -->

						<!--<article class="item thumb">
							<h2>Back to Homepage...</h2>
							<a href="../index.html"><img src="images/thumbs/logo.jpg" alt=""></a>
						</article> -->
						
						<!--
						function createReader(file, whenReady) {
							reader.onload = function(evt) {
								var image = new Image();
								image.onload = function(evt) {
									var width = this.width;
									var height = this.height;
									if (whenReady) whenReady(width, height);
								};
								image.src = evt.target.result; 
							};
							reader.readAsDataURL(file);
						}
						
						function whenReady() {
							alert("done");
						}
						
						createReader(input.files[i], function(w, h) {
							alert("Hi the width is " + w + " and the height is " + h);
						}); -->
						
						<article class="item thumb">
							<a href="images/fulls/full-01.jpg"><img src="images/thumbs/thumb-01.jpg" alt=""></a>
						</article>

						<?php
						$dir = "images/";
						if ($handle = opendir($dir.'thumbs')) {
							while (false !== ($entry = readdir($handle))) {
								$thumb = substr($entry, 0, 5);
								if ($thumb == 'thumb') {
									$fileName = substr($entry, 6);
									$extension = pathinfo($dir.$fileName, PATHINFO_EXTENSION);
									$extension = strtolower($extension);
									if ($extension == 'jpg' || $extension == 'jpeg') {
										// Get width
										$width = getimagesize("$dir/thumbs/thumb-$fileName");
										echo <<< EOT
										<article class="item thumb" data-width=$width[0]>
											<a href="$dir/fulls/full-$fileName"><img src="$dir/thumbs/thumb-$fileName" alt=""></a>
										</article>
										EOT;
									}
								} 
							}

							closedir($handle);
						} else {
							echo "FAIL";
						}
						
						?>


						<!-- With Titles
						<article class="item thumb" data-width="282">
							<h2>You really got me</h2>
							<a href="images/fulls/01.jpg"><img src="images/thumbs/01.jpg" alt=""></a>
						</article>
					-->					
					
				</div>
			</div>
			
			<!-- Side Scroll arrows -->
			<div class="SZRight" style="right: 0px; position: fixed; width: 40px; height: 250px; z-index: 100; background-image:url('http://ascubed.com/images/example/right_scroll.png'); top: 184px; background-position: initial initial; background-repeat: initial initial;"></div>
			<div class="SZLeft" style="left: 0px; position: fixed; width: 40px; height: 250px; z-index: 100; background-image: url(http://ascubed.com/images/example/left_scroll.png); top: 184px; display: block;"></div>


			<div id="footer">
				<div class="left">
					<!-- <p>Recent highlights from <strong>Daniel Mohr Photography</strong><br><br> -->
					<!-- no contact information here anymore...
					Full highlight albums on <a href="http://www.facebook.com/DanielMohrPhotography">facebook</a>
					phone: 716.775.6498 <br>
					email: danielmohrphotography@live.com <br> -->
					<a href="../index.html" class="bottomButton"><i class="glyphicon glyphicon-home"></i> Home Page</a>
					<div class="buttonDiv"/>
					<a href="http://www.facebook.com/DanielMohrPhotography" class = "bottomButton"><i class="fa fa-facebook"></i> Facebook albums</a>
				</p>
			</div>
			<div class="right">
				<ul class="contact">
					<li><a href="#" class="fa fa-twitter solo"><span>Twitter</span></a></li>
					<li><a href="#" class="fa fa-facebook solo"><span>Facebook</span></a></li>
					<li><a href="#" class="fa fa-google-plus solo"><span>Google+</span></a></li> <!--
					<li><a href="#" class="fa fa-dribbble solo"><span>Dribbble</span></a></li>
					<li><a href="#" class="fa fa-pinterest solo"><span>Pinterest</span></a></li>
					<li><a href="#" class="fa fa-envelope solo"><span>Email</span></a></li> -->
				</ul>
				<div id="copyright">
					&copy; Daniel Mohr Photography</a>
				</div>
			</div>
		</div>

	</div>

</body>
</html>