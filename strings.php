<?php

$stringOne = "my email is: ";
$stringTwo = "example@email.com";

echo $stringOne;

echo $stringTwo.$stringOne;
echo "Concatenation joins strings ".$stringOne." ".$stringTwo;


// escaping characters inside strings

echo "the ninja screamed \"whaaaa\" ";

// functions
echo strlen($stringOne);
echo strtolower($stringOne);
echo strtoupper($stringTwo);
echo str_replace('m','w', $stringTwo);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings </title>
</head>
<body>




</body>
</html>