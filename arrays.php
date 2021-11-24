<?php

// indexed araays
$peopleOne = ['shaun', 'crystal', 'ryu'];

echo $peopleOne[1];

$peopleTwo = array('ken', 'chun-li');
echo $peopleTwo[1];

$ages = [20, 30, 40, 50];
print_r($ages);

$ages[1] = 25;
print_r($ages);

$ages = array_push($ages, 70);

$ages = 60;
print_r($ages);

// check for the current count keyword in PHP
// count($ages);

$peopleThree = array_merge($peopleOne, $peopleTwo);
print_r($peopleThree);

// associative arrays are key: value pairs

$ninjasOne = ['shaun' => 'black', 'mario' => 'yellow'];
echo $ninjasOne['shaun'];

print_r($ninjasOne);

$ninjasTwo = array('bowser' => 'green', 'peach' => 'yellowish');
print_r($ninjasTwo);

// adding another key:value
$ninjasTwo['toad'] = 'pink';
print_r($ninjasTwo);

// overidding
$ninjasTwo['toad'] = 'slimegreen';

$ninjasThree = array_merge($ninjasOne, $ninjasTwo);
print_r($ninjasThree);

$popped = array_pop($ninjasTwo);
print_r($popped);

//  linked arrays
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drupal 7</title>
</head>

<body>




</body>

</html>