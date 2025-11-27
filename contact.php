<?php

use JetBrains\PhpStorm\NoReturn;

$heading = "Contact";

#[NoReturn]
function dd($value): array
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

dd($_SERVER);

include "views/contact.views.php";