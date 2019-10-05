<html>
	<head>
		<title>School Era</title>
		<link rel="stylesheet" href="style.css"/>
		<script src="new.js"></script>
		<link
		rel="stylesheet"
		href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
		/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

	</head>
	<body>
		<!--Image Slider-->
		<div>
			<div class="row">
				<div class="col-xl-12 col-sm-12 col-xs-12">
					<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active" data-interval="1000">
								<img src="img/4.jpg" class="d-block w-100" alt="..." style="height: 625px;">
							</div>
							<div class="carousel-item" data-interval="2000">
								<img src="img/3.jpg" class="d-block w-100" alt="..." style="height: 625px;">
							</div>
							<div class="carousel-item" data-interval="3000">
								<img src="img/1.jpg" class="d-block w-100" alt="..." style="height: 625px;">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
		</div>

		<!--Navigation Bar-->
		<div>
			<div class="row">
				<div class="col-lg-12">
					<nav class="navbar navbar-inverse" style="background-color: black;">
						<div class="container-fluid">
							<div class="navbar-header col-lg-8">
								<a class="navbar-brand" href="index.php">
									<h1>School Era</h1></a>
							</div>
							<div  class="col-lg-2">
								<a href="#">
									<h1> Sign Up</h1></a>
							</div>
							<div class="col-lg-2">
								<a href="#">
									<h1> Login</h1></a>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</div>
		<!--DropDown List for State-->
	<div class="container-fluid">
		<div class="row hero-bkg-animated">
			<div class="col-lg-4">
				<div class="dropdown" >
					<h1>Select State</h1>
					<select id="selectState" class="btn btn-dark dropdown-toggle">
						<option selected >Select State...</option>
						<option value="1">Gujarat</option>
						<option value="2">Maharastra</option>
						<option value="3">Rajsthan</option>
					</select>
				</div>
			</div>
				<!--DropDown List for City-->
				<div class="col-lg-4">
					<div class="dropdown" >
						<h1>Select City</h1>
						<select id="selectCity" class="btn btn-dark dropdown-toggle">
							<option selected >Select City...</option>
							<option value="1">Gujarat</option>
							<option value="2">Maharastra</option>
							<option value="3">Rajsthan</option>
						</select>
					</div>
				</div>
				<!-- Dropdown List for Education level-->
				<div class="col-lg-4">
					<div class="dropdown">
						<h1>Select Education Level</h1>
						<select id="selectEducationLevel" class="btn btn-dark dropdown-toggle">
							<option selected >Select Education Level...</option>
							<option value="1">Pre Primary</option>
							<option value="2">Primary</option>
							<option value="3">Secondary</option>
							<option value="3">Higher Secondary</option>
						</select>
					</div>
				</div>		
			</div>
		</div>
		<footer>
			<div class="row foot">
			<br>
				<div class="col-lg-6">
					
				</div>
				<div class="col-lg-6">
					<div class="row">
						<div class="col-lg-12">
							<b>
								<h1>Social Networks</h1></b>
						</div>
					</div>
					<div class="row">
					<br>
						<div class="col-lg-2">
							<img src="img/facebook_online_social_media-128.png" style="width: 55%;" alt="#"/>
						</div>
						<div class="col-lg-2">
							<img src="img/instagram_online_social_media-128.png" style="width: 55%;" alt="#"/>
						</div>
						<div class="col-lg-2">
							<img src="img/online_social_media_twitter-128.png" style="width: 55%;" alt="#"/>
						</div>
						<div class="col-lg-2">
							<img src="img/online_social_media_linked_in-128.png" style="width: 55%;" alt="#"/>
						</div>
						<div class="col-lg-2">
							<img src="img/whatsapp_social_media_logo-128.png" style="width: 55%;" alt="#"/>
						</div>
						<div class="col-lg-2">
							<img src="img/youtube_online_social_media-128.png" style="width: 55%;" />
						</div>
					</div>
				</div>
				<br>s
			</div>
		</footer>
	</body>
</html>