<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\User;
use App\Notifications\CommentNotification;
Route::get('/', function () {
    return view('welcome');
});


Route::get('/aboutus', function () {
    return view('about-us');
});


Route::get('/blog', function () {
    return view('blog');
});

Route::get('/index', function () {
    return view('index');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/single-blog', function () {
    return view('single-blog');
});
Route::get('/index-icons', function () {
    return view('index-icons');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/dashboard', function () {
    return view('pannel');
});

Route::get('/notify',function(){
	$user = User::find(2);
	$user->notify(new CommentNotification("ALi"));
	return "User Notified";
});

Route::get('/readnot',function(){
	$user = User::find(2);
	foreach ($user->unreadNotifications as $not) {

		echo $not['data']['msg'];
		$not->markAsRead();
		echo "<br>";
	}
});

Route::get('/makeappointment', function () {
    return view('makeappointment');
});


Route::get('/sos', function () {
    return view('emergencies');
});


Route::get('/SyriaHos', function () {
    return view('SyriaHos');
});



Route::get('/testdash', function () {
    return view('sublayouts/testdash');
});

Route::get('/myprofile', function () {
    return view('sublayouts2/MyProfile');
});


Route::get('/OnlineDoctor', function () {
    return view('OnlineDoctor');
});


Route::get('/NearestDoctor', function () {
    return view('NearestDoctor');
});
Route::get('/NearestPharmacy', function () {
    return view('NearestPharmacy');
});

Route::get('/OurTeam', function () {
    return view('OurTeam');
});
Route::get('/Maintenance', function () {
    return view('Maintenance');
});

Route::get('/pp', function () {
    return view('patientProgress');
});



