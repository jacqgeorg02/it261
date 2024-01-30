<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Currency 1 php form</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
<fieldset>
<label>NAME</label>
<input type="text" name="name">

<label>EMAIL</label>
<input type="email" name="email">

<label>How much money do you have?</label>
<input type="number" name="amount">

<!-- time for our radio button that has an additional attribute of VALUE -->
<label>Choose your currency</label>
<ul>
<li><input type="radio" name="currency" value="0.017">Rubles</li>
<!-- notice that there is no tag; it's outside of the html, so instead, we'll do a ul -->
<li><input type="radio" name="currency" value="0.76">Canadian Dollars</li>
<li><input type="radio" name="currency" value="1.15">Pounds</li>
<li><input type="radio" name="currency" value="1.00">Euros</li>
<li><input type="radio" name="currency" value="0.0074">Yen</li>
</ul>
<input type="submit" value="Convert it!">
<p><a href="">Reset it!</a></p>
</fieldset>
</form>
<!-- Now that we've completed the form and the styling of the form in css, we can move on to php so that the form actually does something! -->

<?php
// we will start with the server request method
// then we will ask ourselves if any fields are empty
//if the fields are not empty, we will elseif they are set
// the first if is the SERVER request == post do something

if($_SERVER['REQUEST_METHOD'] == 'POST') {

if(empty($_POST['name'] &&
$_POST['email'] &&
$_POST['amount'] &&
$_POST['currency'])){

echo '<p class="error">Please fill out all of the fields!</p>';

} elseif (isset($_POST['name'],
$_POST['email'],
$_POST['amount'],
$_POST['currency'])) {
$name = $_POST['name'];
$email = $_POST['email'];
$amount = $_POST['amount'];
$currency = $_POST['currency'];
$dollars = $amount * $currency;

echo '
<div class="box">
<h2>Hello '.$name.'!</h2>
<p>You now have <b>$'.floor($dollars).' American dollars</b> and we will be emailing you at '.$email.' with your information.</p>
</div>
';

}

}
// end SERVER REQUEST

?>
</body>
</html>