<?php

namespace Sciantman\Tools;

use Symfony\Component\VarDumper\VarDumper;

function dd(...$vars)
{
    foreach ($vars as $var) {
        VarDumper::dump($var);
    }

    exit(1);
}
