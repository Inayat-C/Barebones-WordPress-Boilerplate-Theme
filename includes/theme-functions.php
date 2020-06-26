<?php

/**
* Helper function which fetches the file referenced in the $path directory. 
* Useful for outputting SVG code in your template without the SVG bloat. 
*
* fetch_file($filename);
*
* @param 
* $filename (string)(required) The name of your file, e.g 'logo.svg'
**/

function fetch_file($filename) {
    $path = ABSPATH.'/wp-content/themes/'.get_template().'/assets/images/'.$filename;
    if (file_exists($path)) {
        return file_get_contents($path);
    } else {
        return 'path doesnt exist';
    }
}