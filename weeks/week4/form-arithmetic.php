<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Form</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
<h1>Our Arithmetic Form</h1>
  <!-- the form action below is talking to the php on this page, not another -->
<form action="" method="post">
<fieldset>
<label>Name</label>
<input type="text" name="name">

<label>Phone</label>
<input type="tel" name="phone">

<label>How many Lattes?</label>
<input type="number" name="lattes">

<label>How many Cappuccinos?</label>
<input type="number" name="cappuccinos">

<label>How many Americanos?</label>
<input type="number" name="americanos">

<label>Special Requests?</label>
<textarea name="comments"></textarea>

<input type="submit" value="Send my order">

</fieldset>
</form>
<p><a href="">Reset</a></p>

<?php
//  our variables are name, phone, lattes, cappuccinos, americanos, comments
// Remember that the greeting said evening, morning, etc so be sure to have the date default time zone set
date_default_timezone_set('America/Los_Angeles');
$our_time = date('H:i');

if(isset($_POST['name'],
$_POST['phone'],
$_POST['lattes'],
$_POST['cappuccinos'],
$_POST['americanos'],
$_POST['comments'])) {
    // add my if statement regarding fields that are empty
if(empty($_POST['name']&&
$_POST['phone']&&
$_POST['lattes']&&
$_POST['cappuccinos']&&
$_POST['americanos']&&
$_POST['comments'] )) {

echo '<p class="error">Please fill out all of the fields</p>';

} else {
$name = $_POST['name'];
$phone = $_POST['phone'];
$lattes = $_POST['lattes'];
$cappuccinos = $_POST['cappuccinos'];
$americanos = $_POST['americanos'];
$comments = $_POST['comments'];
$total = $lattes + $cappuccinos + $americanos;

// if and elseif statment regarding our time

if($our_time <= 11) {
$our_time = "Good Morning";
} elseif ($our_time<=17) {
$our_time = "Good Afternoon";
} else {
$our_time = "Good Evening";
}

echo '
<div class="box">
<h2>'.$our_time.', '.$name.'!</h2>
<p>We have texted your order to this <b>number</b>: '.$phone.' totaling '.$total.' beverages. You have ordered the following:</p>
<ul>
<li>'.$lattes.' Lattes</li>
<li>'.$cappuccinos.' Cappuccinos</li>
<li>'.$americanos.' Americanos</li>
</ul>
<p>And this is your special request: <b>'.$comments.'</b></p>
<p>Thank you for choosing our establishment!</p>

</div>
';

}

}
// end isset
?>

</body>
</html>

