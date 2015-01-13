<?php namespace Chenkacrud\ImageManager;

use Illuminate\Support\ServiceProvider;

class ImageManagerServiceProvider extends ServiceProvider {

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerDropboxImage();
    }

    protected function registerDropboxImage()
    {
        $this->app->bindShared('dropbox-image', function ()
        {
            return new DropboxImage();
        });
    }
}