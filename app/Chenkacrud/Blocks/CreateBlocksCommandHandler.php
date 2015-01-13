<?php namespace Chenkacrud\Blocks;

use Laracasts\Commander\CommandHandler;

class CreateBlocksCommandHandler implements CommandHandler {


    protected $factory;

    function __construct(BlocksFactory $factory)
    {
        $this->factory = $factory;
    }


    /**
     * Handle the command.
     *
     * @param object $command
     * @return void
     */
    public function handle($command)
    {
        $blocks = new BlocksContainer();
        foreach ($command->blocks as $type => $blocksArray)
        {
            $type = ucfirst($type);
            // recorre los blocks del mismo tipo
            foreach ($blocksArray as $blockData)
            {
                $blocks->addBlock($this->factory->make($type, $blockData));
            }

        }

        return $blocks;
    }

}