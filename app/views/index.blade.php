@extends('layouts.site')


@section('content')


	
	<section id="hero-header" class="section brand2-bg">
		<div class="container">

			<div class="row">
				<div class="col-lg-8 col-md-8">
					<div id="carousel" class="hidden-sm hidden-xs carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#carousel" data-slide-to="0" class="active"></li>
							<li data-target="#carousel" data-slide-to="1"></li>
							<li data-target="#carousel" data-slide-to="2"></li>
							<li data-target="#carousel" data-slide-to="3"></li>
							<li data-target="#carousel" data-slide-to="4"></li>
							<li data-target="#carousel" data-slide-to="5"></li>
							<li data-target="#carousel" data-slide-to="6"></li>
							<li data-target="#carousel" data-slide-to="7"></li>
							<li data-target="#carousel" data-slide-to="8"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner">
							<div class="item active">
								<img src="{{ asset('img/vonn-photo.jpg') }}">
								<div class="carousel-caption">
									Come meet Olympic Gold medalist Lindsey Vonn at Double Diamond on 11/20 from 4:00-6:00pm
								</div>
							</div>
							<div class="item">
								<img src="{{ asset('img/slideshow6.jpg') }}">
							</div>
							<div class="item">
								<img src="{{ asset('img/slideshow1.jpg') }}">
							</div>
							<div class="item">
								<img src="{{ asset('img/slideshow2.jpg') }}">
							</div>
							<div class="item">
								<img src="{{ asset('img/slideshow3.jpg') }}">
							</div>
							<div class="item">
								<img src="{{ asset('img/slideshow4.jpg') }}">
							</div>
							<div class="item">
								<img src="{{ asset('img/slideshow5.jpg') }}">
							</div>
							<div class="item">
								<img src="{{ asset('img/slideshow7.jpg') }}">
							</div>
							<div class="item">
								<img src="{{ asset('img/slideshow8.jpg') }}">
							</div>
						</div>

						<!-- Controls -->
						<a class="left carousel-control" href="#carousel" data-slide="prev">
							<span class="icon-prev"></span>
						</a>
						<a class="right carousel-control" href="#carousel" data-slide="next">
							<span class="icon-next"></span>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-4" id="sidebarRentalForm">
					<img src="{{ asset('img/rent_online.png') }}" class="img-responsive" />
                    @include('_rental_form')
                    <hr />
                    <img src="{{ asset('img/gondola.png') }}" class="img-responsive" />
				</div>
			</div>
		
		</div>

	</section>





	
	<section id="information" class="section brand1-bg brand2">

		<div class="container">

			<div class="row">
				<div class="col-lg-4 col-md-4 text-center">
					<a href="{{ route('rentals') }}">
						<div class="marketing-image rentals"></div>
						<h2>RENTALS</h2>
					</a>

					<hr />

					<p>
						Double Diamond Ski and Snowboard Shop is the premier destination for ski and snowboard rentals in Vail, CO. Located literally 33 steps from the Vail gondola @ Lionshead, we offer convenience, high-quality rentals, and an expert staff to help you get the right gear to match your needs. Book your rental gear today and allow Double Diamond to make your Vail ski and/or snowboard trip an unforgettable experience! Plus, we are offering 20% off online rentals and package deals for a limited time, so book today!
					</p>

					<div class="row">
						<div class="col-lg-6">
							<a href="{{ route('rentals') }}" class="btn btn-primary btn-block">
								Learn More
							</a>
						</div>
						<div class="col-lg-6">
							<a href="{{ route('packages') }}" class="btn btn-info btn-block">
								Rental Packages
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 text-center">
					<a href="{{ route('equipment') }}">
						<div class="marketing-image equipment"></div>
						<h2>EQUIPMENT</h2>
					</a>

					<hr />

					<p>
						Double Diamond Ski Shop believes in carrying the highest quality ski and snowboard equipment on the market. With brands like K2, Rossignol, Vokl, Mammut, Spyder and Fischer.  No other shop in Vail has the premier selection that we offer. We are the only ski shop in Vail that carries K2 ski boots, and the Fischer Vacufit boot system that ensures a perfect fit. Ask one of our expert ski shop employees to show you the best ski and snowboard products in Vail!
						<br />
						<br />
					</p>

					<div class="row">
						<div class="col-lg-6">
							<a href="{{ route('equipment') }}" class="btn btn-primary btn-block">
								Learn More
							</a>
						</div>
						<div class="col-lg-6">
							<a href="{{ route('repair') }}" class="btn btn-info btn-block">
								Services
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 text-center">
					<a href="{{ route('apparel') }}">
						<div class="marketing-image apparel"></div>
						<h2>APPAREL</h2>
					</a>

					<hr />

					<p>
						As the premier ski and snowboard shop in Vail that carries select, high quality ski apparel, we have everything you need to look good while making turns in the infamous back bowls of Vail. Come in our shop and we'll show you our incredible apparel selection and make sure you're styling on the slopes of Vail. Don't forget about the infamous apres-ski scene in the Vail Village... Double Diamond's vast selection of high-end apparel and accessories ensures you look good on and off the mountain.
					</p>

					<a href="{{ route('apparel') }}" class="btn btn-primary btn-block">Learn More</a>
				</div>
			</div>

		</div>

	</section>





	<section id="contact" class="section">

		<div class="container">

			<div class="row">
				<div class="col-lg-6 col-md-6">
					
					@include('contact')

				</div>
				<div id="map-wrapper" class="col-lg-6 col-md-6">
					<div id="map-canvas" class="hidden-sm hidden-xs"></div>
					<img src="{{ asset('img/gondola.png') }}" />
				</div>
			</div>

		</div>

	</section>






	<section id="about" class="section brand3-bg brand6 text-center">
		<div class="container">
			@include('about')
		</div>
	</section>


@stop