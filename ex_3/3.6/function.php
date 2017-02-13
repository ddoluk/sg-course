<?php

function img($file, $alt = null, $height = null, $width = null)
{

    if (isset($GLOBALS['path_to_images'])) {

        $imgTag = "<img src='{$file}' alt='{$alt}' height='{$height}' width='{$width}'/>";

        $url = $file . $imgTag;

    } else {

        exit('file of images not found');
    }


    return $url;
}