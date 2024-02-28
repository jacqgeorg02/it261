<?php
// date function and if statement
echo date('Y');
echo '<br>';
echo date('l, F j, Y H:i: A');
// day month date year h 12 hour format H 24 hour format and then A set the time zone

echo '<br>';
date_default_timezone_set('America/Los_Angeles');

echo '<br>';
echo date('l, F j, Y H:i: A');

echo '<br>';

$name = 'Jacquie';
$our_time = date('H:i A');
echo '<br>';
echo $our_time;

// If conditional   the logic behind this is, IF the time is lees or equal to 11, then it is morning
// elseif if the time is less or equal to 17, which equals 5 pm, then it is afternoon
// elsenow we will have an else that will mean it is evening

if($our_time <=11) {
    echo '<h2 style="color:yellow;">Good Morning '.$name.'!</h2>
    <img src="./images/sun.png" alt="sun">
    <p>It\'s time to get up!</p>';
    } elseif ($our_time <=17) {
    echo '<h2 style="color:green;">Good Afternoon, '.$name.'!</h2>
    <img src="./images/fun.png" alt="fun" style="max-width:200px;">
    <p>It\'s time to enjoy the day!</p>';
    } else {
    echo '<h2 style="color:blue;">Good Evening '.$name.'!</h2>
    <img src="./images/supermoon.jpg" alt="moon" style="max-width:200px;">
    <p>It\'s time to catch some sleep!</p>';
    } 

