<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Celsius Document</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
<h1>Celsius Form Converter</h1>
<form action="<?php echo $_SERVER['PHP_SELF'] ;?>" method="post">
<fieldset>
<label>Enter your celsius value</label>
<input type="number" name="cel">

<input type="submit" value="Convert it!">


</fieldset>
<p><a href="">Reset</a></p>


</form>
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

if(isset($_POST['cel'])) {
$cel = $_POST['cel'];
// we'll use a new function to make sure that our values are integers which is intval() function
$cel_int = intval($cel);
$far = ($cel_int * 9/5) +32;

// if the end user does not enter a value, say something (echo)

if($cel == NULL) {
echo '<p class="error">Please fill out the Celsius value!</p>';

} elseif($far <= 32) {
echo '<p>'.$cel_int.' degrees Celsius = '.$far.' degrees Fahrenheit <br> and it is pretty cold out there!</p>';
}

elseif($far <= 45) {
    echo '<p>'.$cel_int.' degrees Celsius = '.$far.' degrees Fahrenheit <br> and it is getting warmer out there!</p>';
    }

elseif($far <= 60) {
     echo '<p>'.$cel_int.' degrees Celsius = '.$far.' degrees Fahrenheit <br> and it is sweater weather out there!</p>';
     }

elseif($far <= 75) {
    echo '<p>'.$cel_int.' degrees Celsius = '.$far.' degrees Fahrenheit <br> and we\'re going to the park!</p>';
    }

elseif($far <= 90) {
    echo '<p>'.$cel_int.' degrees Celsius = '.$far.' degrees Fahrenheit <br> and we may going to the beach!</p>';
    }

else {
    echo '<p>'.$cel_int.' degrees Celsius = '.$far.' degrees Fahrenheit <br> and we are at the beach!</p>';
    }


}
// end isset

}
// end post

?>



</body>
</html>