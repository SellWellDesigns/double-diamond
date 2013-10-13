@extends('layouts.site')


@section('content')
	<div id="content">
		<div class="container">
			<h1>Rentals</h1>

			<div class="row">
				<div class="col-lg-8">
					<div class="well">
						<h2>save 20% today by renting online!</h2>

						<a href="{{ route('rental_packages') }}" class="btn btn-primary btn-block">Rental Packages</a>

						<p>
							Looking for the preeminent ski and snowboard rental shop in Vail? Double Diamond carries the best ski and snowboard equipment for rent in the Vail Valley, and we are literally steps from the gondola. We offer the following ski and snowboard equipment to rent, buy, or demo for the day (logos?):
						</p>

						<ul>
							<li>Volkl</li>
							<li>Nordica</li>
							<li>K2</li>
							<li>Rossignal</li>
							<li>Blizzard</li>
							<li>Armada</li>
							<li>Burton</li>
						</ul>

						<p>
							Double Diamond also offers ski boot rental and snowboard boot rental, and will have your rentals waiting for you 33 steps from Vail mountain.
						</p>

						<p>
							Have questions? Please contact us and one of our expert staff members will help you find the ski and snowboard rental that best fits you! This is why we ski!
						</p>

						<img class="img-divider img-responsive" src="{{ asset('img/divider.png') }}" />
					</div>
				</div>
				<div class="col-lg-4">

				</div>
			</div>
		</div>
	</div>
@stop