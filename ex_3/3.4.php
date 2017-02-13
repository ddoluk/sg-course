<?php

/**
 * Write a function to return an HTML  tag.
 * The function should accept a mandatory argument of the image URL
 * and optional arguments for alt text, height, and width .
 */

function img($url = null, $alt = null, $height = null, $width = null)
{

    return "<img src='{$url}' alt='{$alt}' height='{$height}' width='{$width}'/>";
}

echo img('http://images.com/1.jpg', 'images', 480, 640);