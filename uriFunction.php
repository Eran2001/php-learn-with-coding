<?php

function reqURI($link): bool
{
    return $_SERVER["REQUEST_URI"] === $link;
}
