<?php
// our wine list, would it not be an array of wines? Yes it is!!
// This was just for testing that the colors below worked

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

// we are going to be adding an if statement. It we are on this page and it's the inex.php page, then do this!

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












