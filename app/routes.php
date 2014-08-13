<?php

// Put this in a service provider
App::singleton('Pusher', function($app) {
    $keys = $app['config']->get('services.pusher');

    return new Pusher(
        $keys['public'],
        $keys['secret'],
        $keys['app_id']
    );
});

/**
 * The home page
 */
Route::get('/', function() {
    return View::make('home');
});

/**
 * This test route will trigger the server event.
 */
Route::any('test', function()
{
    App::make('Pusher')->trigger(
        'demo',
        'PostWasPublished',
        ['title' => 'My Great New Post']
    );

    // Do Whataver
    return 'Done';
});