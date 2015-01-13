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
        $this->builder->addMeta(['description' => $data['description']]);

        foreach ($data['og'] as $meta => $value)
        {
            $this->builder->addMeta([$meta => $value]);
        }

        foreach ($data['twitter'] as $meta => $value)
        {
            $this->builder->addMeta([$meta => $value]);
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