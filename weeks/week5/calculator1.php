<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Travel Calculator</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
<fieldset>
<label>Name</label>
<input type="text" name="name">

<label>Total Miles Driving?</label>
<input type="number" name="miles">

<input type="submit" value="Submit!">
<p><a href="">Reset it!</a></p>
</fieldset>
</form>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {

if(empty($_POST['name'] &&
$_POST['miles'])) {

    echo '<p class="error">Please fill out all of the fields!</p>';

} elseif (isset($_POST['name'],
$_POST['miles'])) {
$name = $_POST['name'];
$miles = $_POST['miles'];

echo '
<div class="box">
<h2>Hello '.$name.'!</h2>
<p>Enjoy your '.$miles.' mile trip!</p>
</div>
';
}

} 
// end server request
?>
</body>
</html>