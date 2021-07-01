<?php

use App\Http\Controllers\ViewsController;

Route::get('/', [ViewsController::class, 'home'])->name('index');
Route::get('/map', 'PrimaryViewsController@map')->name('map');
Route::get('/roster', [ViewsController::class, 'controllerRoster'])->name('roster.public');
Route::get('/roster/solo-certs', 'Training\SoloCertificationsController@public')->name('solocertifications.public');
Route::get('/staff', function () { return redirect(route('staff'), 301); });
Route::get('/atc/resources', 'Publications\PublicationsController@atcResources')->name('atcresources.index');
Route::view('/pilots', 'pilots.index');
Route::view('/pilots/oceanic-clearance', 'pilots.oceanic-clearance')->name('pilots.oceanic-clearance');
Route::view('/pilots/position-report', 'pilots.position-report')->name('pilots.position-report');
Route::view('/pilots/tracks', 'pilots.tracks')->name('pilots.tracks');
Route::view('/pilots/tracks/event', 'pilots.event-tracks')->name('pilots.event-tracks');
Route::view('/pilots/tracks/concorde', 'pilots.concorde-tracks')->name('pilots.concorde-tracks');
Route::get('/policies', 'Publications\PublicationsController@policies')->name('policies');
Route::get('/privacy', function () { return redirect(route('policies'), 301); })->name('privacy');
Route::get('/events', 'Events\EventController@index')->name('events.index');
Route::get('/events/{slug}', 'Events\EventController@viewEvent')->name('events.view');

//About
Route::prefix('about')->group(function () {
    Route::get('/', function () { return redirect(route('about.who-we-are'), 301); })->name('about.index');
    Route::view('/who-we-are', 'about.who-we-are')->name('about.who-we-are');
    Route::view('/app', 'about.app')->name('about.app');
    Route::get('/staff', 'Users\StaffListController@index')->name('staff');
});


//Discord shortcut
Route::get('/discord', 'Community\DiscordController@joinShortcut');

//Public news articles
Route::get('/news/{id}', 'News\NewsController@viewArticlePublic')->name('news.articlepublic')->where('id', '[0-9]+');
Route::get('/news/{slug}', 'News\NewsController@viewArticlePublic')->name('news.articlepublic');
Route::get('/news/', 'News\NewsController@viewAllPublic')->name('news');
