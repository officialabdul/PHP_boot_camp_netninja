<?php

// loops
$ninjas = ['shaun', 'ryu', 'yoshi'];

for ($i = 0; $i < count($ninjas); $i++) {
    echo $ninjas[$i] . '<br />';
}

foreach ($ninjas as $ninja) {
    echo $ninja . '<br />';
}

$products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'greeny shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5]
];

foreach ($products as $product) {
    echo $product['name'] . ' - ' . $product['price'];
    echo '<br />';
}

// while loops
$i = 0;
while ($i < count($products)) {
    echo $products[$i]['name'];
    echo '<br />';
    $i++;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops | PHP </title>
</head>

<body>

    <!-- php in html  -->
    <h1>Products</h1>
    <ul>
        <?php foreach ($products as $product) { ?>
        <h3> <?php echo $product['name']; ?> </h3>
        <p>£ <?php echo $product['price'];
                }  ?> </p>
    </ul>

</body>

</html>