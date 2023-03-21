@extends('layout.app')
@section('content')

    {{-- Header --}}
    @include('inc.header')

	{{-- <!-- Hero section -->
		<section class="hero-section">
			<div class="hero-slider owl-carousel">
				<div class="hs-item set-bg" data-setbg="img/slider-1.jpg">
					<div class="hs-text">
						<div class="container">
							<h2>The Best <span>Games</span> Out There</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada <br> lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. <br>Suspendisse cursus faucibus finibus.</p>
							<a href="#" class="site-btn">Read More</a>
						</div>
					</div>
				</div>
				<div class="hs-item set-bg" data-setbg="img/slider-2.jpg">
					<div class="hs-text">
						<div class="container">
							<h2>The Best <span>Games</span> Out There</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada <br> lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. <br>Suspendisse cursus faucibus finibus.</p>
							<a href="#" class="site-btn">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- Hero section end --> --}}
	
	{{-- <section class="hero-section">
		<div class="hero-bg">
		</div>
			<div class="hero-imgs">
				<div class="hero-img-top d-flex align-items-center justify-content-between">
					<div class="mr-auto hero-img-1">
						<img src="img/features/1.jpg" alt="">
					</div>
					<div class="ml-auto hero-img-2">
						<img src="img/features/2.jpg" alt="">
					</div>
				</div>
				<div class="hero-img-bottom d-flex align-items-center justify-content-between">
					<div class="mr-auto hero-img-3">
						<img src="img/features/3.jpg" alt="">
					</div>
					<div class="ml-auto hero-img-4">
						<img src="img/features/4.jpg" alt="">
					</div>
				</div>
			</div>
		<div class="hero-headline">
			<div class="hero-headline-inner">
				<h2 class="">WELCOME TO THE OFFICIAL SITE OF ENGAGE</h1>
				<p class="mx-4">With new games, new updates, and new ways to play, join one of the biggest communities in gaming and start crafting today!</p>
				<button class="btn btn-primary">Get Started</button>
			</div>
		</div>
	</section> --}}

	<section class="hero-section">
		<div class="hero-bg" id="hero-bg"></div>
		{{-- Hero Images --}}
		<div class="hero-imgs">
			<div class="hero-img-top row">
				<div class="col-3">
					<div class="text-center">
						<img id="img-1" class="wow animate__animated animate__bounceInLeft" data-wow-delay="1s" src="img/features/1.jpg" alt="">
					</div>
				</div>
				<div class="col-3"></div>
				<div class="col-3"></div>
				<div class="col-3">
					<div class="text-center">
						<img id="img-2" class="wow animate__animated animate__bounceInRight" data-wow-delay="1s" src="img/features/2.jpg" alt="">
					</div>
				</div>
			</div>
			<div class="hero-img-bottom row">
				<div class="col-4">
					<div class="text-center">
						<img id="img-3" class="wow animate__animated animate__bounceInLeft" data-wow-delay="1.5s" src="img/features/3.jpg" alt="">
					</div>
				</div>
				<div class="col-4"></div>
				<div class="col-4">
					<div class="text-center">
						<img id="img-4" class="wow animate__animated animate__bounceInRight" data-wow-delay="1.5s" src="img/features/4.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
		{{-- Hero Headlines --}}
		<div class="hero-headline">
			<div class="hero-headline-inner">
				<h1 class="wow animate__animated animate__bounceInUp">WELCOME TO THE OFFICIAL SITE OF <span class="text-color-2">ENGAGE</span></h1>
				<p class="mx-4 wow animate__animated animate__bounceInUp" data-wow-delay="0.4s">With new games, new updates, and new ways to play, join one of the biggest communities in gaming and start crafting today!</p>
				<button class="btn wow animate__animated animate__bounceInUp" data-wow-delay="0.8s"><i class="fa fa-play"></i> Get Started</button>
			</div>
			{{-- Carousel for Mobile --}}
			<div class="hero-carousel wow animate__animated animate__bounceIn" data-wow-delay="1.2s">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="img/review/1.jpg" class="img-fluid" alt="">
							</div>
						<div class="carousel-item">
							<img src="img/review/2.jpg" class="img-fluid" alt="">
						</div>
						<div class="carousel-item">
							<img src="img/review/3.jpg" class="img-fluid" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>

    {{-- latest News --}}
    @include('inc.latest')

    {{-- Feature section --}}
	<section class="feature-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 p-0">
					<div class="feature-item set-bg" data-setbg="img/features/1.jpg">
						<span class="cata new">new</span>
						<div class="fi-content text-white">
							<h5><a href="#">Suspendisse ut justo tem por, rutrum</a></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
							<a href="#" class="fi-comment">3 Comments</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 p-0">
					<div class="feature-item set-bg" data-setbg="img/features/2.jpg">
						<span class="cata strategy">strategy</span>
						<div class="fi-content text-white">
							<h5><a href="#">Justo tempor, rutrum erat id, molestie</a></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
							<a href="#" class="fi-comment">3 Comments</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 p-0">
					<div class="feature-item set-bg" data-setbg="img/features/3.jpg">
						<span class="cata new">new</span>
						<div class="fi-content text-white">
							<h5><a href="#">Nullam lacinia ex eleifend orci porttitor</a></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
							<a href="#" class="fi-comment">3 Comments</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 p-0">
					<div class="feature-item set-bg" data-setbg="img/features/4.jpg">
						<span class="cata racing">racing</span>
						<div class="fi-content text-white">
							<h5><a href="#">Lacinia ex eleifend orci suscipit</a></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
							<a href="#" class="fi-comment">3 Comments</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Feature section end -->


	<!-- Recent game section  -->
	<section class="recent-game-section spad set-bg" data-setbg="img/recent-game-bg.png">
		<div class="container">
			<div class="section-title">
				<h2>OUR GAMES</h2>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="recent-game-item">
						<div class="rgi-thumb set-bg" data-setbg="img/recent-game/1.jpg">
							<div class="cata new">new</div>
						</div>
						<div class="rgi-content">
							<h5>Suspendisse ut justo tem por, rutrum</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur elit. </p>
							<a href="#" class="comment">3 Comments</a>
							<div class="rgi-extra">
								<div class="rgi-star"><img src="img/icons/star.png" alt=""></div>
								<div class="rgi-heart"><img src="img/icons/heart.png" alt=""></div>
							</div>
						</div>
					</div>	
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="recent-game-item">
						<div class="rgi-thumb set-bg" data-setbg="img/recent-game/2.jpg">
							<div class="cata racing">racing</div>
						</div>
						<div class="rgi-content">
							<h5>Susce pulvinar metus nulla, vel  facilisis sem </h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur elit. </p>
							<a href="#" class="comment">3 Comments</a>
							<div class="rgi-extra">
								<div class="rgi-star"><img src="img/icons/star.png" alt=""></div>
								<div class="rgi-heart"><img src="img/icons/heart.png" alt=""></div>
							</div>
						</div>
					</div>	
				</div>
				{{-- <div class="col-lg-4 col-md-6">
					<div class="recent-game-item">
						<div class="rgi-thumb set-bg" data-setbg="img/recent-game/3.jpg">
							<div class="cata adventure">Adventure</div>
						</div>
						<div class="rgi-content">
							<h5>Suspendisse ut justo tem por, rutrum</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur elit. </p>
							<a href="#" class="comment">3 Comments</a>
							<div class="rgi-extra">
								<div class="rgi-star"><img src="img/icons/star.png" alt=""></div>
								<div class="rgi-heart"><img src="img/icons/heart.png" alt=""></div>
							</div>
						</div>
					</div>	
				</div> --}}
			</div>
		</div>
	</section>
	<!-- Recent game section end -->


	<!-- Tournaments section -->
	<section class="tournaments-section spad">
		<div class="container">
			<div class="tournament-title">Tournaments</div>
			<div class="row">
				<div class="col-md-6">
					<div class="tournament-item mb-4 mb-lg-0">
						<div class="ti-notic">Premium Tournament</div>
						<div class="ti-content">
							<div class="ti-thumb set-bg" data-setbg="img/tournament/1.jpg"></div>
							<div class="ti-text">
								<h4>World Of WarCraft</h4>
								<ul>
									<li><span>Tournament Beggins:</span> June 20, 2018</li>
									<li><span>Tounament Ends:</span> July 01, 2018</li>
									<li><span>Participants:</span> 10 teams</li>
									<li><span>Tournament Author:</span> Admin</li>
								</ul>
								<p><span>Prizes:</span> 1st place $2000, 2nd place: $1000, 3rd place: $500</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="tournament-item">
						<div class="ti-notic">Premium Tournament</div>
						<div class="ti-content">
							<div class="ti-thumb set-bg" data-setbg="img/tournament/2.jpg"></div>
							<div class="ti-text">
								<h4>DOOM</h4>
								<ul>
									<li><span>Tournament Beggins:</span> June 20, 2018</li>
									<li><span>Tounament Ends:</span> July 01, 2018</li>
									<li><span>Participants:</span> 10 teams</li>
									<li><span>Tournament Author:</span> Admin</li>
								</ul>
								<p><span>Prizes:</span> 1st place $2000, 2nd place: $1000, 3rd place: $500</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Tournaments section bg -->


	<!-- Review section -->
	<section class="review-section spad set-bg" data-setbg="img/review-bg.png">
		<div class="container">
			<div class="section-title">
				<h2>Recent Reviews</h2>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="img/review/1.jpg">
							<div class="score yellow">9.3</div>
						</div>
						<div class="review-text">
							<h5>Assasin’’s Creed</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="img/review/2.jpg">
							<div class="score purple">9.5</div>
						</div>
						<div class="review-text">
							<h5>Doom</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="img/review/3.jpg">
							<div class="score green">9.1</div>
						</div>
						<div class="review-text">
							<h5>Overwatch</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="img/review/4.jpg">
							<div class="score pink">9.7</div>
						</div>
						<div class="review-text">
							<h5>GTA</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Review section end -->

    {{-- Footer --}}
    @include('inc.footer')
@endsection