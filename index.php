<?php

$heading = "Home";

// identify the URI
function reqURI($link): bool
{
    return $_SERVER["REQUEST_URI"] === $link;
}

$date_array = getdate();

foreach ($date_array as $key => $value) {
    print "$key = $value\n";
}

$formatted_data = "Today's date: ";

print $formatted_data;

die();

require "views/index.view.php";