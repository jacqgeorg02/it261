<?php
// our wine list, would it not be an array of wines? Yes it is!!

echo '<h2>Time for our navigation that will again have both a key and a value</h2>';

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



echo '<h2>Our Navigation will display a different color when on the index.php page!</h2>';
// we are going to define a constant

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

// Line 26 means THIS_PAGE will be whatever page we are on

// we are going to be adding an if statement. If we are on THIS_PAGE and it's the index.php page, then do this!

echo '<ul>';
foreach($nav as $key => $value) {
if (THIS_PAGE == $key) {
 echo '<li><a style="color:red;" href=" '.$key.' "> '.$value.'</a></li>';
} else {
echo  '<li><a style="color:green;" href=" '.$key.' "> '.$value.'</a></li>';
}

}
// end foreach
echo '</ul>';

// If THIS_PAGE = key, then we are going to give the anchor a different color










