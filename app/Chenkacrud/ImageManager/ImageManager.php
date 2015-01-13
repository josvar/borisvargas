<?php namespace Chenkacrud\ImageManager;

abstract class ImageManager {

    abstract function processImage($data);

    abstract function getPaths();

}