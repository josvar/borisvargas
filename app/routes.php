<?php

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
    Route::resource('images', 'ImagesController', ['except' => ['show']]);

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

    Route::controller('api/resources', 'Api\ResourcesController');
    Route::controller('api/projects', 'Api\ProjectsController');
});

Route::group(['namespace' => 'Api'], function() {
    Route::controller('api', 'FrontController');
});

Route::group(['namespace' => 'Frontend'], function() {
    if (App::environment() == 'development')
    {
        Route::get('/seo', function ()
        {
//        $a = View::make('frontend.partials.menu')->render();
//        return Response::json(array('html' => $a, 'code' => 'lince'));
//        return time();
        return Str::slug('Visual Resume 2.0');
//        return public_path();

            $a = Chenkacrud\Seo::find(2);
            dd($a->data->getMetas());
        });

        Route::get('/proyecto', function ()
        {
            $a = Chenkacrud\Project::find(14);
            dd($a->blocks->getBlocks());
            //dd($a->seo->data->getMetas());
        });
    }

    Route::get('/', 'FrontController@home');
    Route::get('/about', 'FrontController@about');
    Route::get('/projects/{id}', 'FrontController@projects');

    Route::get('/contact', 'ContactController@contact');
    Route::post('/contact', 'ContactController@feedback');
});
