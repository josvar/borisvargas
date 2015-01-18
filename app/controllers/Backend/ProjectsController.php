<?php namespace Backend;

use Laracasts\Commander\CommanderTrait;
use View, Input, Response;

class ProjectsController extends BaseController {

    use CommanderTrait;

    /**
     * Display a listing of the resource.
     * GET /projects
     *
     * @return Response
     */
    public function index()
    {
        return 'list of all projects';
    }

    /**
     * Show the form for creating a new resource.
     * GET /projects/create
     *
     * @return Response
     */
    public function create()
    {
        return View::make('backend.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     * POST /projects
     *
     * @return Response
     */
    public function store()
    {
        //tododev: terminar esto
        $this->execute('Chenkacrud\Projects\PublishProjectCommand');
        try
        {
        } catch (\Exception $e)
        {
            dd('error');
        }
    }


    /**
     * Show the form for editing the specified resource.
     * GET /projects/{id}/edit
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        return "edit project: {$id}";
    }

    /**
     * Update the specified resource in storage.
     * PUT /projects/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /projects/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}