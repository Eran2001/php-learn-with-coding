<?php

$myArray = array("Era", "Mary", "John");
$myName = $myArray[array_rand($myArray)];

function myFunction($givenArray, $givenName)
{
    foreach ($givenArray as $value) {
        if ($value === $givenName) {
            return $value;
        }
    }
    return "Nothing to see here";
}

$fnCall = myFunction($myArray, $myName);
echo $fnCall;



