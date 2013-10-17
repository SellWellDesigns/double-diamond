@extends('layouts.site')


@section('content')
	<div id="content">
		<div class="container">
            <div class="row">
                <div class="col-lg-8">
        			<div class="well">
        				@include('about._content')
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