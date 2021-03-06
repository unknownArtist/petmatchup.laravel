<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Simply tell Laravel the HTTP verbs and URIs it should respond to. It is a
| breeze to setup your application using Laravel's RESTful routing and it
| is perfectly suited for building large applications and simple APIs.
|
| Let's respond to a simple GET request to http://example.com/hello:
|
|		Route::get('hello', function()
|		{
|			return 'Hello World!';
|		});
|
| You can even respond to more than one URI:
|
|		Route::post(array('hello', 'world'), function()
|		{
|			return 'Hello World!';
|		});
|
| It's easy to allow URI wildcards using (:num) or (:any):
|
|		Route::put('hello/(:any)', function($name)
|		{
|			return "Welcome, $name.";
|		});
|
*/
Route::get('auth/register', array('as' => 'register', 'uses' => 'auth@register'));
Route::post('auth/register', array('as' => 'register', 'uses' => 'auth@register'));
Route::get('contact', array('uses' => 'contact@index'));
Route::Controller('auth');

Route::get('login', array('as' => 'login', 'uses' => 'login@login'));
Route::post('login', array('as' => 'login', 'uses' => 'login@login'));
Route::get('logout', array( 'uses' => 'login@logout'));
Route::Controller('login');

Route::get('profile/index',  array('as' => 'index', 'uses' => 'profile@index' ) );
Route::post('profile/index',  array('as' => 'index', 'uses' => 'profile@index' ) );
Route::get('profile/(:num)/edit',  array('as' => 'edit', 'uses' => 'profile@edit' ) );
Route::post('profile/(:num)/edit',  array('as' => 'edit', 'uses' => 'profile@edit' ) );
Route::get('profile/new',  array('as' => 'new', 'uses' => 'profile@new' ) );
Route::post('profile/new',  array('as' => 'new', 'uses' => 'profile@new' ) );
Route::get('profile/(:any)/delete', array('uses'=>'profile@delete'));
Route::Controller('profile');

Route::get('search/index',  array('as' => 'index', 'uses' => 'search@index' ) );
Route::post('search/index',  array('as' => 'index', 'uses' => 'search@index' ) );

Route::Controller('search');

Route::get('contact/index', array('as' => 'index', 'uses' => 'contact@index'));
Route::post('contact/index', array('as' => 'index', 'uses' => 'contact@index'));
Route::Controller('contact');

// Route::get('/', function()
// {
// 	return View::make('home.index');
// });

/*
|--------------------------------------------------------------------------
| Application 404 & 500 Error Handlers
|--------------------------------------------------------------------------
|
| To centralize and simplify 404 handling, Laravel uses an awesome event
| system to retrieve the response. Feel free to modify this function to
| your tastes and the needs of your application.
|
| Similarly, we use an event to handle the display of 500 level errors
| within the application. These errors are fired when there is an
| uncaught exception thrown in the application.
|
*/

Event::listen('404', function()
{
	return Response::error('404');
});

Event::listen('500', function()
{
	return Response::error('500');
});

/*
|--------------------------------------------------------------------------
| Route Filters
|--------------------------------------------------------------------------
|
| Filters provide a convenient method for attaching functionality to your
| routes. The built-in before and after filters are called before and
| after every request to your application, and you may even create
| other filters that can be attached to individual routes.
|
| Let's walk through an example...
|
| First, define a filter:
|
|		Route::filter('filter', function()
|		{
|			return 'Filtered!';
|		});
|
| Next, attach the filter to a route:
|
|		Route::get('/', array('before' => 'filter', function()
|		{
|			return 'Hello World!';
|		}));
|
*/

Route::filter('before', function()
{
	// Do stuff before every request to your application...
});

Route::filter('after', function($response)
{
	// Do stuff after every request to your application...
});

Route::filter('csrf', function()
{
	if (Request::forged()) return Response::error('500');
});

Route::filter('auth', function()
{
	if (Auth::guest()) return Redirect::to('login');
});