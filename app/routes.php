<?php

Route::get('/', function()
{
	return View::make('index');
});

Route::get('equipment', array(
	'as' => 'equipment',
	function()
	{
		return View::make('equipment');
	}
));

Route::get('shop', array(
	'as' => 'shop',
	function()
	{
		return View::make('shop');
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