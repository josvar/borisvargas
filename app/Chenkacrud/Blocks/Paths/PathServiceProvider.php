<?php namespace Chenkacrud\Blocks\Paths;

use Illuminate\Support\ServiceProvider;

class PathServiceProvider extends ServiceProvider {

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerUploadFilePaths();
    }

    protected function registerUploadFilePaths()
    {
        $this->app->bindShared('upload-file-paths', function ()
        {
            return new LocalPathFactory();
        });
    }
}