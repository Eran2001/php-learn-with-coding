<?php

$myArray = array("Era", "Mary", "John");
$myName = $myArray[array_rand($myArray)];

function myFunction($items, $fn): array
{
    $filteredItems = [];
    foreach ($items as $item) {
        if ($fn($item)) {
            $filteredItems[] = $item;
        }
    }
    return $filteredItems;
}

$fnCall = myFunction($myArray, function ($item) {
    return $item == "Era";
});
