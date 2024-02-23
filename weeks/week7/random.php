<?php
// our rand function
// We are going to play with dice

$dice = rand(1,6); 
echo '<p>'.$dice.' </p>';

// let's play with 2 dice

$dice1 = rand(1,6); 
$dice2= rand(1,6);
echo '<p>'.$dice1.' and '.$dice2.'</p>';
echo '<h2>Let\'s add some if else statements!</h2>';

// if we throw a double -- double 6, we will win big!
// if we just throw a double, we will still win
// however, no double, no win
// so we'll have an if and and elseif statement

$dice1a = rand(1,6); 
$dice2a= rand(1,6);

if ($dice1a == 6 && $dice2a == 6) {
echo '<b>Dice1:</b> '.$dice1a.' <b>Dice 2:</b> '.$dice2a.'';
echo '<h2>You won big!!! YAY!!!</h2>';
} elseif ($dice1a != 6 && $dice2a != 6 && $dice1a == $dice2a) {
echo '<b>Dice1:</b> '.$dice1a.' <b>Dice 2:</b> '.$dice2a.'';     
echo '<h2>It\'s not roses, but you still won! You had a good day!</h2>'; 
} else {
echo '<b>Dice1:</b> '.$dice1a.' <b>Dice 2:</b> '.$dice2a.''; 
echo '<h2>Sorry, you did not win!</h2>';
}

echo '<h2>We are going to display our images, using the random function.</h2>';

// we need to make an array

$photos[0] = 'photo1';
$photos[1] = 'photo2';
$photos[2] = 'photo3';
$photos[3] = 'photo4';
$photos[4] = 'photo5';

$i = rand(0, 4);

$selected_image = ''.$photos[$i].'.jpg';
echo '<img src="images/'.$selected_image.'" alt="'.$photos[$i].'">';

echo '<h2>Let\'s create a function!</h2>';

function random_images($photos) {
$my_return = '';
$i = rand(0, 4);
$selected_image = ''.$photos[$i].'.jpg';
$my_return = '<img src="images/'.$selected_image.'" alt="'.$photos[$i].'">';
return $my_return;
}
// end of function

echo random_images($photos);