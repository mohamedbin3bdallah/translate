<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="<?php if(isset($this->system->logo) && $this->system->logo != '') echo base_url().$this->system->logo; ?>">
	<title><?php echo $title['en']; ?></title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>trans/css/bootstrap.css">
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url(); ?>trans/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>trans/css/hover-min.css">
	<link href="https://fonts.googleapis.com/css?family=Lalezar" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url(); ?>trans/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>trans/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>trans/css/buttons.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>trans/css/styelen.css">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- for explorer-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- first moblie meta for resposive-->
	<!--[if lt IE 9]>
		<script src="js/html5shiv.min.js"></script>
		<script src="js/respond.min.js"></script>
            <![endif]-->
</head>

<body>
	<!--                      Start top-section                      -->
	<div class="top-section">
		<div class="container-fluid">

			<div class="col-lg-4 col-md-4 hidden-sm hidden-xs ">
				<div class="social">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-google-plus"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-pinterest"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-youtube-play"></i></a>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 hidden-sm hidden-xs logo">
				<a href="indexen.html">
				<img src="css/pic/logo.png" alt="#" title="#" class="img-responsive">
			</a>
			</div>
			<div class="col-lg-4 col-md-4 hidden-sm hidden-xs input-content">
				<a href="asktranslateen.html" class="button button--isi button--border-thick button--round-l button--size-s inline-block">	
					make order</a>
				<div class="contain-box inline-block">
					<div class="input-topsection left-border cloud inline-block">
						<i class="fa fa-cloud "></i>
						<ul class="weather-part ">
							<li><i class="fa fa-cloud"></i> 5∞C </li>
							<li><i class="fa fa-cloud"></i> wed : 7∞C </li>
							<li><i class="fa fa-cloud"></i> thur : 8∞C </li>
							<li><i class="fa fa-cloud"></i> fri : 9∞C </li>
						</ul>
					</div>
					<div class="input-topsection fasearch inline-block ">
						<i class="fa fa-search toggle-class"></i>
						<div class="search-box">
							<form>
								<input type="search" placeholder="searc about ?">
								<i class="fa fa-search abso"></i>
							</form>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!--                      end top-section                     -->
	<!--                start menu                            -->
	<nav class="navbar navbar-default">
		<div class="container-fluid	">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				<img src="css/pic/logo.png" alt="#" title="#" class="img-responsive hidden-lg hidden-md hidden-sm nav-logo ">

				<!--				<a class="navbar-brand" href="#">«·„«—ﬂÂ</a>-->
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav menu">
					<li><a href="indexen.html">home </a></li>
					<li><a href="aboutusen.html">about us <i class="fa fa-angle-down"></i></a>
						<ul class="sub-menu">
							<a href="normalen.html">
								<li>vision</li>
							</a>
							<a href="normalen.html">
								<li>mission</li>
							</a>
							<a href="normalen.html">
								<li>Work Environment</li>
							</a>
							<a href="normalen.html">
								<li>Quality</li>
							</a>
							<a href="normalen.html">
								<li>Managing Director</li>
							</a>
						</ul>
					</li>
					<li><a href="normalen.html">Services <i class="fa fa-angle-down"></i></a>
						<ul class="sub-menu">
							<a href="normalen.html">
								<li>Language <i class="fa fa-angle-right"></i>
									<ul class="sub-menu2">
										<a href="asktranslate.html">
											<li>English Translation</li>
										</a>
										<a href="normalen.html">
											<li>Major Languages <i class="fa fa-angle-right"></i>
												<ul class="sub-menu3">
													<a href="normalen.html">
														<li>Russian Translation</li>
													</a>
													<a href="normalen.html">
														<li>Turkish Translation</li>
													</a>
													<a href="normalen.html">
														<li>French Translation</li>
													</a>
													<a href="normalen.html">
														<li>German Translation</li>
													</a>

												</ul>
											</li>
										</a>
										<a href="normalen.html">
											<li>Other Languages <i class="fa fa-angle-right"></i>
												<ul class="sub-menu3">
													<a href="normalen.html">
														<li>Chinese Translation</li>
													</a>
													<a href="normalen.html">
														<li>Portuguese Translation</li>
													</a>
													<a href="normalen.html">
														<li>Spanish Translation</li>
													</a>
													<a href="normalen.html">
														<li>Swedish Translation</li>
													</a>
													<a href="normalen.html">
														<li>Ukrainian Translation</li>
													</a>
													<a href="normalen.html">
														<li>Bulgarian Translation</li>
													</a>
													<a href="normalen.html">
														<li>Hebrew Translation</li>
													</a>
													<a href="normalen.html">
														<li>Italian Translation</li>
													</a>
												</ul>

											</li>
										</a>
									</ul>
								</li>
							</a>
							<a href="asktranslateen.html">
								<li>Translation <i class="fa fa-angle-right"></i>
									<ul class="sub-menu2">
										<a href="normalen.html">
											<li>Legal</li>
										</a>
										<a href="normalen.html">
											<li>Medical</li>
										</a>
										<a href="normalen.html">
											<li>General</li>
										</a>
										<a href="normalen.html">
											<li>Tourism &amp; Hospitality</li>
										</a>
										<a href="normalen.html">
											<li>Economic and Financial Translation</li>
										</a>
										<a href="normalen.html">
											<li>Military</li>
										</a>
										<a href="normalen.html">
											<li>literary</li>
										</a>
										<a href="normalen.html">
											<li>Religious</li>
										</a>
									</ul>
								</li>
							</a>
							<a href="normalen.html">
								<li> Interpretation <i class="fa fa-angle-right"></i>
									<ul class="sub-menu2">
										<a href="normalen.html">
											<li>Simultaneous Interpretation</li>
										</a>
										<a href="normalen.html">
											<li>Consecutive Interpretation</li>
										</a>
										<a href="normalen.html">
											<li>Whispered Interpretation</li>
										</a>
										<a href="normalen.html">
											<li>Events and Conference Equipment Supply</li>
										</a>
										<a href="normalen.html">
											<li>Our Works</li>
										</a>
									</ul>
								</li>
							</a>

						</ul>
					</li>
					<li class="active"><a href="cven.html">news</a></li>
					<li><a href="newsen.html">cv</a></li>
					<li><a href="normalen.html">Sectors <i class="fa fa-angle-down"></i></a>
						<ul class="sub-menu">
							<a href="normalen.html">
								<li>Desktop Publishing</li>
							</a>
							<a href="normalen.html">
								<li>Proofreading</li>
							</a>
							<a href="normalen.html">
								<li>Transcription</li>
							</a>
							<a href="normalen.html">
								<li>Localization</li>
							</a>
						</ul>
					</li>
					<li><a href="normalen.html">Linguists Outsourcing </a></li>
					<li><a href="traningen.html">Join Our Team <i class="fa fa-angle-down"></i></a>
						<ul class="sub-menu">
							<a href="traningen.html">
								<li>Interpreters</li>
							</a>
							<a href="nowtranslataionen.html">
								<li>Translators</li>
							</a>
							<a href="freelanceren.html">
								<li>Join Our Pool of Freelancers</li>
							</a>
						</ul>
					</li>
					<li><a href="traningen.html">Training</a>
						<ul class="sub-menu">
							<a href="translationworken.html">
								<li>Training</li>
							</a>
							<a href="nowtranslataionen.html">
								<li>Traajim</li>
							</a>
							<a href="nowtranslataionen.html">
								<li>Alumni</li>
							</a>
						</ul>
					</li>
					<li><a href="contactusen.html">Contact Us</a></li>
					<li><a href="index.html"><img src='css/pic/ar.png' alt="#" title="#"></a></li>
					<li><a href="indexen.html"><img src='css/pic/en.png' alt="#" title="#"></a></li>


				</ul>

			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	<!--                end menu                            -->