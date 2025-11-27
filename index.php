<?php

$heading = "Home";

// identify the URI
function reqURI($link): bool
{
    return $_SERVER["REQUEST_URI"] === $link;
}

require "views/index.view.php";