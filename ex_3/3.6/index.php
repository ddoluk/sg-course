<?php

/**
 * Put your function from the previous exercise in one file.
 * Then make another file that loads the first file and uses it to print out some  tags.
 */

require_once 'function.php';

echo img($GLOBALS['path_to_images'], 'images', 480, 640);