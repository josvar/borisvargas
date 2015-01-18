<?php namespace Chenkacrud\Seo;

class SeoDataCreator {

    /**
     * @var BuilderInterface
     */
    protected $builder;

    /**
     * @param BuilderInterface $builder
     */
    function __construct(BuilderInterface $builder)
    {
        $this->builder = $builder;
    }


    /**
     * @param array $data
     * @return BuilderInterface
     */
    public function make(array $data)
    {
        $this->builder->buildSeoData();

        //tododev: evaluar contenido de arrays

        $this->builder->addTitle($data['title']);
        $this->builder->addMeta(['name' => 'description', 'content' => $data['description']]);

        foreach ($data['og'] as $meta => $value)
        {
            $this->builder->addMeta(['property' => $meta, 'content' => $value]);
        }

        foreach ($data['twitter'] as $meta => $value)
        {
            $this->builder->addMeta(['name' => $meta, 'content' => $value]);
        }

        return $this->builder->getResult();
    }

    /**
     * @param array $data
     * @return BuilderInterface
     */
    public function restore($data)
    {
        $this->builder->hydrate($data);
        return $this->builder->getResult();
    }

}