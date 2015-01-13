<?php namespace Chenkacrud\Blocks;

use Illuminate\Support\ServiceProvider;

class BlocksServiceProvider extends ServiceProvider {

    protected $namespaceBlocks = 'Chenkacrud\\Blocks\\';

    public function register()
    {
        $this->app->bindShared('Chenkacrud\Blocks\BlocksFactory', function ()
        {
            return new BlocksFactory($this->namespaceBlocks);
        });
    }
}