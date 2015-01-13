<?php

//$user = User::find(1);
//Auth::login($user);

# Route Group with Prefix to Backend
$access_url = Config::get('chenka.app.access_url');
Route::group(['prefix' => $access_url, 'namespace' => 'Backend'], function ()
{

    # Authentication by SessionsController
    Route::get('login', ['as' => 'backend.login', 'uses' => 'SessionController@create']);
    Route::post('session', ['as' => 'backend.session.store', 'uses' => 'SessionController@store']);
    Route::get('logout', ['as' => 'backend.logout', 'uses' => 'SessionController@destroy']);

    # Backend Routes
    Route::get('/', ['as' => 'backend.dashboard', 'uses' => 'DashboardController@index']);

    Route::resource('projects', 'ProjectsController', ['except' => ['show']]);
    Route::resource('posts', 'PostsController', ['except' => ['show']]);

    Route::group(['prefix' => 'settings'], function ()
    {

        Route::get('/', function ()
        {
            return Redirect::to(URL::route('docs'));
        });

        Route::get('profile', function ()
        {
            return 'profile';
        });

    });
});

Route::group(['namespace' => 'Api'], function() {
    Route::controller('api', 'FrontController');
});

Route::group(['namespace' => 'Frontend'], function() {
//    Route::get('/seo', function(){
////        $a = View::make('frontend.partials.menu')->render();
////        return Response::json(array('html' => $a, 'code' => 'lince'));
////        return time();
////        return Str::slug('my %ass 78 por ^a');
////        return public_path();
//
//        $a = Chenkacrud\Seo::find(2);
//        dd($a->data->getMetas());
//    });
//
//    Route::get('/proyecto', function ()
//    {
//        $a = Chenkacrud\Project::find(14);
//        dd($a->blocks->getBlocks());
//        //dd($a->seo->data->getMetas());
//    });

    Route::controller('/', 'FrontController');
});
