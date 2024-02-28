<?php
$people['Ann_&_Jacquie_in_Skagit'] = 'anjask A wonderful day tiptoeing through the tulips. ';
$people['Ann_in_Leavenworth'] = 'annlev Doing the thing that makes her the happiest. ';
$people['Ann_&_ Emilio'] = 'amemsa Ann & Emilio doing their favorite thing -- well, maybe their second favorite thing. A beautiful day in St. Syr Sur Mer. ';
$people['Emilio_&_Jacquie_Sated'] = 'emjait After a long day of walking in the rain, we found the best Italian restaurant and ended with a delicious espresso. We were in heaven! ';
$people['Ann_in_Skiathos'] = 'annchi Relaxing after the best chicken we\'ve ever eaten! Can I keep adding text?? Yes, as long as I leave an empty space to be the end of the line, I think. ';
$people['Ann_with_Coffee'] = 'anncof The only way to really start the day. ';
$people['Ann_in_Nafplio'] = 'annlun Finally -- a chance to rest. ';
$people['Ann_in_Sedona'] = 'annsed A short, but beautiful hike in Sedona. The sun was going down fast. ';
$people['Old_Neighborhood'] = 'athnei An old neighborhood in Athens, rediscovered or uncovered! ';
$people['Old_Sparky'] = 'sparky A sheep sculpture made completely from spark plugs -- at my sister\'s house in the south of France. ';
$people['Leland_and_Me'] = 'leljac A chance meeting with one of my idols in the Philadelphia airport: Leland Sklar, renowned bassist. ';
$people['Sacre_Coeur'] = 'sacmon A view of Sacre Coeur from inside the clock sculpture in the Musee d\'Orsay. ';
$people['Cat_and_Goat'] = 'sacago A fairly regal cat, with a goat trying to find out what\'s going on. ';
$people['Turtle_in_San_Diego'] = 'sdturt A turtle trying to grab some warmth before the sun goes down. ';
$people['Turtles_at_Luxembourg'] = 'turlux Turtles spewing out water during a very hot day. Just being able to watch them brought relief. ';
$people['Goats_in_the_Peloponnese'] = 'gregoa These goats captured my attention for almost an entire hour! Their sound was so relaxing. ';
$people['Cats_in_Agios_Konstantinos'] = 'catagi These cats followed us for hours and then disappeared. This is where they ended up. ';
$people['Frog_Kiss'] = 'frogki This was one of my favorite sculptures from Arizona. Jerome? Sedona? I can\'t remember. ';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Gallery</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <!-- when we have an array, we have to have a foreach loop -->

<table>
<tr><th colspan="3">A Short Gallery of the Last Few Years</th></tr> 
<?php foreach($people as $name => $image):?>

<tr>
<td><img src="images/<?php echo substr($image, 0, 6);?>.jpg" alt ="<?php echo str_replace('_', ' ',$name) ;?>"></td>
<td><?php echo str_replace('_', ' ',$name );?></td>
<td><?php echo substr($image, 6,-1);?></td>
</tr>
<?php endforeach;?>
</table> 

</body>
</html>