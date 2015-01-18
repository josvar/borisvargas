<?php namespace Chenkacrud\Resources;

use Illuminate\Support\ServiceProvider;

class ResourceManagerServiceProvider extends ServiceProvider {

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerDropboxImage();

        $this->registerUploadImage();
    }

    protected function registerDropboxImage()
    {
        $this->app->bindShared('dropbox-image', function ()
        {
            return new DropboxImage(public_path());
        });
    }

    protected function registerUploadImage()
    {
        $this->app->bindShared('upload-image', function ()
        {
            return new UploadImage(public_path());
        });
    }
}