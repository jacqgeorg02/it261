<?php
// our str_replace and substr functions!
// substr(string,start,length) 3 arguments -- the statement, the start and the length

$statement = 'Presently, I am reading the Looming Tower';
echo $statement;
echo '<br>';
echo substr($statement, 0);
echo '<br>';
echo substr($statement, 1);
echo '<br>';
echo substr($statement, 10);
echo '<br>';
echo substr($statement, 11);
echo '<br>';
echo substr($statement, 12);
echo '<h2>Now I would like to display just the words -- I am reading</h2>';
echo '<br>';
echo substr($statement, 10, 13);
echo '<br>';
echo substr($statement, 11, 12);
echo '<h2>What if I would like to display Looming</h2>';
echo '<br>';
echo substr($statement, -13);
echo '<br>';
echo substr($statement, -13,7);
echo '<br>';
echo substr($statement, -13,8);
// when I have a positive number for start, I count from zero, for length I start at 1
echo '<br>';
echo substr($statement, 4, 13);
echo '<br>';
//  when you start with a negative number, ...
echo '<br>';
echo substr($statement, -20);
echo '<br>';
echo substr($statement, -20,2);
echo '<h2>Now for the str_replace function!</h2>';

$statement2 = 'Hulu\'s rendition of the Looming Tower is based on the book named the Looming Tower!';

echo str_replace('the', 'The',$statement2);
// on the weekly class exercise, we'll see how we're using it