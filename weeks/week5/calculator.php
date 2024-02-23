<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Travel Calculator</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
<h1>My Travel Calculator</h1>   
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
<fieldset>
<label>Name</label>
<input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']) ;?>">

<label>Total Miles Driving?</label>
<input type="number" name="miles" value="<?php if(isset($_POST['miles'])) echo htmlspecialchars($_POST['miles']) ;?>">

<label>How fast do you typically drive (in mph)?</label>
<input type="number" name="speed" value="<?php if(isset($_POST['speed'])) echo htmlspecialchars($_POST['speed']) ;?>">

<label>How many hours per day do you plan on driving?</label>
<input type="number" name="hours" value="<?php if(isset($_POST['hours'])) echo htmlspecialchars($_POST['hours']) ;?>">

<label>Price of Gas (per gallon)</label>
<ul>
<li><input type="radio" name="gallon" value="3.5"<?php if(isset($_POST['gallon']) && $_POST['gallon'] == 3.5) echo 'checked="checked"' ;?>>$3.50</li>
<li><input type="radio" name="gallon" value="4.0"<?php if(isset($_POST['gallon'])&& $_POST['gallon'] == 4.0) echo 'checked="checked"' ;?>>$4.00</li>
<li><input type="radio" name="gallon" value="4.5"<?php if(isset($_POST['gallon'])&& $_POST['gallon'] == 4.5) echo 'checked="checked"' ;?>>$4.50</li>
<li><input type="radio" name="gallon" value="5"<?php if(isset($_POST['gallon'])&& $_POST['gallon'] == 5) echo 'checked="checked"' ;?>>$5.00</li>
<li><input type="radio" name="gallon" value="5.5"<?php if(isset($_POST['gallon'])&& $_POST['gallon'] == 5.5) echo 'checked="checked"' ;?>>$5.50</li>
<li><input type="radio" name="gallon" value="6"<?php if(isset($_POST['gallon'])&& $_POST['gallon'] == 6) echo 'checked="checked"' ;?>>$6.00</li>
</ul>

<label>Fuel Efficiency</label>
<select name="efficiency">
<option value="" <?php if(isset($_POST['efficiency']) && is_null ($_POST['efficiency'])) echo 'selected = "selected"' ;?>>Select One!</option>

<option value="10"<?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == '10') echo 'selected = "selected"' ;?>>Terrible @ 10mpg</option>

<option value="20"<?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == '20') echo 'selected = "selected"' ;?>>Bad @ 20mpg</option>

<option value="25" <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == '25') echo 'selected = "selected"' ;?>>OK @ 25mpg</option>

<option value="30" <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == '30') echo 'selected = "selected"' ;?>>Good @ 30mpg</option>

<option value="35" <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == '35') echo 'selected = "selected"' ;?>>Better @ 35mpg</option>

<option value="40" <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == '40') echo 'selected = "selected"' ;?>>Great @ 40mpg</option>

<input type="submit" value="Calculate!">
<p style="text-align:center"><a href="">Reset it!</a></p>
</fieldset>
</form>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

if(empty($_POST['name'])) {
    echo '<p class="error">Please fill out your name</p>';
}

if(empty($_POST['miles'])) {
    echo '<p class="error">Please fill out your total driving miles</p>';
} 

if(empty($_POST['speed'])) {
    echo '<p class="error">Please fill out how fast you\'ll be driving</p>';
}

if(empty($_POST['hours'])) {
    echo '<p class="error">How many hours per day would you like to drive?</p>';
}

if(empty($_POST['gallon'])) {
    echo '<p class="error">Your cost of gas per gallon, please!</p>';
}

if(empty($_POST['efficiency'])) {
    echo '<p class="error">Please select your car\'s efficiency!</p>';
}

if (isset($_POST['name'],
$_POST['miles'],
$_POST['speed'],
$_POST['hours'],
$_POST['gallon'],
$_POST['efficiency'])) {
$name = $_POST['name'];
$miles = intval($_POST['miles']);
$speed = intval($_POST['speed']);
$hours = intval($_POST['hours']);
$gallon = $_POST['gallon'];
$efficiency = $_POST['efficiency'];
if($speed == 0){
    $speed = 1;
}
$tothrs = $miles / $speed;
if($hours == 0){
    $hours = 1;
}
$totday = $tothrs / $hours;
$totgas = $miles / $efficiency;
$totcost = $totgas * $gallon;

if(!empty($name && $miles && $speed && $hours && $gallon) && ($efficiency !=NULL)) {

echo '
<div class="box">
<h2>Hello, '.$name.'!</h2>
<p>You will be traveling a total of '.number_format($tothrs, 2).' hours, taking '.number_format($totday,2).' days to reach your final destination.</p>
<p>And, you will be using '.number_format($totgas, 2).' gallons of gas, costing you $'.number_format($totcost,2).' dollars.</p>
</div>
';
}
}
}

// end server request
?>
</body>
</html>