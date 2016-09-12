<!DOCTYPE html>
<html>
<head>

<title>ValuatePro | Home</title>

<!-- For-Mobile-Apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Cubicle a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //For-Mobile-Apps -->

<!-- Custom-Theme-Files -->
	<!-- Bootstrap-Core-CSS --> <link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Style.CSS --> <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Owl-Carousel-CSS --> <link href="css/owl.carousel.css" rel="stylesheet">
	<!-- Swipe-Box-CSS --> <link rel="stylesheet" href="css/swipebox.css">
	<!-- Animate-CSS --> <link href="css/animate.min.css" rel="stylesheet">
<!-- //Custom-Theme-Files -->

<script>
	$(function() {
		$(".meter > span").each(function() {
			$(this)
			.data("origWidth", $(this).width())
			.width(0)
			.animate({
				width: $(this).data("origWidth")
			}, 1200);
		});
	});
</script>

<!-- Web-Fonts -->
	<link href='//fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
	<link href='css/main.css' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<!-- //Web-Fonts -->




<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="/manifest.json">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">




</head>
<body>

	<!-- Header -->
	<div class="header">

		<div class="container">

			<!-- Navigation -->

			<nav class="navbar navbar-inverse navbar-default">
                	
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Logo -->
					<div class="logo">
						<a class="navbar-brand button" href="#"><img  src="images/valuateprologo.gif" alt="ValuatePro Logo"></a>
						 

					</div>
					<!-- //Logo -->

				</div>
				<div id="navbar" class="navbar-collapse navbar-right collapse col-md-6">
               @include('common.notification')

              
					<ul class="nav navbar-nav navbar-right cross-effect" id="cross-effect">
						<li><a class="cross-effect" href="#Home">Home</a></li>
						<li><a class="cross-effect" href="#features">Features</a></li>
						<li><a class="cross-effect" href="#about">About us</a></li>
						<li><a class="cross-effect" href="#portfolio">Gallery</a></li>
						<li><a class="cross-effect" href="#skills">Trial</a></li>
						<li><a class="cross-effect" href="#login_register">Login</a></li>
						<li><a class="cross-effect" href="#login_register">Register</a></li>

					    <li><a class="cross-effect" href="#contact">Contact</a></li>
                   
			

					</ul>
				</div><!-- //Navbar-Collapse -->

			</nav>
			<!-- //Navigation -->

		</div>
		<!-- //Container -->

		<!-- Carousel -->
		<div id="myCarousel" class="carousel slide" data-ride="carousel">

			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img class="first-slide" src="images/5..png" alt="Cubicle">
					<div class="slider-grid-bg">
						<div class="slider-grid-text">
						<h4>
					@if(auth()->guard('employers')->check())
                    <a class=" btn btn-primary next_section" href="{{ URL::to('cmp/index')}}"><i class="fa fa-user" aria-hidden="true">&nbsp; My account</i></a>
                    @endif
                    @if(Auth::check())
                    <a class="btn btn-primary next_section" href="{{ URL::to('emp/index')}}"><i class="fa fa-user" aria-hidden="true">&nbsp; My account</i></a>
                    @endif
						</h4><br>
							<h5>RESPONSIVE</h5>

							<div class="border"></div>
							<p>We are responsive and take responsive action. We say what we mean, we do what we say</p>
						</div>
					</div>
				</div>
				<div class="item">
					<img class="second-slide" src="images/2..png" alt="Cubicle">
					<div class="slider-grid-bg">
						<div class="slider-grid-text">
						<h4>
					@if(auth()->guard('employers')->check())
                    <a class=" btn btn-primary next_section" href="{{ URL::to('cmp/index')}}"><i class="fa fa-user" aria-hidden="true">&nbsp; My account</i></a>
                    @endif
                    @if(Auth::check())
                    <a class="btn btn-primary next_section" href="{{ URL::to('emp/index')}}"><i class="fa fa-user" aria-hidden="true">&nbsp; My account</i></a>
                    @endif
						</h4><br>
							<h5>INTEGRITY</h5>
							<div class="border"></div>
							<p>We act with honor,honesty, and fairness and we hold ourselves to the highest ethical standards.</p>
						</div>
					</div>
				</div>
				<div class="item">
					<img class="third-slide" src="images/1..png" alt="Cubicle">
					<div class="slider-grid-bg">
						<div class="slider-grid-text">
							<h4>
					@if(auth()->guard('employers')->check())
                    <a class=" btn btn-primary next_section" href="{{ URL::to('cmp/index')}}"><i class="fa fa-user" aria-hidden="true">&nbsp; My account</i></a>
                    @endif
                    @if(Auth::check())
                    <a class="btn btn-primary next_section" href="{{ URL::to('emp/index')}}"><i class="fa fa-user" aria-hidden="true">&nbsp; My account</i></a>
                    @endif
						</h4><br>
							<h5>CUSTOMERS FOCUSED</h5>
							<div class="border"></div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
						</div>
					</div>
				</div>
				<div class="item">
					<img class="fourth-slide" src="images/4..png" alt="Cubicle">
					<div class="slider-grid-bg">
						<div class="slider-grid-text">
						<h4>
					@if(auth()->guard('employers')->check())
                    <a class=" btn btn-primary next_section" href="{{ URL::to('cmp/index')}}"><i class="fa fa-user" aria-hidden="true">&nbsp; My account</i></a>
                    @endif
                    @if(Auth::check())
                    <a class="btn btn-primary next_section" href="{{ URL::to('emp/index')}}"><i class="fa fa-user" aria-hidden="true">&nbsp; My account</i></a>
                    @endif
						</h4><br>
							<h5>COLLABORATION</h5>
							<div class="border"></div>
							<p>We support each other internally and externally to achieve our collective goals</p>
						</div>
					</div>
				</div>
				<div class="item">
					<img class="fifth-slide" src="images/3..png" alt="Cubicle">
					<div class="slider-grid-bg">
						<div class="slider-grid-text">
						<h4>
					@if(auth()->guard('employers')->check())
                    <a class=" btn btn-primary next_section" href="{{ URL::to('cmp/index')}}"><i class="fa fa-user" aria-hidden="true">&nbsp; My account</i></a>
                    @endif
                    @if(Auth::check())
                    <a class="btn btn-primary next_section" href="{{ URL::to('emp/index')}}"><i class="fa fa-user" aria-hidden="true">&nbsp; My account</i></a>
                    @endif
						</h4><br>

							<h5>RESULTS ORIENTED</h5>
							<div class="border"></div>
							<p>We take great pride in achieving exceptional outcomes.</p>
						</div>
					</div>
				</div>
			</div>

			<nav class="nav-diamond">
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="icon-wrap" aria-hidden="true"></span>
					<div class="left-arrow">
						<img src="images/hover-left.png" alt="Cubicle"/>
					</div>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="icon-wrap" aria-hidden="true"></span>
					<div class="right-arrow">
						<img src="images/hover-right.png" alt="Cubicle"/>
					</div>
				</a>
			</nav>

		</div>
		<!-- //Carousel -->

	</div>
	<!-- //Header -->

	<!-- Content -->
	<div class="content">

		<!-- Features -->
		<div class="features" id="features">
			<div class="container">

				<h1>Features</h1>
				<div class="heading-underline"></div>

				<h2>We do what we <span>love</span> . We <span>love</span>  what we do.</h2>
				<h3>What we <span>Love To Do</span>.</h3>
				<p>Be sure that we know to do a lot.</p>

				<div class="feature-grid">
					<div class="col-md-4 feature1 slideanim">
						<div class="row features-item sans-shadow text-center">
							<div class="features-icon">
								<img src="images/f1.gif" alt="Cubicle">
							</div>
							<div class="features-info">
								<h4>Mobile Data Collection</h4>
								<p>ValuatePro let you use your mobile device to:

                              Collect field notes and property valuation data in your own way using forms, 
                              Access your documents, upload photos to the project. Valuation data in the field with or without an internet connection
                              Visually plan your day with Calendar integration, navigation support, routing suggestions & more.
                              Add New Property Valuation Project from the field
                              Capture information about each room, no matter how many there are – 7 bedrooms, 2 kitchens, a warehouse with 4 offices?  No problem. </p>
							</div>
							<div class="clearfix"></div>
						</div><!-- //Row -->
					</div>
					<div class="col-md-4 feature1 slideanim">
						<div class="row features-item sans-shadow text-center">
							<div class="features-icon">
								<img src="images/f2.png" alt="Cubicle">
							</div>
							<div class="features-info">
								<h4>Commercial, Rural & Industrial, not just Residential</h4>
								<p>The ability to automate just about any conceivable format of valuation report extends to commercial and all other forms of non-residential valuation work. Our system can be used for Property, Plant & Equipment valuations, industrial and retail, depreciation schedules, agricultural properties.
                                Property Valuable data can be search, used and re-used within your Company like never before.</p>
							</div>
							<div class="clearfix"></div>
						</div><!-- //Row -->
					</div>
					<div class="col-md-4 feature1 slideanim">
						<div class="row features-item sans-shadow text-center">
							<div class="features-icon">
								<img src="images/f3.png" alt="Cubicle">
							</div>
							<div class="features-info">
								<h4>Generate PDF Based Valuation Reports </h4>
								<p>Built-in reports, graphs and maps give you commonly used indicators of how your business is performing. You can take it to the next level with our PDF based customizable reports.  Set up subscriptions so that valuers or clients are sent a customized report every day, week or month and to the Fax or Email address they want to receive it on.
                                </p>
							</div>
							<div class="clearfix"></div>
						</div><!-- //Row -->
					</div>
					
					<div class="clearfix"></div>
				</div>

			</div>
		</div>
		<!-- //Features -->

		<!-- About -->
		<div class="about" id="about">
			<div class="container">

				<h3 class="slideanim">What is ValuatePro?</h3>
				<P> A complete, end-to-end software platform for running a modern property valuation practice. </P>
				<div class="heading-underline"></div>


				<p class="slideanim">ValuetePRO has been designed for use on Web Browsers, iPads, iPhones, android platforms and Windows Tablet devices.
                ValuetePRO is used extensively throughout Rwanda .
                We aim to be a Rwanda leader in software platforms for Property Valuers</p>
				<div class="social slideanim">
					<ul class="social-icons slideanim">
						<li><a href="#" class="facebook" title="Go to Our Facebook Page"></a></li>
						<li><a href="#" class="twitter" title="Go to Our Twitter Account"></a></li>
						<li><a href="#" class="googleplus" title="Go to Our Google Plus Account"></a></li>
						<li><a href="#" class="instagram" title="Go to Our Instagram Account"></a></li>
						<li><a href="#" class="youtube" title="Go to Our Youtube Channel"></a></li>
					</ul>
				</div>

			</div>
		</div>
		<!-- //About -->
		<!-- Portfolio -->
		<div class="portfolio" id="portfolio">
			<div class="container">

				<h3>Portfolio</h3>
				<div class="heading-underline"></div>

				<div class="tabs tabs-style-bar slideanim">
					<nav>
						<ul>
							<li><a href="#section-bar-1" class="icon icon-box"><span>Webpages</span></a></li>
							<li><a href="#section-bar-2" class="icon icon-display"><span>UI Kits</span></a></li>
							<li><a href="#section-bar-3" class="icon icon-upload"><span>PSDs</span></a></li>
							<li><a href="#section-bar-4" class="icon icon-tools"><span>Photography</span></a></li>
						</ul>
					</nav>

					<div class="content-wrap">

						<!-- Tab-1 -->
						<section id="section-bar-1" class="slideanim">
							<h4>Webpages</h4>
							<div class="gallery-grids">
								<div class="col-md-4 gallery-top">
									<figure class="effect-bubba">
										<a href="images/z1.png" class="swipebox">
											<img src="images/z1.png" alt="" class="img-responsive" />
											<figcaption>
												<h4>ValuatePro</h4>
											</figcaption>
										</a>
									</figure>
								</div>
								<div class="col-md-4 gallery-top">
									<figure class="effect-bubba">
										<a href="images/z2.png" class="swipebox">
											<img src="images/z2.png" alt="" class="img-responsive" />
											<figcaption>
												<h4>ValuatePro</h4>
											</figcaption>
										</a>
									</figure>
								</div>
								<div class="col-md-4 gallery-top">
									<figure class="effect-bubba">
										<a href="images/z3.png" class="swipebox">
											<img src="images/z3.png" alt="" class="img-responsive" />
											<figcaption>
												<h4>ValuatePro</h4>
											</figcaption>
										</a>
									</figure>
								</div>
								<div class="col-md-4 gallery-top">
									<figure class="effect-bubba">
										<a href="images/z4.png" class="swipebox">
											<img src="images/z4.png" alt="" class="img-responsive" />
											<figcaption>
												<h4>ValuatePro</h4>
											</figcaption>
										</a>
									</figure>
								</div>
								<div class="col-md-4 gallery-top">
									<figure class="effect-bubba">
										<a href="images/z5.png" class="swipebox">
											<img src="images/z5.png" alt="" class="img-responsive" />
											<figcaption>
												<h4>ValuatePro</h4>
											</figcaption>
										</a>
									</figure>
								</div>
								<div class="col-md-4 gallery-top">
									<figure class="effect-bubba">
										<a href="images/z6.png" class="swipebox">
											<img src="images/z6.png" alt="" class="img-responsive" />
											<figcaption>
												<h4>ValuatePro</h4>
											</figcaption>
										</a>
									</figure>
								</div>
								<div class="col-md-4 gallery-top">
									<figure class="effect-bubba">
										<a href="images/z7.png" class="swipebox">
											<img src="images/z7.png" alt="" class="img-responsive" />
											<figcaption>
												<h4>ValuatePro</h4>
											</figcaption>
										</a>
									</figure>
								</div>
								<div class="col-md-4 gallery-top">
									<figure class="effect-bubba">
										<a href="images/z8.png" class="swipebox">
											<img src="images/z8.png" alt="" class="img-responsive" />
											<figcaption>
												<h4>ValuatePro</h4>
											</figcaption>
										</a>
									</figure>
								</div>
								<div class="col-md-4 gallery-top">
									<figure class="effect-bubba">
										<a href="images/z9.png" class="swipebox">
											<img src="images/z9.png" alt="" class="img-responsive" />
											<figcaption>
												<h4>ValuatePro</h4>
											</figcaption>
										</a>
									</figure>
								</div>
								<div class="clearfix"> </div>
							</div>
						</section>
						<!-- //Tab-1 -->

						<!-- Tab-2 -->
						<section id="section-bar-2" class="slideanim">
							<h4>UI Kits</h4>
							<div class="gallery-grids">
								<div class="col-md-4 gallery-top">
									<figure class="effect-bubba">
										<a href="images/z9.png" class="swipebox">
											<img src="images/z9.png" alt="" class="img-responsive" />
											<figcaption>
												<h4>ValuatePro</h4>
											</figcaption>
										</a>
									</figure>
								</div>
								<div class="col-md-4 gallery-top">
									<figure class="effect-bubba">
										<a href="images/z8.png" class="swipebox">
											<img src="images/z8.png" alt="" class="img-responsive" />
											<figcaption>
												<h4>ValuatePro</h4>
											</figcaption>
										</a>
									</figure>
								</div>
								<div class="col-md-4 gallery-top">
									<figure class="effect-bubba">
										<a href="images/z7.png" class="swipebox">
											<img src="images/z7.png" alt="" class="img-responsive" />
											<figcaption>
												<h4>ValuatePro</h4>
											</figcaption>
										</a>
									</figure>
								</div>
								<div class="col-md-4 gallery-top">
									<figure class="effect-bubba">
										<a href="images/z6.png" class="swipebox">
											<img src="images/z6.png" alt="" class="img-responsive" />
											<figcaption>
												<h4>ValuatePro</h4>
											</figcaption>
										</a>
									</figure>
								</div>
								<div class="col-md-4 gallery-top">
									<figure class="effect-bubba">
										<a href="images/z5.png" class="swipebox">
											<img src="images/z5.png" alt="" class="img-responsive" />
											<figcaption>
												<h4>ValuatePro</h4>
											</figcaption>
										</a>
									</figure>
								</div>
								<div class="col-md-4 gallery-top">
									<figure class="effect-bubba">
										<a href="images/z4.png" class="swipebox">
											<img src="images/z4.png" alt="" class="img-responsive" />
											<figcaption>
												<h4>ValuatePro</h4>
											</figcaption>
										</a>
									</figure>
								</div>
								<div class="col-md-4 gallery-top">
									<figure class="effect-bubba">
										<a href="images/z3.png" class="swipebox">
											<img src="images/z3.png" alt="" class="img-responsive" />
											<figcaption>
												<h4>ValuatePro</h4>
											</figcaption>
										</a>
									</figure>
								</div>
								<div class="col-md-4 gallery-top">
									<figure class="effect-bubba">
										<a href="images/z2.png" class="swipebox">
											<img src="images/z2.png" alt="" class="img-responsive" />
											<figcaption>
												<h4>ValuatePro</h4>
											</figcaption>
										</a>
									</figure>
								</div>
								<div class="col-md-4 gallery-top">
									<figure class="effect-bubba">
										<a href="images/z1.png" class="swipebox">
											<img src="images/z1.png" alt="" class="img-responsive" />
											<figcaption>
												<h4>ValuatePro</h4>
											</figcaption>
										</a>
									</figure>
								</div>
								<div class="clearfix"> </div>
							</div>
						</section>
						<!-- //Tab-2 -->

						<!-- Tab-3 -->
						<section id="section-bar-3" class="slideanim">
							<h4>PSDs</h4>
							<div class="gallery-grids">
								<div class="col-md-4 gallery-top">
									<figure class="effect-bubba">
										<a href="images/z7.png" class="swipebox">
											<img src="images/z7.png" alt="" class="img-responsive" />
											<figcaption>
												<h4>ValuatePro</h4>
											</figcaption>
										</a>
									</figure>
								</div>
								<div class="col-md-4 gallery-top">
									<figure class="effect-bubba">
										<a href="images/z3.png" class="swipebox">
											<img src="images/z3.png" alt="" class="img-responsive" />
											<figcaption>
												<h4>ValuatePro</h4>
											</figcaption>
										</a>
									</figure>
								</div>
								<div class="col-md-4 gallery-top">
									<figure class="effect-bubba">
										<a href="images/z6.png" class="swipebox">
											<img src="images/z6.png" alt="" class="img-responsive" />
											<figcaption>
												<h4>ValuatePro</h4>
											</figcaption>
										</a>
									</figure>
								</div>
								<div class="col-md-4 gallery-top">
									<figure class="effect-bubba">
										<a href="images/z2.png" class="swipebox">
											<img src="images/z2.png" alt="" class="img-responsive" />
											<figcaption>
												<h4>ValuatePro</h4>
											</figcaption>
										</a>
									</figure>
								</div>
								<div class="col-md-4 gallery-top">
									<figure class="effect-bubba">
										<a href="images/z8.png" class="swipebox">
											<img src="images/z8.png" alt="" class="img-responsive" />
											<figcaption>
												<h4>ValuatePro</h4>											</figcaption>
										</a>
									</figure>
								</div>
								<div class="col-md-4 gallery-top">
									<figure class="effect-bubba">
										<a href="images/z1.png" class="swipebox">
											<img src="images/z1.png" alt="" class="img-responsive" />
											<figcaption>
												<h4>ValuatePro</h4>
											</figcaption>
										</a>
									</figure>
								</div>
								<div class="col-md-4 gallery-top">
									<figure class="effect-bubba">
										<a href="images/z4.png" class="swipebox">
											<img src="images/z4.png" alt="" class="img-responsive" />
											<figcaption>
												<h4>ValuatePro</h4>
											</figcaption>
										</a>
									</figure>
								</div>
								<div class="col-md-4 gallery-top">
									<figure class="effect-bubba">
										<a href="images/z9.png" class="swipebox">
											<img src="images/z9.png" alt="" class="img-responsive" />
											<figcaption>
												<h4>ValuatePro</h4>
											</figcaption>
										</a>
									</figure>
								</div>
								<div class="col-md-4 gallery-top">
									<figure class="effect-bubba">
										<a href="images/z5.png" class="swipebox">
											<img src="images/z5.png" alt="" class="img-responsive" />
											<figcaption>
												<h4>ValuatePro</h4>
											</figcaption>
										</a>
									</figure>
								</div>
								<div class="clearfix"> </div>
							</div>
						</section>
						<!-- //Tab-3 -->

						<!-- Tab-4 -->
						<section id="section-bar-4" class="slideanim">
							<h4>Photography</h4>
							<div class="gallery-grids">
								<div class="col-md-4 gallery-top">
									<figure class="effect-bubba">
										<a href="images/z6.png" class="swipebox">
											<img src="images/z6.png" alt="" class="img-responsive" />
											<figcaption>
												<h4>ValuatePro</h4>
											</figcaption>
										</a>
									</figure>
								</div>
								<div class="col-md-4 gallery-top">
									<figure class="effect-bubba">
										<a href="images/z8.png" class="swipebox">
											<img src="images/z8.png" alt="" class="img-responsive" />
											<figcaption>
												<h4>ValuatePro</h4>
											</figcaption>
										</a>
									</figure>
								</div>
								<div class="col-md-4 gallery-top">
									<figure class="effect-bubba">
										<a href="images/z5.png" class="swipebox">
											<img src="images/z5.png" alt="" class="img-responsive" />
											<figcaption>
												<h4>ValuatePro</h4>
											</figcaption>
										</a>
									</figure>
								</div>
								<div class="col-md-4 gallery-top">
									<figure class="effect-bubba">
										<a href="images/z7.png" class="swipebox">
											<img src="images/z7.png" alt="" class="img-responsive" />
											<figcaption>
												<h4>ValuatePro</h4>
											</figcaption>
										</a>
									</figure>
								</div>
								<div class="col-md-4 gallery-top">
									<figure class="effect-bubba">
										<a href="images/z1.png" class="swipebox">
											<img src="images/z1.png" alt="" class="img-responsive" />
											<figcaption>
												<h4>ValuatePro</h4>
											</figcaption>
										</a>
									</figure>
								</div>
								<div class="col-md-4 gallery-top">
									<figure class="effect-bubba">
										<a href="images/z9.png" class="swipebox">
											<img src="images/z9.png" alt="" class="img-responsive" />
											<figcaption>
												<h4>ValuatePro</h4>
											</figcaption>
										</a>
									</figure>
								</div>
								<div class="col-md-4 gallery-top">
									<figure class="effect-bubba">
										<a href="images/z3.png" class="swipebox">
											<img src="images/z3.png" alt="" class="img-responsive" />
											<figcaption>
												<h4>ValuatePro</h4>
											</figcaption>
										</a>
									</figure>
								</div>
								<div class="col-md-4 gallery-top">
									<figure class="effect-bubba">
										<a href="images/z2.png" class="swipebox">
											<img src="images/z2.png" alt="" class="img-responsive" />
											<figcaption>
												<h4>ValuatePro</h4>
											</figcaption>
										</a>
									</figure>
								</div>
								<div class="col-md-4 gallery-top">
									<figure class="effect-bubba">
										<a href="images/z4.png" class="swipebox">
											<img src="images/z4.png" alt="" class="img-responsive" />
											<figcaption>
												<h4>ValuatePro</h4>
											</figcaption>
										</a>
									</figure>
								</div>
								<div class="clearfix"> </div>
							</div>
						</section>
						<!-- //Tab-4 -->
						
					</div><!-- //Content -->
				</div><!-- //Tabs -->

			</div>
		</div>
		<!-- //Portfolio -->

		<!-- Testimonials -->
		<div class="testimonial">
			<div class="container">

				<h3 class="slideanim">Testimonials</h3>
				<div class="heading-underline"></div>

				
            <div class="col-md-12" data-wow-delay="0.1s">
                        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                            <!-- Bottom Carousel Indicators -->
                            <!-- Carousel Slides / Quotes -->
                            <div class="carousel-inner text-center">

                                <!-- Quote 1 -->
                                <div class="item active">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">

                                                <p>It always seems impossible until its done. </p>
                                                <small>Nelson Mandela</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">

                                               <p>Property is intended to serve life, and no matter how much we surround it with rights and respect, it has no personal being. It is part of the earth man walks on. It is not man.</p>
                                                <small>Martin Luther King, Jr.</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">

                                                <p>We are in danger of valuing most highly those things we can measure most accurately, which means that we are often precisely wrong rather than approximately right </p>
                                                <small>Sir John Banham </small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- Quote 2 -->
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">

                                                
                                                <p>Everything that can be counted does not necessarily count; everything that counts cannot necessarily be counted </p>
                                                <small>Albert Einstein </small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- Quote 3 -->
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">

                                                <p>However good our futures research may be, we shall never be able to escape from the ultimate dilemma that all our knowledge is about the past, and all our decisions are about the future</p>
                                                <small>Ian Wilson</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>

                            <!-- Carousel Buttons Next/Prev -->
                            
                        </div>
                    </div>
  






                
			</div>
		</div>
		<!-- //Testimonials -->

		<!-- Skills -->
		<div class="skills" id="skills">
			<div class="container">

				<h3 class="slideanim">Trials</h3>
				<div class="heading-underline"></div>

				

				<p class="slideanim">The best way to assess ValuatePRO is to see it in action for yourself.  
Simply call or e-mail us to arrange a no obligation one-on-one tour of the software over the phone and internet or in person
We’ll walk you through the full Software life cycle, from arrival in your Company through to field data collection, Valuation Process and Generate Reports to client.</p>
<h4 class="slideanim">You can also access ValuatePro in differenet platforms:</h4>




				
				




				<div class="skills-numbers slideanim">
					<div class="num1 slideanim">
						<div class="num-rotate">
							<div class='numscroller'><i class="fa fa-android fa-2x" aria-hidden="true"></i></div>
						</div>
						<h4>Android Devices</h4>
					</div>
					<div class="num1 slideanim">
						<div class="num-rotate">
							<div class='numscroller'><i class="fa fa-apple fa-2x" aria-hidden="true"></i></div>
						</div>
						<h4>Apple Devices</h4>
					</div>
					<div class="num1 slideanim">
						<div class="num-rotate">
							<div class='numscroller'><i class="fa fa-windows fa-2x" aria-hidden="true"></i></div>
						</div>
						<h4>Windows Devices</h4>
					</div>
					<div class="num1 slideanim">
						<div class="num-rotate">
							<div class='numscroller'><i class="fa fa-tablet fa-2x" aria-hidden="true"></i></div>
						</div>
						<h4>Tablets</h4>
					</div>
					<div class="num1 slideanim">
						<div class="num-rotate">
							<div class='numscroller'><i class="fa fa-desktop fa-2x" aria-hidden="true"></i></div>
						</div>
						<h4>Desktops</h4>
					</div>
					<div class="clearfix"></div>
				</div>

				<div id="about-us" class="parallax">
					<div class="row">
						<div class="our-skills wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">



						</div>
					</div>
				</div>

			</div>
		</div>
		<!-- //Skills -->

		<!-- Stats -->
		<div class="stats" id="login_register">
			<div class="container">
			<h3 class="slideanim">User Account </h3>


<div class="col-md-12">
<div class="col-md-6 login">
<h3 class="slideanim">Login </h3>
<div class="heading-underline1"></div>
 <p>If you are a registered certified valuer, please login<br>
<button class="more_btn cert_login">Certified Valuer</button><br><br>
If you are a registered valuer,please login <br>
<button class="more_btn valuer_login">Valuer</button></p>


	
</div>


<div class="col-md-6 register">
<h3 class="slideanim">Register </h3>
<div class="heading-underline1"></div>

<p>If you are a certified valuer, please register<br>
<button class="more_btn cert_register">Certified Valuer</button><br><br>
If you are a registered valuer, please register <br>
<button class="more_btn valuer_register">Valuer</button></p>



</div>

	
</div>
			
				<div class="heading-underline"></div>


			</div>
		</div>
		<!-- //Stats -->

		<!-- Clients -->
		<div class="clients">
			<div class="container">

				<h3>Our Partners</h3>
				<div class="heading-underline"></div>

				<!-- Screen-Gallery-Carousel -->
				<div id="owl-demo" class="owl-carousel text-center slideanim">
					<div class="item">
						<img class="lazyOwl" src="images/company1.png" alt="Cubicle">
					</div>
					<div class="item">
						<img class="lazyOwl" src="images/company2.png" alt="Cubicle">
					</div>
					<div class="item">
						<img class="lazyOwl" src="images/company3.png" alt="Cubicle">
					</div>
					<div class="item">
						<img class="lazyOwl" src="images/company4.png" alt="Cubicle">
					</div>
					<div class="item">
						<img class="lazyOwl" src="images/company5.png" alt="Cubicle">
					</div>
					<div class="item">
						<img class="lazyOwl" src="images/company6.gif" alt="Cubicle">
					</div>
					<div class="item">
						<img class="lazyOwl" src="images/company7.png" alt="Cubicle">
					</div>
					<div class="item">
						<img class="lazyOwl" src="images/company8.png" alt="Cubicle">
					</div>
					<div class="item">
						<img class="lazyOwl" src="images/company9.png" alt="Cubicle">
					</div>
					<div class="item">
						<img class="lazyOwl" src="images/company10.png" alt="Cubicle">
					</div>
				</div>
				<!-- //Screen-Gallery-Carousel -->

			</div>
		</div>
		<!-- Skills -->

		<!-- Team -->
		<div class="team" id="team">
			<div class="container">
			
				<h3>FAQ's</h3>
				<div class="heading-underline"></div>

				<p class="slideanim">ValuetePRO has been designed for use on Web Browsers, iPads, iPhones, android platforms and Windows Tablet devices.
                ValuetePRO is used extensively throughout Rwanda .
                We aim to be a Rwanda leader in software platforms for Property Valuers</p>

			    <p class="slideanim">
				<ul>
					<li>We don't share your data with anyone; you own your data – period.</li>
					<li>We have field data collection solutions for Windows, iPad and iPhone – mix and match devices within your firm – lets your valuers bring their favorite device to work</li>
					<li>Extensive Training and Support is available and included – on-line or on-site</li>
					<li>We import all your existing data from any existing Valuation software system or File Server</li>
					<li>Highly Cost Effective – statistically costs between 0.7% to 1.2% of turnover with an average 50% productivity and operating efficiency gain.</li>
					<li>Vastly more effective and sustainable than building your own IT solution, while still being flexible and programmable to make it your own</li>
				</ul>
				</p>

			</div>
		</div>
		<!-- Team -->

		<!-- Contact -->
		<div class="contact" id="contact">
			<div class="container">

				<h3>Contact us</h3>
				<div class="heading-underline"></div>

				<form class="contact_form slideanim">

					<div class="message">
						<div class="col-md-6 col-sm-6 grid_6 c1">
							<input type="text" class="text" value="Name" placeholder="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
							<input type="text" class="text" value="Email" placeholder="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
							<input type="text" class="text" value="Phone" placeholder="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}">
						</div>

						<div class="col-md-6 col-sm-6 grid_6 c1">
							<textarea placeholder="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
						</div>
						<div class="clearfix"></div>
					</div>

					<input type="submit" class="more_btn" value="Send Message">
				</form>

			</div>
		</div>
		<!-- //Contact -->

	</div>
	<!-- //Content -->

	<!-- Footer -->
	<div class="footer">
		<div class="container">

			<div class="footer-info slideanim">
				<div class="col-md-3 col-sm-3 footer-info-grid links">
					<h4>QUICK LINKS</h4>
					<ul>
						<li><a  href="#features">Features</a></li>
						<li><a  href="#about">About us</a></li>
						<li><a  href="#portfolio">Gallery</a></li>
						<li><a  href="#trial">Trial</a></li>
					    <li><a  href="#contact">Contact</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-3 footer-info-grid services">
					<h4>SPECIALIZE</h4>
					<ul>
						<li>Data Collection</li>
						<li>Analyze Data</li>
						<li>Process Data</li>
						<li>Generate Reports</li>
						<li>Allow to print PDF files</li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-3 footer-info-grid address">
					<h4>ADDRESS</h4>
					<address>
						<ul>
							<li>ValuatePro</li>
							<li>Property Valuation Software</li>
							<li>Kigali, Rwanda</li>
							<li>Telephone : +250788888888</li>
						</ul>
						<p>Email : <a class="mail" href="mailto:mail@serge&chris.com">info(at)ValuatePro.com</a></p>
					</address>
				</div>
				<div class="col-md-3 col-sm-3 footer-info-grid email">
					<h4>ValuatePro</h4>
					<p>Subscribe to ValuatePro and we will inform you about Updates and promotions.
					</p>

					<form class="newsletter">
						<input class="email" type="email" placeholder="Your email...">
						<input type="submit" class="submit" value="">
					</form>
				</div>
				<div class="clearfix"></div>
			</div>

			<div class="copyright slideanim">
				<p>&copy; 2016 ValuatePro. All Rights Reserved | Design by <a href="http://Serge & Chris.com/"> Serge & Chris </a></p>
			</div>

		</div> 
	</div>



	<div class="modal fade" tabindex="-1" role="dialog" id="login_cert_modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
                 <div class="form_header modal-title"><h2>Certified Valuer Account</h2></div>
      </div>
      <div class="modal-body">
    
        @include('common.login-error')
 
           <div class="login">
           {!! Form::open(array('url'=>'cmp/signin')) !!} 
               <div class="form-group input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i> </span>
               {!! Form::text('email','',array('class'=>'form-control may','placeholder'=>'Email')) !!}
               
            </div>
            <div class="form-group input-group">
       <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i> </span>

               {!! Form::password('password',array('class'=>'form-control','placeholder'=>'Password')) !!}
             </div>
            </div>

      </div>
      <div class="modal-footer">
    
      	
      {!! Form::submit('Login', array('class'=>'btn btn-primary btn-block')) !!}
           
      
     

           {!! Form::close()!!}

         
            
      </div>
      <div class="forgotpass">
      	
                  	<a href="#">Forgot password?</a><br>
      </div>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" tabindex="-1" role="dialog" id="login_valuer_modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
                 <div class="form_header modal-title"><h2>Valuer Account</h2></div>
      </div>
      <div class="modal-body">
    
        @include('common.login-error')
 
           <div class="login">
           {!! Form::open(array('url'=>'emp/signin')) !!} 

                  

                    
                <div class="form-group input-group">

                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i> </span>
               {!! Form::text('email','',array('class'=>'form-control ','placeholder'=>'Email')) !!}
               
            </div>
            
 
            
             <div class="form-group input-group">
       <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i> </span>

               {!! Form::password('password',array('class'=>'form-control','placeholder'=>'Password')) !!}
             </div>
            
            
            

            
           </div>

      </div>
      <div class="modal-footer">
      
      	
      {!! Form::submit('Login', array('class'=>'btn btn-primary btn-block')) !!}
           

     

           {!! Form::close()!!}

         
            
      </div>
      <div class="forgotpass">
      	
                  	<a href="#">Forgot password?</a><br>
      </div>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="register_cert_modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Certified Valuer Registration</h4>
      </div>
      <div class="modal-body">

         <div class="signup-div row">
           
           @include('common.errors')
            {!! Form::open(array('url'=>'cmp/signup')) !!} 
               {!! Form::hidden('_token', csrf_token() )  !!}
               
                 <div class="col-md-8">

           
                 <fieldset>
                   <legend>Personal Information</legend>
                  <div class="form-group">
                      
               {!! Form::text('company_name','',array('class'=>'form-control','placeholder'=>'Company Name')) !!}
                    </div>
                    

                    <div class="form-group">
                      
               {!! Form::text('first_name','',array('class'=>'form-control','placeholder'=>'First Name')) !!}
                    </div>
                    <div class="form-group">
                      
               {!! Form::text('last_name','',array('class'=>'form-control','placeholder'=>'Last Name')) !!}
                    </div>

                    <div class="form-group">
                      
               {!! Form::text('telephone','',array('class'=>'form-control','placeholder'=>'Telephone')) !!}
                    </div>


                    <div class="form-group">
                      
               {!! Form::text('professional_status','',array('class'=>'form-control','placeholder'=>'Professional status')) !!}
                    </div>
                    <div class="form-group">
                      
               {!! Form::text('reg_no_in_certified_valuers','',array('class'=>'form-control','placeholder'=>'Registration number in certified valuers')) !!}
                    </div>
                    
                   
                 </fieldset>
                 </div>

                   <div class="col-md-4">
                    <fieldset>
                 <legend>Location</legend>
                  <div class="form-group">
                      
               {!! Form::select('province',array('Kigali'=>'Kigali','Northern Province'=>'Northern Province','Western Province'=>'Western Province'), null, array('class'=>'form-control', 'placeholder'=>'Province')) !!}
                    </div>
                     <div class="form-group">
                      
               {!! Form::select('district',array('Gasabo'=>'Gasabo','Kicukiro'=>'Kicukiro','Nyarugenge'=>'Nyarugenge'), null, array('class'=>'form-control', 'placeholder'=>'District')) !!}
                    </div>
                     <div class="form-group">
                      
               {!! Form::select('sector',array('Muhima'=>'Muhima','Gikondo'=>'Gikondo','Kimihurura'=>'Kimihurura'), null, array('class'=>'form-control', 'placeholder'=>'Sector')) !!}
                    </div>
                     <div class="form-group">
                      
               {!! Form::select('cell',array('Muhima'=>'Muhima','Gikondo'=>'Gikondo','Kimihurura'=>'Kimihurura'), null, array('class'=>'form-control', 'placeholder'=>'Cell')) !!}
                    </div>
                     <div class="form-group">
                      
               {!! Form::select('village',array('Kabuga'=>'Kabuga','Nyakabanda'=>'Nyakabanda','Kabeza'=>'Kabeza'), null, array('class'=>'form-control', 'placeholder'=>'Village')) !!}
                    </div>

                    <div class="form-group">
                      
               {!! Form::text('campany_address','',array('class'=>'form-control','placeholder'=>'Campany Address')) !!}
                    </div>
                    </fieldset>
                     
                   </div>
                   <div class="col-md-12">


                   <fieldset>
                     <legend>Email & Password</legend>
                     <div class="form-group">
                      
               {!! Form::text('email','',array('class'=>'form-control','placeholder'=>'Email')) !!}
                    </div>
               
                   <div class="form-group">
               {!! Form::password('password',array('class'=>'form-control','placeholder'=>'Password')) !!}
                    
                   </div>
                    <div class="form-group">
               {!! Form::password('password_confirmation',array('class'=>'form-control','placeholder'=>'Confirm Password')) !!}
            </div>
                   </fieldset>
                     

               

           
                 </div>

                 
                
                
            

            
           </div>

</div>



      <div class="modal-footer">
     
      	
  {!! Form::submit('Sign up', array('class'=>'btn btn-primary btn-block')) !!}
    
       
     
      	{!! Form::close()!!}
      

       </div>
       <div class="signup_privacy">
       
                      <p>By signing up, you agree to our <b> Terms & Privacy Policy.</b></p>

      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="register_valuer_modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Valuer Registration</h4>
      </div>
      <div class="modal-body">
        <div class="signup-div row">
           
           @include('common.errors');
            {!! Form::open(array('url'=>'emp/signup')) !!} 
               {!! Form::hidden('_token', csrf_token() )  !!}
             
                 <div class="col-md-12">

           
                 <fieldset>
                   <legend>Personal Information</legend>
                  <div class="form-group">
                      
               {!! Form::select('employer_id',$employer->lists('company_name','id'), null, array('class'=>'form-control', 'placeholder'=>'Company','div'=>'category')) !!}
                    </div>
                    

                    <div class="form-group">
                      
               {!! Form::text('first_name','',array('class'=>'form-control','placeholder'=>'First Name')) !!}
                    </div>
                    <div class="form-group">
                      
               {!! Form::text('last_name','',array('class'=>'form-control','placeholder'=>'Last Name')) !!}
                    </div>

                    <div class="form-group">
                      
               {!! Form::text('telephone','',array('class'=>'form-control','placeholder'=>'Telephone')) !!}
                    </div>


                    
                    
                    
                   
                 </fieldset>
                 </div>

                   <!-- <div class="col-md-4">
                    <fieldset>
                 <legend>Location</legend>
                  <div class="form-group">
                      
               {!! Form::select('province',array('Kigali'=>'Kigali','Northern Province'=>'Northern Province','Western Province'=>'Western Province'), null, array('class'=>'form-control', 'placeholder'=>'Province')) !!}
                    </div>
                     <div class="form-group">
                      
               {!! Form::select('district',array('Gasabo'=>'Gasabo','Kicukiro'=>'Kicukiro','Nyarugenge'=>'Nyarugenge'), null, array('class'=>'form-control', 'placeholder'=>'District')) !!}
                    </div>
                     <div class="form-group">
                      
               {!! Form::select('sector',array('Muhima'=>'Muhima','Gikondo'=>'Gikondo','Kimihurura'=>'Kimihurura'), null, array('class'=>'form-control', 'placeholder'=>'Sector')) !!}
                    </div>
                     <div class="form-group">
                      
               {!! Form::select('cell',array('Muhima'=>'Muhima','Gikondo'=>'Gikondo','Kimihurura'=>'Kimihurura'), null, array('class'=>'form-control', 'placeholder'=>'Cell')) !!}
                    </div>
                     <div class="form-group">
                      
               {!! Form::select('village',array('Kabuga'=>'Kabuga','Nyakabanda'=>'Nyakabanda','Kabeza'=>'Kabeza'), null, array('class'=>'form-control', 'placeholder'=>'Village')) !!}
                    </div>

                    
                    </fieldset>
                     
                   </div> -->
                   <div class="col-md-12">


                   <fieldset>
                     <legend>Email & Password</legend>
                     <div class="form-group">
                      
               {!! Form::text('email','',array('class'=>'form-control','placeholder'=>'Email')) !!}
                    </div>
               
                   <div class="form-group">
               {!! Form::password('password',array('class'=>'form-control','placeholder'=>'Password')) !!}
                    
                   </div>
                    <div class="form-group">
               {!! Form::password('password_confirmation',array('class'=>'form-control','placeholder'=>'Confirm Password')) !!}
            </div>
                   </fieldset>
                     

               
                 </div>

                 
                   </div>
                   


      </div>
      <div class="modal-footer">
         {!! Form::submit('Sign up', array('class'=>'btn btn-primary btn-block')) !!}

           {!! Form::close()!!}
           

      </div>
      <div class="signup_privacy">
           	
                      <p>By signing up, you agree to our <b> Terms & Privacy Policy.</b></p>
           </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
	<!-- //Footer -->


<!-- Custom-JavaScript-File-Links -->
	<!-- Supportive-JavaScript --> <script type="text/javascript" src="js/jquery.min.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap --> <script type="text/javascript" src="js/bootstrap.min.js"></script>

	<!-- Slideanim-JavaScript -->
	<script type="text/javascript">
		$(window).scroll(function() {
	 		$(".slideanim").each(function(){
				var pos = $(this).offset().top;
				var winTop = $(window).scrollTop();
					if (pos < winTop + 600) {
					$(this).addClass("slide");
				}
			});
		});
	</script>
	<!-- //Slideanim-JavaScript -->

	<!-- Gallery-Tab-JavaScript -->
	<script src="js/cbpFWTabs.js"></script>
	<script>
		(function() {
			[].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
				new CBPFWTabs( el );
			});
		})();
	</script>
	<!-- //Gallery-Tab-JavaScript -->

	<!-- Swipe-Box-JavaScript -->
		<script src="js/jquery.swipebox.min.js"></script> 
			<script type="text/javascript">
				jQuery(function($) {
					$(".swipebox").swipebox();
				});
		</script>
	<!-- //Swipe-Box-JavaScript -->

	<!-- Owl-Carousel-JavaScript -->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function() {
			$("#owl-demo").owlCarousel ({
				items : 8,
				lazyLoad : true,
				autoPlay : true,
				speed: 900,
				pagination : false,
			});
		});
	</script>
	<!-- //Owl-Carousel-JavaScript -->

	<!-- Slide-To-Top JavaScript (No-Need-To-Change) -->
	<script type="text/javascript">
		$(document).ready(function() {
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 100,
				easingType: 'linear'
			};
			$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 0;"> </span></a>
	<!-- //Slide-To-Top JavaScript -->

	<!-- Smooth-Scrolling-JavaScript -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll, .navbar li a, .footer li a").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>

	<!-- //Smooth-Scrolling-JavaScript -->

	<!-- Skills-Animation-JavaScript -->
	<script type="text/javascript" src="js/jquery.inview.min.js"></script>
	<script type="text/javascript" src="js/wow.min.js"></script>
	<script type="text/javascript" src="js/mousescroll.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<!-- //Skills-Animation-JavaScript -->

	<script type="text/javascript" src="js/numscroller-1.0.js"></script>

<!-- //Custom-JavaScript-File-Links -->

<!-- Images are for reference and illustration puropse only. Images were taken from https://pixabay.com and icons were taken from www.flaticon.com and Portfolio section images were the sceenshots of templates by http://w3layouts.com -->
<!-- Flaticon Links:
	Icons made by "http://www.freepik.com" from "http://www.flaticon.com" is licensed by "http://creativecommons.org/licenses/by/3.0/" CC 3.0. BY
-->

</body>
</html>