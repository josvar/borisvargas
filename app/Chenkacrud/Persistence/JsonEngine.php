<?php namespace Chenkacrud\Persistence;

trait JsonEngine {
    /**
     * @param $data
     * @return String
     */
    public function jsonEncode($data)
    {
        return json_encode($data, JSON_UNESCAPED_UNICODE);
    }

    /**
     * @param string $data
     * @return mixed
     */
    public function jsonDecode($data)
    {
        return json_decode($data, true);
    }
}