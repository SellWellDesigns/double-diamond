<?php

Route::get('/', function()
{
	return View::make('index');
});

Route::get('equipment', function()
{
	return View::make('equipment');
});