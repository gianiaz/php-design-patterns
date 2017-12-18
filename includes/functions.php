<?php

/*
 * @author Giovanni Battista Lenoci <gianiaz@gmail.com>
 */

function getCode($filename)
{
    if (file_exists($filename)) {
        $content = file_get_contents($filename);

        return '<h3>'.$filename.'</h3><pre><code class="php">'.htmlspecialchars($content).'</code></pre>';
    }

    return 'ERROR finding '.$filename;
}
