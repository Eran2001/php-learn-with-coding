<?php

use JetBrains\PhpStorm\NoReturn;

$heading = "Home";

#[NoReturn]
function dd($value): array
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

dd($_SERVER);

require "views/index.view.php";