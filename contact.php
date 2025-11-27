<?php

$heading = "Contact";

// identify the URI
function reqURI($link): bool
{
    return $_SERVER["REQUEST_URI"] === $link;
}

include "views/contact.views.php";