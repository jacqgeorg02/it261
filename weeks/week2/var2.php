<?php
//concatenation
//operators -- assignment operators
//some preset functions
//arrays
//by the way that equal sign is the assignment operator

$name = 'Jacquie';
$first_name = 'Jacquie';
$last_name = 'George';
echo '<br>';
$name = 'Jacquie';
$name .= ' George';
echo $name;

echo '<br>';
$color = 'green';
echo $color;

echo '<br>';
//when you have a single quote inside of a quote, you have to use your escape key, which is the forward slash below the Backspace key

echo 'Jacquie\'s favorite color is '.$color.'.';

echo '<br>';
$x = 20;
$y = 5;
$z = $x + $y;
echo $z;
echo '<br>';
$x = 20;
$x += 5;
echo $x;
echo '<br>';
$x = 100;
$x *= 10;
echo $x;
echo '<br>';
$x = 100;
$x -= 10;
echo $x;
echo '<br>';
$x = 100;
$x /= 10;
echo $x;
echo '<br>';
echo '<h3>Our product, quantity and tax exercise</h3>';
$product = 120;
$quantity = 5;
$total = $product * $quantity;
$total *= 1.10; //this is for tax
echo $total;
echo '<br>';
$product = 120;
$quantity = 5;
$total = $product * $quantity;
$total *= 1.097; //this is for tax
echo $total;
echo '<br>';
echo '<h3>We would like to reflect 2 decimal places -- we are thinking about floats and a new function -- number_format</h3>';
echo '<br>';
$product = 120;
$quantity = 5;
$total = $product * $quantity;
$total *= 1.097; //this is for tax
$total_friendly = number_format($total, 2);
echo $total_friendly;
echo '<br>';
$product = 120; //is our integer
$quantity = 5;
$total = $product * $quantity;
$total *= 1.097; //this is for tax
$total_friendly = number_format($total, 2);
echo 'We have a total of <b>$'.$total_friendly.' </b>dollars';
echo '<br>';
$product = 120; //is our integer
$quantity = 5;
$total = $product * $quantity;
$total *= 1.105; //this is for tax
$total_friendly = number_format($total, 2);
echo 'We have a total of <b>$'.$total_friendly.' </b>dollars';
echo '<br>';
//this is our first preset function
$product = 120; //is our integer
$quantity = 5;
$total = $product * $quantity;
$total *= 1.098; //this is for tax
echo 'We have a total of <b>$'.number_format($total, 2).' </b>dollars';
echo '<br>';
echo '<h3>Our second preset function is our date function</h3>';
echo date('Y');
echo '<br>';
echo date('l');
echo '<br>';
echo date('M');
echo '<br>';
echo date("l jS \of F Y h:i:s A");
echo '<br>';
echo date("l jS \of F Y h:i:s A");
//F is month Y is year h is hours i is minutes s is seconds
echo '<br>';
echo date("l jS \of F Y h:i A");
echo '<br>';
date_default_timezone_set('America/Los_Angeles');
echo '<br>';
echo date("l jS \of F Y h:i A");
echo '<h3>Time for an array!</h3>';
echo '<h4>Below is an indexed array!</h4>';
$fruit[] = 'bananas';
$fruit[] = 'cherries';
$fruit[] = 'melons';
$fruit[] = 'kiwis';
$fruit[] = 'oranges';
$fruit[] = 'apples';
//can we echo an array??? No we cannot!
echo $fruit[2];
//numbering in php starts with zero!
echo '<br>';
$fruit = array(
    'bananas',
    'cherries',
    'melons',
    'kiwis',
    'oranges',
    'apples'
);
$fruit = [
    'bananas',
    'cherries',
    'melons',
    'kiwis',
    'oranges',
    'apples'
];
echo '<br>';
print_r($fruit);
echo '<br>';
var_dump($fruit);
echo '<br>';
echo '<h3>Now we have an associative array</h3>';
$nav = array(
    'index.php' => 'Home', //index is the key and home is the value
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery'
);
echo '<pre>';
var_dump($nav);
echo '</pre>';




