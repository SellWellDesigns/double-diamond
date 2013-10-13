<?php

Route::get('/', array(
	'as' => 'index',
	function()
	{
		return View::make('index');
	}
));


Route::get('rentals', array(
	'as' => 'rentals',
	function()
	{
		return View::make('rentals');
	}
));

Route::get('rental_packages', array(
	'as' => 'rental_packages',
	function()
	{
		return View::make('rental_packages');
	}
));

Route::get('equipment', array(
	'as' => 'equipment',
	function()
	{
		return View::make('equipment');
	}
));

Route::get('apparel', array(
	'as' => 'apparel',
	function()
	{
		return View::make('apparel');
	}
));

Route::get('repair', array(
	'as' => 'repair',
	function()
	{
		return View::make('repair');
	}
));

Route::get('contact', array(
	'as' => 'contact',
	function()
	{
		return View::make('contact');
	}
));

Route::get('about', array(
	'as' => 'about',
	function()
	{
		return View::make('about');
	}
));