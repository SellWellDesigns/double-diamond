<?php

Route::get('/', array(
	'as' => 'index',
	function()
	{
		return View::make('index', array(
			'title'       => 'Ski Shop Vail, CO | Ski Rental & Repair Shops | Double Diamond Vail',
			'description' => 'Double Diamond is a ski shop located in Vail, Colorado. Our ski rental and repair shop offers skis for rent as well as ski repairs and tune-ups in Vail.'
		));
	}
));


Route::get('rentals', array(
	'as' => 'rentals',
	function()
	{
		return View::make('layouts.secondary', array(
			'title' => 'Ski Rentals Vail | Sport Ski & Boot Rental| Kids Ski Rentals',
			'description' => 'Double Diamond offers ski rentals in Vail. We provide sport, demo and performance ski rentals as well as boot rentals for kids and adults in Vail, CO.'
		))->nest('content', 'rentals');
	}
));

Route::get('packages', array(
	'as' => 'packages',
	function()
	{
		return View::make('layouts.secondary', array(
			'title' => 'Ski Rental Packages Vail | Ski Rental Deals & Package Information',
			'description' => 'Double Diamond offers ski rental packages in Vail, CO. Our rental shop provides a variety of ski rental deals as well as ski rental package information.'
		))->nest('content', 'packages');
	}
));

Route::get('equipment', array(
	'as' => 'equipment',
	function()
	{
		return View::make('layouts.secondary', array(
			'title' => 'Ski Gear Vail | Ski Equipment & Gear Rental | Double Diamond Vail',
			'description' => 'Double Diamond carries ski gear in Vail. At our rental store we provide ski equipment and gear including ski boots, bindings and accessories for rent.'
		))->nest('content', 'equipment');
	}
));

Route::get('apparel', array(
	'as' => 'apparel',
	function()
	{
		return View::make('layouts.secondary', array(
			'title' => 'Ski Clothes Vail | Ski Apparel | Snowboard Clothing & Accessories',
			'description' => 'Double Diamond offers ski clothes in Vail, CO. Shop our wide selection of premium, brand name ski and snowboard apparel, clothing and accessories in Vail.'
		))->nest('content', 'apparel');
	}
));

Route::get('repair', array(
	'as' => 'repair',
	function()
	{
		return View::make('layouts.secondary', array(
			'title' => 'Ski Repair Vail | Ski & Snowboard Tuning | Ski Mounting & Tune Ups'
		))->nest('content', 'repair');
	}
));

Route::get('contact', array(
	'as' => 'contact',
	function()
	{
		return View::make('layouts.secondary')->nest('content', 'contact');
	}
));

Route::post('contact', function(){
	$data            = array();
	$data['name']    = Input::get('name');
	$data['email']   = Input::get('email');
	$data['msg'] = Input::get('message');
	$subject         = Input::get('subject');

	Mail::send('emails.contact', $data, function($message) use($subject)
	{
		$message->to('rentals@danaxsports.com', 'Double Diamond Vail')
			->subject($subject);
	});

	return Redirect::route('index');
});

Route::get('about', array(
	'as' => 'about',
	function()
	{
		return View::make('layouts.secondary')->nest('content', 'about');
	}
));