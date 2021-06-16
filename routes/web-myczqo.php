<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Community\MyCzqoController;

Route::group(['middleware' => 'auth'], function () {

    //Privacy accept
    Route::post('/privacyaccept', 'Community\MyCzqoController@acceptPrivacyPolicy')->name('privacyaccept');
    Route::get('/privacydeny', 'Community\MyCzqoController@denyPrivacyPolicy');
    Route::view('/my/accept-privacy-policy', 'my.accept-privacy-policy')->name('accept-privacy-policy');

    //Dashboard/MyCZQO
    Route::get('/dashboard', function () {
        return redirect(route('my.index'), 301);
    });
    Route::get('/my', [MyCzqoController::class, 'viewMyCzqo'])->name('my.index');

    //GDPR
    Route::get('/my/data', 'Users\DataController@index')->name('me.data');
    Route::post('/my/data/export/all', 'Users\DataController@exportAllData')->name('me.data.export.all');

    //Restricted role prohibitation
    Route::group(['middleware' => 'restricted'], function () {

        //Events
        Route::post('/dashboard/events/controllerapplications/ajax', 'Events\EventController@controllerApplicationAjaxSubmit')->name('events.controllerapplication.ajax');

        //Avatars/display name
        Route::post('/users/changeavatar', 'Community\MyCzqoController@changeAvatarCustomImage')->name('users.changeavatar');
        Route::get('/users/changeavatar/discord', 'Community\MyCzqoController@changeAvatarDiscord')->name('users.changeavatar.discord');
        Route::get('/users/changeavatar/initials', 'Community\MyCzqoController@changeAvatarInitials')->name('users.resetavatar');
        Route::post('/users/changedisplayname', 'Community\MyCzqoController@changeDisplayName')->name('users.changedisplayname');

        //CTP
        //Route::post('/dashboard/ctp/signup/post', 'DashboardController@ctpSignUp')->name('ctp.signup.post');

        //Notification
        Route::get('/notification/{id}', 'Users\NotificationRedirectController@notificationRedirect')->name('notification.redirect');
        Route::get('/notificationclear', 'Users\NotificationRedirectController@clearAll');

        //Support
        Route::prefix('support')->group(function () {
            //Support home
            Route::get('/', 'Support\TicketsController@index')->name('support.index');
        });

        //Email prefs
        Route::get('/dashboard/emailpref', 'Users\DataController@emailPref')->name('dashboard.emailpref');
        Route::get('/dashboard/emailpref/subscribe', 'Users\DataController@subscribeEmails');
        Route::get('/dashboard/emailpref/unsubscribe', 'Users\DataController@unsubscribeEmails');

        //"My"
        Route::post('/me/editbiography', 'Community\MyCzqoController@saveBiography')->name('me.editbio');
        Route::get('/me/discord/unlink', 'Community\DiscordController@unlinkDiscord')->name('me.discord.unlink');
        Route::get('/me/discord/link/callback/{param?}', 'Community\DiscordController@linkCallbackDiscord')->name('me.discord.link.callback');
        Route::get('/me/discord/link/{param?}', 'Community\DiscordController@linkRedirectDiscord')->name('me.discord.link');
        Route::get('/me/discord/server/join', 'Community\DiscordController@joinRedirectDiscord')->name('me.discord.join');
        Route::get('/me/discord/server/join/callback', 'Community\DiscordController@joinCallbackDiscord');
        Route::get('/my/preferences', 'Community\MyCzqoController@preferences')->name('my.preferences');
        Route::post('/my/preferences', 'Community\MyCzqoController@preferencesPost')->name('my.preferences.post');

        //Feedback
        Route::prefix('my/feedback')->group(function () {
            Route::get('/new', 'Feedback\FeedbackController@newFeedback')->name('my.feedback.new');
            Route::get('/new/{type_slug}', 'Feedback\FeedbackController@newFeedbackWrite')->name('my.feedback.new.write');
            Route::post('/new/{type_slug}', 'Feedback\FeedbackController@newFeedbackWritePost')->name('my.feedback.new.write.post');
            Route::get('/', 'Feedback\FeedbackController@myFeedback')->name('my.feedback');
            Route::get('/{slug}', 'Feedback\FeedbackController@viewSubmission')->name('my.feedback.submission');
        });

    });
});
