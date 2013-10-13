@extends('layouts.site')


@section('content')


	
	<section id="hero-header" class="section brand2-bg">
		<div class="container">

			<div class="row">
				<div class="col-lg-8 col-md-8">
					<div id="carousel" class="hidden-sm hidden-xs carousel slide">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#carousel" data-slide-to="0" class="active"></li>
							<li data-target="#carousel" data-slide-to="1"></li>
							<li data-target="#carousel" data-slide-to="2"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner">
							<div class="item active">
								<img src="http://placehold.it/800x400" alt="...">
								<div class="carousel-caption">
									some caption
								</div>
							</div>
							<div class="item">
								<img src="http://placehold.it/800x400" alt="...">
								<div class="carousel-caption">
									some caption
								</div>
							</div>
							<div class="item">
								<img src="http://placehold.it/800x400" alt="...">
								<div class="carousel-caption">
									some caption
								</div>
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
				<div class="col-lg-4 col-md-4">
					<h2>
						<small>RENT</small>NOW
					</h2>

					<form>
						<div class="form-group">
							<input type="text" class="form-control datepicker" placeholder="Start Date" />
						</div>
						<div class="form-group">
							<input type="text" class="form-control datepicker" placeholder="End Date" />
						</div>
						<div class="form-group">
							<input type="submit" class="pull-right btn btn-default" value="Send It" />
						</div>
					</form>
				</div>
			</div>
		
		</div>

	</section>





	
	<section id="information" class="section brand1-bg brand2">

		<div class="container">

			<div class="row">
				<div class="col-lg-4 col-md-4 text-center">
					<div class="marketing-image rentals"></div>

					<h2>RENTALS</h2>
					<hr />

					<p>
						Double Diamond Ski and Snowboard Shop is the premier destination for ski and snowboard rentals in Vail, CO. Located literally 33 steps from the Vail gondola @ Lionshead, we offer convenience, high-quality rentals, and an expert staff to help you get the right gear to match your needs. Book your rental gear today and allow Double Diamond to make your Vail ski and/or snowboard trip an unforgettable experience! Plus, we are offering 20% off online rentals and package deals for a limited time, so book today!
					</p>

					<a href="{{ route('rentals') }}" class="btn btn-primary btn-block">Learn More</a>
					<a href="{{ route('rental_packages') }}" class="btn btn-primary btn-block">Rental Packages</a>
				</div>
				<div class="col-lg-4 col-md-4 text-center">
					<div class="marketing-image equipment"></div>

					<h2>EQUIPMENT</h2>
					<hr />

					<p>
						Double Diamond Ski Shop believes in carrying the highest quality ski and snowboard equipment on the market. With brands like --------------------------------------------, no other shop in Vail has the premier selection that we offer. We are the only ski shop in Vail that carries K2 ski boots, and the Fischer Vacufit boot system that ensures a perfect fit. Ask one of our expert ski shop employees to show you the best ski and snowboard products in Vail!
					</p>

					<a href="{{ route('equipment') }}" class="btn btn-primary btn-block">Learn More</a>
				</div>
				<div class="col-lg-4 col-md-4 text-center">
					<div class="marketing-image apparel"></div>

					<h2>APPAREL</h2>
					<hr />

					<p>
						As the premier ski and snowboard shop in Vail that carries select, high quality ski apparel, we have everything you need to look good while making turns in the infamous back bowls of Vail. Not only will you look amazing in our high fashion ski and snowboard apparel, but we have everything you need to stay warm and dry. Come in our shop and we'll show you our incredible apparel selection and make sure you're styling on the slopes of Vail. Don't forget about the infamous apres-ski scene in the Vail Village... Double Diamond's vast selection of high-end fashions and accessories ensures you look good on and off the mountain.
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
					
					@include('contact._content')

				</div>
				<div class="col-lg-6 col-md-6">
					<div id="map-canvas" class="hidden-sm hidden-xs"></div>
				</div>
			</div>

		</div>

	</section>






	<section id="about" class="section brand3-bg brand6 text-center">
		<div class="container">
			@include('about._content')
		</div>
	</section>


@stop