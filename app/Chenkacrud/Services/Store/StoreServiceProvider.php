<?php namespace Chenkacrud\Services\Store;

use Illuminate\Support\ServiceProvider;

class StoreServiceProvider extends ServiceProvider{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerStoreLocal();
    }

    protected function registerStoreLocal()
    {
        $this->app->bindShared('store.local', function ()
        {
            return new Local();
        });
    }
}