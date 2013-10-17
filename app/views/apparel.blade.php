@extends('layouts.site')


@section('content')
	<div id="content">
		<div class="container">
			<h1>Apparel</h1>

			<div class="row">
				<div class="col-lg-8">
					<div class="well">
						<p>
							At Double Diamond we carry exclusive ski apparel that no other Vail shop has, including high-end ski and snowboard clothing. Our convenient Vail location has the widest selection of premium ski and snowboard apparel and accessories in the Vail Valley. We understand the importance of functional ski apparel, while also understanding the need to look stylish on the mountain and for the fabulous Vail Apres-ski scene.
						</p>

						<p>
							We carry the following premium ski and snowboard clothing brands (LOGOS?):
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
							Make sure to stop by Double Diamond Ski Shop when you arrive in Vail and we'll make sure you leave in style.
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