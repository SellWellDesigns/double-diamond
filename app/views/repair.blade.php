@extends('layouts.site')


@section('content')
	<div id="content">
		<div class="container">
			<h1>Repair</h1>

			<div class="row">
				<div class="col-lg-8">
					<div class="well">
						<p>
							Double Diamond ski and snowboard shop is your most convenient stop to make any last second adjustments to your ride. We also have secure lockers to keep your gear safe and accessible.  Our seasoned staff specializes in:
						</p>

						<ul>
							<li>Ski repair</li>
							<li>Snowboard repair</li>
							<li>Ski tuning</li>
							<li>Snowboard tuning</li>
							<li>Ski mounting</li>
							<li>Ski tune up</li>
							<li>Snowboard tune up</li>
							<li>And any adjustments or upgrades you need!</li>
						</ul>

						<p>
							Lose a pole? Break your bindings? Need a quick adjustment to your settings? Just pop in our slope-side Vail store located 33 steps from the Lionshead gondola and we'll get you back on the mountain.
						</p>

						<img class="img-divider img-responsive" src="{{ asset('img/divider.png') }}" />

						<p>This is why we ski</p>
					</div>
				</div>
				<div class="col-lg-4">
					<h2>
                        <small>RENT</small>NOW
                    </h2>
                    
                    @include('_rental_form')
				</div>
			</div>
		</div>
	</div>
@stop