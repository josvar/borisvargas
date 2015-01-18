<?php namespace Backend\Api;

use Backend\BaseController;
use Laracasts\Commander\CommanderTrait;
use Response;

class ResourcesController extends BaseController {

    use CommanderTrait;

    public function postResource()
    {
        $paths = $this->execute('Chenkacrud\Resources\ProcessResourceCommand');

        return Response::json($paths);
        try
        {

        } catch (\Exception $e)
        {
            dd('error');
        }
    }

}