<?php

namespace Sciantman\Tools;

use Symfony\Component\VarDumper\VarDumper;

function dd($data)
{
    VarDumper::dump($data);
    exit(1);
}

