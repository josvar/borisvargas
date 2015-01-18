<?php namespace Chenkacrud\Resources;

use Illuminate\Support\Facades\App;
use Laracasts\Commander\CommandHandler;

class ProcessResourceCommandHandler implements CommandHandler {

    /**
     * Handle the command.
     *
     * @param object $command
     * @return void
     */
    public function handle($command)
    {
        $driver = App::make('upload-image');

        $driver->processImage($command->resource);

        return $driver->getPaths();
    }

}