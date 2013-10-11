<?php

Route::get('/', function()
{
	return View::make('index');
});

Route::get('equipment', function()
{
	return View::make('equipment');
});

Route::get('shop', function()
{
	return View::make('shop');
});

Route::get('contact', function()
{
	return View::make('contact');
});

Route::get('about', function()
{
	return View::make('about');
});