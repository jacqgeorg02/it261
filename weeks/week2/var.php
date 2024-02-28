<?php
//my variables

//don't forget that a variable is merely a container for data


$name ="Jacquie"; //Jacquie is a string
$name = 'Jacquie'; //these two lines are exactly the same
echo $name;
echo "<br>"; //these are how we get to the next line
echo '<br>';
//if I change the value to a variable, the last one that's declared is the one that will display

$body_temp = 98; //98 is an integer 
$body_temp_new = 98.6; //98 is a float which is a decimal 
$song = "The Reach";
$color = "green";
$car = "Honda";
$age = 61;
echo $body_temp;
echo "<br>";
echo '<br>';
echo $body_temp_new;
echo "<br>";
echo '<br>';
echo $song;
echo "<br>";
echo '<br>';
echo $color;
echo "<br>";
echo '<br>';
echo $car;
echo "<br>";
echo '<br>';
echo $age;
echo "<br>";
echo '<br>';

echo "My name is $name!";
echo "<br>";
echo '<br>';
echo 'My name is '.$name.'!'; //when we are echoing and we have a varaiable, we have to do something. Olga likes the single quotes.
//we have to add that '. and .'
echo "<br>";
echo '<br>';
echo 'The normal body temperature for a human being is '.$body_temp_new.'';
echo "<br>";
echo '<br>';
$name = 'Sharon';
echo $name;
//now that we've give a new value, that last value will display but not erase the ones above
echo "<br>";
echo '<br>';

$x = 20;
$y = 5;
$z = $x + $y; //We're using the term "assigned vs equals
echo $z;
echo "<br>";
echo '<br>';
$z = $x * $y;
echo $z;
echo "<br>";
echo '<br>';
$z = $x / $y;
echo $z;
echo "<br>";
echo '<br>';
$first_name = 'Jacquie';
$last_name = 'George';
echo $first_name.' '.$last_name;
echo "<br>";
echo '<br>';
echo $first_name." ".$last_name;
echo "<br>";
echo '<br>';
echo "My full name is $first_name $last_name";
echo "<br>";
echo '<br>';
echo 'My full name is $first_name $last_name';
echo "<br>";
echo '<br>';
echo 'My full name is '.$first_name.' '.$last_name.''; //don't do this!! Don't forget the '. and .'
echo "<br>";
echo '<br>';
