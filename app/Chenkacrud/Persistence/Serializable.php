<?php namespace Chenkacrud\Persistence;


use JsonSerializable;

interface Serializable extends JsonSerializable {

    /**
     * @param $data
     * @return mixed
     */
    static public function hydrate($data);

}