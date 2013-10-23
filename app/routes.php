<?php

Route::get('/', array(
	'as' => 'index',
	function()
	{
		return View::make('index', array(
			'title' => 'Ski Shop Vail, Colorado | Snowboard Shops | Double Diamond Ski Shop'
		));
	}
));


Route::get('rentals', array(
	'as' => 'rentals',
	function()
	{
		return View::make('layouts.secondary')->nest('content', 'rentals', array(
			'title' => 'Ski Rental Vail | Ski & Snowboard Equipment, Gear & Boot Rentals'
		));
	}
));

Route::get('packages', array(
	'as' => 'packages',
	function()
	{
		return View::make('layouts.secondary')->nest('content', 'packages', array(
			'title' => 'Rental Package Vail | Ski & Snowboard Rental Packages | Kids Rental'
		));
	}
));

Route::get('equipment', array(
	'as' => 'equipment',
	function()
	{
		return View::make('layouts.secondary')->nest('content', 'equipment', array(
			'title' => 'Ski Equipment Vail, Colorado | Snowboard Equipment & Hardgoods'
		));
	}
));

Route::get('apparel', array(
	'as' => 'apparel',
	function()
	{
		return View::make('layouts.secondary')->nest('content', 'apparel', array(
			'title' => 'Ski Clothing Vail | Snowboard Clothing | Ski Apparel & Accessories'
		));
	}
));

Route::get('repair', array(
	'as' => 'repair',
	function()
	{
		return View::make('layouts.secondary')->nest('content', 'repair', array(
			'title' => 'Ski Repair Vail | Ski & Snowboard Tuning | Ski Mounting & Tune Ups'
		));
	}
));

Route::get('contact', array(
	'as' => 'contact',
	function()
	{
		return View::make('layouts.secondary')->nest('content', 'contact');
	}
));

Route::get('about', array(
	'as' => 'about',
	function()
	{
		return View::make('layouts.secondary')->nest('content', 'about');
	}
));