<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="<?php if(isset($this->system->logo) && $this->system->logo != '') echo base_url().$this->system->logo; ?>">
	<title><?php echo $title['ar']; ?></title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>trans/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>trans/css/bootstrap-rtl.css">
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url(); ?>trans/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>trans/css/hover-min.css">
	<link href="https://fonts.googleapis.com/css?family=Lalezar" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url(); ?>trans/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>trans/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>trans/css/buttons.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>trans/css/styel.css">
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
				<a href="index.html">
				<img src="css/pic/logo.png" alt="#" title="#" class="img-responsive">
			</a>
			</div>
			<div class="col-lg-4 col-md-4 hidden-sm hidden-xs input-content">
				<a href="asktranslate.html" class="button button--isi button--border-thick button--round-l button--size-s inline-block">	طلب ترجمه</a>
				<div class="contain-box inline-block">
					<div class="input-topsection right-border cloud inline-block">
						<i class="fa fa-cloud "></i>
						<ul class="weather-part ">
							<li><i class="fa fa-cloud"></i> 5°C </li>
							<li><i class="fa fa-cloud"></i> الاربع : 7°C </li>
							<li><i class="fa fa-cloud"></i> التلاثاء : 8°C </li>
							<li><i class="fa fa-cloud"></i> الجمعه : 9°C </li>
						</ul>
					</div>
					<div class="input-topsection fasearch inline-block ">
						<i class="fa fa-search toggle-class"></i>
						<div class="search-box">
							<form>
								<input type="search" placeholder="عن ماذا تبحث ؟">
								<i class="fa fa-search abso"></i>
							</form>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!--                      end top-section                     -->
	<!--                      end top-section                     -->
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

				<!--				<a class="navbar-brand" href="#">الماركه</a>-->
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav menu">
					<li><a href="index.html">الرئيسيه </a></li>
					<li><a href="aboutus.html">من نحن <i class="fa fa-angle-down"></i></a>
						<ul class="sub-menu">
							<a href="normal.html">
								<li>الرؤيه</li>
							</a>
							<a href="normal.html">
								<li>الهدف</li>
							</a>
							<a href="normal.html">
								<li>الجوده</li>
							</a>
							<a href="normal.html">
								<li>الدقه</li>
							</a>
							<a href="normal.html">
								<li>القائد </li>
							</a>
						</ul>
					</li>
					<li><a href="normal.html">الخدمات <i class="fa fa-angle-down"></i></a>
						<ul class="sub-menu">
							<a href="">
								<li>اللغات <i class="fa fa-angle-left"></i>
									<ul class="sub-menu2">
										<a href="normal.html">
											<li>ترجمه الانجليزى</li>
										</a>
										<a href="normal.html">
											<li>لغات حيه <i class="fa fa-angle-left"></i>
												<ul class="sub-menu3">
													<a href="normal.html">
														<li>اللغه الروسى</li>
													</a>
													<a href="normal.html">
														<li>اللغه التركيه</li>
													</a>
													<a href="normal.html">
														<li>اللغه الفرنسيه</li>
													</a>
													<a href="normal.html">
														<li>اللغه الالمانيه</li>
													</a>

												</ul>
											</li>
										</a>
										<a href="normal.html">
											<li>لغات اخرى <i class="fa fa-angle-left"></i>
												<ul class="sub-menu3">
													<a href="normal.html">
														<li>اللغه الصينيه</li>
													</a>
													<a href="normal.html">
														<li>اللغه البروتغاليه</li>
													</a>
													<a href="normal.html">
														<li>اللغه الاسبانيه</li>
													</a>
													<a href="normal.html">
														<li>اللغه السويديه</li>
													</a>
													<a href="normal.html">
														<li>اللغه الاوكرانيه</li>
													</a>
													<a href="normal.html">
														<li>اللغه البلغاريه</li>
													</a>
													<a href="normal.html">
														<li>اللغه العبريه</li>
													</a>
													<a href="normal.html">
														<li>اللغه الايطاليه</li>
													</a>
												</ul>

											</li>
										</a>
									</ul>
								</li>
							</a>
							<a href="asktranslate.html">
								<li>الترجمه <i class="fa fa-angle-left"></i>
									<ul class="sub-menu2">
										<a href="asktranslate.html">
											<li>الترجمه القانونيه</li>
										</a>
										<a href="asktranslate.html">
											<li>الترجمه العامه</li>
										</a>
										<a href="asktranslate.html">
											<li>الترجمه الطبيه</li>
										</a>
										<a href="asktranslate.html">
											<li>الترفيه والسياحه والضيافه</li>
										</a>
										<a href="asktranslate.html">
											<li>الترجمه العسكريه</li>
										</a>
										<a href="asktranslate.html">
											<li>الترجمه الادبيه</li>
										</a>
										<a href="asktranslate.html">
											<li>الترجمه الدينيه</li>
										</a>
									</ul>
								</li>
							</a>
							<a href="asktranslate.html">
								<li> الترجمه الفوريه <i class="fa fa-angle-left"></i>
									<ul class="sub-menu2">
										<a href="asktranslate.html">
											<li>الترجمه الفوريه</li>
										</a>
										<a href="asktranslate.html">
											<li>الترجمه التتبعيه</li>
										</a>
										<a href="asktranslate.html">
											<li>الترجمه الهمسيه</li>
										</a>
										<a href="asktranslate.html">
											<li>معدات الترجمه الفوريه</li>
										</a>
										<a href="normal.html">
											<li>اعمالنا</li>
										</a>
									</ul>
								</li>
							</a>

						</ul>
					</li>
					<li><a href="news.html">الاخبار</a></li>
					<li class="active"><a href="cv.html">السير الذاتيه </a></li>
					<li><a href="normal.html">الاقسام <i class="fa fa-angle-down"></i></a>
						<ul class="sub-menu">
							<a href="normal.html">
								<li>النشر المكتبى</li>
							</a>
							<a href="normal.html">
								<li>التدقيق اللغوى والتحريرى</li>
							</a>
							<a href="normal.html">
								<li>تفريغ صوتيات</li>
							</a>
							<a href="normal.html">
								<li>ترجمه وتعريب محتوى الويب</li>
							</a>
						</ul>
					</li>
					<li><a href="normal.html">انتداب اللغوين والمترجمين </a></li>
					<li><a href="translationwork.html">انضم الى فريقنا <i class="fa fa-angle-down"></i></a>
						<ul class="sub-menu">
							<a href="traning.html">
								<li>التدريب الميدانى للطلاب والطالبات</li>
							</a>
							<a href="translationwork.html">
								<li>مترجمون</li>
							</a>
							<a href="nowtranslataion.html">
								<li>مترجمون فوريون</li>
							</a>
							<a href="freelancer.html">
								<li>انضم لفريق العمل الحر لدينا</li>
							</a>
						</ul>
					</li>
					<li><a href="traning.html">التدريب</a>
						<ul class="sub-menu">
							<a href="courses.html">
								<li>الدورات</li>
							</a>
							<a href="normal.html">
								<li>مبادراه تراجم</li>
							</a>
							<a href="normal.html">
								<li>الخريجين</li>
							</a>
						</ul>
					</li>
					<li><a href="contactusar.html">تواصل معنا</a></li>
					<li><a href="index.html"><img src='css/pic/ar.png' alt="#" title="#"></a></li>
					<li><a href="indexen.html"><img src='css/pic/en.png' alt="#" title="#"></a></li>


				</ul>

			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>

	<!--                end menu 