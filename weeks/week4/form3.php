<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 3 inside my HTML</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
<h1>My form3.php</h1>
<form action="" method="post">
        <!-- the form will read the php on this page; in this situatiohn since we would like to echo info, we don't want to do it above the DOCTYPE, so we'll do it below -->
<fieldset>
<label>First Name</label>
<input type="text" name="first_name">

<label>Last Name</label>
<input type="text" name="last_name">

<label>Email</label>
<input type="email" name="email">

<label>Comments</label>
<textarea name="comments"></textarea>

<input type="submit" value="Send it!">

<p><a href="">Reset!</a></p>

</fieldset>
</form>
<?php
// logic is very important -- if isset first_name, last_name, email, comments is set, that is a good thing! That's our first if statement. 
// The second if statement is if I have empty fields, that is not good and I will echo please fill out all of the fields. Now, if the fields are not empty, then my else will display an echo of the information

if(isset($_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['comments'])) {

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$comments = $_POST['comments'];

// nest another if statement in reference to the fields being empty

if(empty($_POST['first_name'] &&
$_POST['last_name'] &&
$_POST['email'] &&
$_POST['comments'] )) {

echo '<p class="error">Please fill out all of the fields!</p>';

} else {
echo '
<div class="box">
<h2>Hello '.$first_name.' '.$last_name.'!</h2>
<p>We have received your <b>email as:</b> '.$email.' and will be reviewing your <b>comments:</b> '.$comments.'</p>
</div>
</div class="box2">
';

if

}
// end else

} 
// end isset

?>   
</body>
</html>