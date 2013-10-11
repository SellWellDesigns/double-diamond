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
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>
				<div class="col-lg-4 col-md-4 text-center">
					<div class="marketing-image equipment"></div>

					<h2>EQUIPMENT</h2>
					<hr />

					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>
				<div class="col-lg-4 col-md-4 text-center">
					<div class="marketing-image apparel"></div>

					<h2>APPAREL</h2>
					<hr />

					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>
			</div>

		</div>

	</section>





	<section id="contact" class="section">

		<div class="container">

			<div class="row">
				<div class="col-lg-6 col-md-6">
					
					<h2>CONTACT<small>US</small></h2>

					<form class="contact-form" action="" method="">
						<fieldset>

							<div class="row">
								<div class="col-lg-6">
									<input class="form-control" type="text" name="" placeholder="Your Name" />
								</div>
								<div class="col-lg-6">
									<input class="form-control" type="text" name="" placeholder="Your Email" />
								</div>
							</div>
							
							<div class="row">
								<div class="col-lg-12">
									<input class="form-control" type="text" name="" placeholder="Subject" />
								</div>
							</div>

							<div class="row">
								<div class="col-lg-12">
									<textarea class="form-control" placeholder="Message" rows="8"></textarea>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-8">
									<i class="phone-icon pull-left"></i>
									<h4>Call: (970) 476-5500</h4>
								</div>
								<div class="col-lg-4 text-right">
									<input type="submit" value="Send It" class="btn btn-primary" />
								</div>
							</div>

						</fieldset>
					</form>

				</div>
				<div class="col-lg-6 col-md-6">
					<div id="map-canvas" class="hidden-sm hidden-xs"></div>
				</div>
			</div>

		</div>

	</section>






	<section id="about" class="section brand3-bg brand6 text-center">
		<div class="container">
			<h1>About Double Diamond</h1>
			
			<img class="img-divider img-responsive" src="{{ asset('img/divider.png') }}" />

			<p class="lead">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			</p>

			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>
	</section>


@stop