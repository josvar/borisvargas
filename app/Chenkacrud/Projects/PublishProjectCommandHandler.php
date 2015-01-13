<?php namespace Chenkacrud\Projects;

use Chenkacrud\Facades\SeoData;
use Chenkacrud\Project;
use Chenkacrud\Seo;
use Laracasts\Commander\CommanderTrait;
use Laracasts\Commander\CommandHandler;

class PublishProjectCommandHandler implements CommandHandler {

    use CommanderTrait;


    public function handle($command)
    {
        //create SeoData object
        $seoData = SeoData::make($command->seo_tags);

        //create and fill seo Model
        $seo = new Seo();
        $seo->fill(['data' => $seoData]);

        $blocks = $this->execute('Chenkacrud\Blocks\CreateBlocksCommand', ['blocks' => $command->blocks]);

        $project = Project::publish(
            $command->main['title'],
            $command->main['summary'],
            $blocks
        );

        $project->seo()->save($seo);

    }

}