<?php
// if statements -- conditional like if we are on the homepage, we would like the color for our anchors to be different than other pages
// if else statements -- if we're on the homep-age the color will be this else the color will be something else
// if elseif statement -- one if statement with a condition and then we'll have an elseif with a different condition

// $temp = 60;
// if ($temp == 60) {
//     echo 'It is a semi-warm day!';
// }

// $temp = 59;
// if ($temp <= 60) {
//     echo 'It is a semi-warm day!';
// }

// $temp = 61;
// if ($temp <= 60) {
//     echo 'It is a semi-warm day!';
// }

$temp = 55;
if ($temp <= 60) {
    echo 'It is a semi-warm day!';
} else {
    echo 'It may be getting warmer!';
} 
echo '<br>';

$new_temp = 102;
if ($new_temp <= 60) {
echo 'Not a very warm day!';
} elseif ($new_temp <=70) {
echo 'It\'s getting warmer';
} elseif ($new_temp <= 80) {
echo 'We might be going to the beach!';
} elseif ($new_temp >=100) {
echo 'We will <b>definitely </b> be staying inside!';
} else {
echo 'We will <b>definitely</b> go to the beach!';
}

echo '<h2>This exercise will be about a salary, a bonus and sales!</h2>';
// a salary of 95000 -- it's an annual salary and it doesn't change
// however, if you make sales above 100000, you will start making bonuses!!!
// 10000 = 5%
//  anything over 120000 = 10% of salary
// anything over 140000 = 15% of your salary
// anything over 150000 = 20% of your salary

$salary = 95000;
$sales = 148000;

// logic is important in php  If sales is equal orless than 99999, then you do not receive any bonus
//  if sales is equal or less than 119,000, then you will receive a 5% bonus
// if sales is = or less than 139999, then you will receive 10%
// if sales = or less than 149999, you will receive a 15% 
// if sales are 150000 or over, you will receive a 20% bonus
if($sales <= 99999) {
    echo 'Sorry, you did not make your bonus!';
} elseif($sales <=119999) {
    $salary *= 1.05;
    echo ' $'.number_format($salary, 2).' dollars  ';
}elseif ($sales <= 139999) {
    $salary *= 1.10;
    echo ' $'.number_format($salary, 2).' dollars  ';
}elseif ($sales <=149999) {
    $salary *= 1.15;
    echo ' $'.number_format($salary, 2).' dollars  ';
}else {
    $salary *= 1.2;
    echo 'Awesome! You made 20% bonus!!! Your annual salary including bonus, totals $'.number_format($salary, 2).' dollars  ';
}
