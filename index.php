<?php


function myFunction(string $name): string
{
    return "Hello $name";
}

$fnCall = myFunction("Era");
echo $fnCall;
