<?php

/*
 * @author Giovanni Battista Lenoci <gianiaz@gmail.com>
 */

function getCode($filename)
{
    if (file_exists($filename)) {
        $content = file_get_contents($filename);

        return htmlspecialchars($content);
    }

    return 'ERROR finding '.$filename;
}
