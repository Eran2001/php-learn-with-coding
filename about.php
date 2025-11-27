<?php

use JetBrains\PhpStorm\NoReturn;

$heading = "About";


#[NoReturn]
function dd($value): array
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

dd($_SERVER["REQUEST_URI"]);

include "views/about.views.php";