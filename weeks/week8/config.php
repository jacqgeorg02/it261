<?php
ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php'); 


function myError($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
 echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
      echo 'Error message: <b> '.$errorMsg.'</b>';
      die();
  }  else {
      echo ' Houston, we have a problem!';
      die();
  }
        
}

// end of function

// our random picture thing
// we need to make an array
$photos[0] = 'people1';
$photos[1] = 'people2';
$photos[2] = 'people3';
$photos[3] = 'people4';
$photos[4] = 'people5';
$photos[5] = 'people6';
$photos[6] = 'people7';

$i = rand(0, 6);

// $selected_image = ''.$photos[$i].'.jpg';
// echo '<img src="images/'.$selected_image.'" alt="'.$photos[$i].'">';

function random_images($photos) {
$my_return = '';
$i = rand(0, 6);
$selected_image = ''.$photos[$i].'.jpg';
$my_return = '<img src="images/'.$selected_image.'" alt="'.$photos[$i].'">';
return $my_return;
}
