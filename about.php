<?php

$heading = "About";

// identify the URI
function reqURI($link): bool
{
    return $_SERVER["REQUEST_URI"] === $link;
}

include "views/about.views.php";