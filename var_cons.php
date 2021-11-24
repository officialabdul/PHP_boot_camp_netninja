<?php


// variables can e overrided
$name= 'Yoshi';
echo $name;
$age = 30;

// constants (cant be overided)
define('NAME', 'Mario');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Intro</title>
</head>
<body>
    <h1> <?php echo 'You are Welcome ' ?> </h1>
    <div> <?php echo $name; ?> </div>
    <div> <?php echo $age; ?> </div>
    <div> <?php echo NAME; ?> </div>
</body>
</html>