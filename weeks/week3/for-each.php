<?php
// our wine list, would it not be an array of wines? Yes it is!!

echo '<h2>This will be my wine list</h2>';
$wines = array(
    'Cabernet',
    'Merlot',
    'Syrah',
    'Malbec',
    'Red Blend'
);
// since we cannot echo our wines array, we will be using a for-each loop

echo '<ul>';
foreach($wines as $key) {
    echo '<li> '.$key.' </li>';
}
echo '</ul>';

echo '<h2>Movies and Shows list that will have both a key and a value</h2>';
//  a key then a value ''=>''

$shows = array(

    'Apple TV' => array('Severence', 'For All Mankind'),
    'Showtime' => array('City On A Hill', 'Homeland'),
    'Movie' => array('Top Gun'),
    'HBO Max' => array('Hacks')
   );
   
   echo '<ul>';
   foreach ($shows as $key => $values) {
   foreach ($values as $value) {
   echo '<li><b>'.$key.'</b>: '.$value.'</li>';
   
    }
   
   }

// $shows = [ 'Apple TV' => ['Severance', 'For All Mankind'], 'Showtime' => ['City on a Hill', 'Homeland'], 'Movie' => ['Top Gun Maverick'], 'HBO MAX' => ['Hacks'], ];

// echo '<ul>';
// foreach ($shows as $platform => $titles) {
//     echo '<li><b>' . $platform . '</b>: ';
//     echo '<ul>';
//     foreach ($titles as $title) {
//     echo '<li>' . $title . '</li>';
//     }
//     echo '</ul></li>';
// }

// echo '</ul>';

// $shows = [
// 'Apple TV' => 'The Morning Show',
// 'Netflix' => 'The Beauty Queen of Jerusalem',
// 'Prime Video' => 'Killing Eve',
// 'Acorn TV' => 'Brokenwood Mysteries',
// 'Movie' => 'The Lost King',
// 'Netflix' => 'Suits'

// 'The Morning Show' => 'Apple TV',
// 'The Beauty Queen of Jerusalem' => 'Netflix',
// 'Killing Eve' => 'Prime Video',
// 'Brokenwood Mysteries' => 'Acorn TV',
// 'The Lost King' => 'Movie',
// 'Suits' => 'Netflix',
// 'Ted Lasso' => 'Apple TV'
// ];

// echo '<ul>';
// foreach($shows as $key => $value) {
//     echo '<li> <b>'.$value.'</b>: <i>'.$key.'</i> </li>';
// }
echo '</ul>';


echo '<h2>Time for our navigation that will have both a key and a value</h2>';

$nav = array (
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery'
);

echo '<ul>';
foreach($nav as $key => $value) {
    echo '<li><a href=" '.$key.' "> '.$value.'</a></li>';
}
echo '</ul>';












