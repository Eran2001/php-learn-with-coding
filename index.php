<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
    <style>
        body {
            display: grid;
            place-items: center;
            /*justify-content: center;*/
            /*align-items: center;*/
            min-height: 100vh;
            margin: 0;
            font-family: sans-serif;
            background: gray;
        }
    </style>
</head>
<body>

<h1>
    <?php

    $myArray = array("Era", "Mary", "John");

    function myFunction($givenArray, $givenName)
    {
        foreach ($givenArray as $value) {
            if ($value === $givenName) {
                return $value;
            }
        }
    }

    ?>

    <p>
        <?php

        $functionCall = myFunction($myArray, "Mary");
        echo $functionCall;

        ?>
    </p>
</h1>

</body>
</html>