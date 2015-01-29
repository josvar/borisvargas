<?php

function set_active( $path, $active = 'active' )
{
    return Request::is($path) ? $active : '';
}

function canonical_url($pathRelative = '')
{
    return Request::root() . '/' . $pathRelative;
}


function canonical_url_encoded($pathRelative = '')
{
    return urlencode(Request::root() . '/' . $pathRelative);
}

if ( ! function_exists('elixir'))
{
    /**
     * Get the path to a versioned Elixir file.
     *
     * @param  string  $file
     * @return string
     */
    function elixir($file)
    {
        static $manifest = null;

        if (is_null($manifest))
        {
            $manifest = json_decode(file_get_contents(public_path().'/build/rev-manifest.json'), true);
        }

        if (isset($manifest[$file]))
        {
            return '/build/'.$manifest[$file];
        }

        throw new InvalidArgumentException("File {$file} not defined in asset manifest.");
    }

}
 