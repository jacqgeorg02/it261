<?php

ob_start();


$first_name='';
$last_name='';
$email='';
$gender='';
$phone='';
$regions='';
$comments='';
$privacy='';
$wines = '';

$first_name_err='';
$last_name_err='';
$email_err='';
$gender_err='';
$phone_err='';
$regions_err='';
$comments_err='';
$privacy_err='';
$wines_err = '';

if($_SERVER['REQUEST_METHOD'] == "POST") {
//   if inputs are empty, we will declare a statement else we will assigning the $_POST to a variable
// $wines = $_POST['wines'] will be assigned to a variable

if(empty($_POST['wines'])) {
// say or do something or do else
$wines_err = 'What...no wines?';
} else {
    $wines = $_POST['wines'];
}

if(empty($_POST['first_name'])) {
// say or do something or do else
$first_name_err = 'Please fill in your first name';
}else {
$first_name = $_POST['first_name'];
}

if(empty($_POST['last_name'])) {
// say or do something or do else
$last_name_err = 'Please fill in your last name';
}else {
$last_name = $_POST['last_name'];
}

if(empty($_POST['email'])) {
// say or do something or do else
$email_err = 'Please fill in your email';
}else {
$email = $_POST['email'];
}

if(empty($_POST['gender'])) {
// say or do something or do else
$gender_err = 'Please check your gender';
}else {
$gender = $_POST['gender'];
}

if(empty($_POST['phone'])) {
// say or do something or do else
$phone_err = 'Please provide your phone number';
}else {
$phone = $_POST['phone'];
}

if(empty($_POST['regions'])) {
// say or do something or do else
$regions_err = 'Please select your region';
}else {
$regions = $_POST['regions'];
}

if(empty($_POST['comments'])) {
// say or do something or do else
$comments_err = 'We value your input!';
}else {
$comments = $_POST['comments'];
}

if(empty($_POST['privacy'])) {
// say or do something or do else
$privacy_err = 'You must agree to receive spam email!';
}else {
$privacy = $_POST['privacy'];
}

// we need this function for wines
function my_wines($wines) {
$my_return='';
if(!empty($_POST['wines'])) {
    $my_return = implode(',', $_POST['wines']);
}
return $my_return;
} 
// end my_wines function then ask if everything is set!

if(isset($_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['phone'],
$_POST['gender'],
$_POST['wines'],
$_POST['regions'],
$_POST['comments'],
$_POST['privacy'])) {

$to = 'jacqueline.george@seattlecolleges.edu';
$subject = 'Test email on  '.date('m/d/y, h i A');
$body = '
First Name:  '.$first_name.' '.PHP_EOL.'
Last Name:  '.$last_name.' '.PHP_EOL.'
Email:  '.$email.' '.PHP_EOL.'
Phone:  '.$phone.' '.PHP_EOL.'
Gender:  '.$gender.' '.PHP_EOL.'
Wines:  '.my_wines($wines).' '.PHP_EOL.'
Regions:  '.$regions.' '.PHP_EOL.'
Comments:  '.$comments.' '.PHP_EOL.'
Privacy:  '.$privacy.' '.PHP_EOL.'
';

$headers = array(
    'From' => 'noreply@jacqgeorg.com'
);
// we will be adding an if statement -- that this email form will work ONLY if all the fields are filled out!!!

if(!empty(
    $first_name && 
    $last_name && 
    $email && 
    $phone &&
    $gender &&
    $wines &&
    $regions &&
    $comments &&
    $privacy)) {
        mail($to, $subject, $body, $headers);
        header('Location:thx.php');
    }
// Don't forget, you must upload your form to the server to receive an email!

} 
// end isset

}
// closing server request method
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Second Form in Week 6!</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <h1>First Form in Week 6</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])   ;?>" method="post">
<fieldset>
<legend>
Contact Jacquie
</legend>
<label>First Name</label>
<input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']) ;?>">
<span> <?php echo $first_name_err;?> </span>

<label>Last Name</label>
<input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']) ;?>">
<span> <?php echo $last_name_err;?> </span>

<label>Email</label>
<input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ;?>">
<span> <?php echo $email_err;?> </span>

<label>Gender</label>
<ul>
<li><input type="radio" name="gender" value="female" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked ="checked" ' ;?>>Female</li>
<li><input type="radio" name="gender" value="male" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked ="checked" ' ;?>>Male</li>
<li><input type="radio" name="gender" value="neither" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'neither') echo 'checked ="checked" ' ;?>>Neither</li>
</ul>
<span> <?php echo $gender_err;?> </span>

<label>Phone</label>
<input type="tel" name="phone" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars ($_POST['phone']) ;?>">
<span> <?php echo $phone_err;?> </span>

<label>Favorite Wines</label>
<ul>
<li><input type="checkbox" name="wines[]" value="cab"  <?php if(isset($_POST['wines']) && in_array('cab', $wines)) echo 'checked = "checked" '  ;?>>Cabernet</li>

<li><input type="checkbox" name="wines[]" value="merlot"  <?php if(isset($_POST['wines']) && in_array('merlot', $wines)) echo 'checked = "checked" '  ;?>>Merlot</li>

<li><input type="checkbox" name="wines[]" value="syrah"  <?php if(isset($_POST['wines']) && in_array('syrah', $wines)) echo 'checked = "checked" '  ;?>>Syrah</li>

<li><input type="checkbox" name="wines[]" value="malbec"  <?php if(isset($_POST['wines']) && in_array('malbec', $wines)) echo 'checked = "checked" '  ;?>>Malbec</li>

<li><input type="checkbox" name="wines[]" value="red"  <?php if(isset($_POST['wines']) && in_array('red', $wines)) echo 'checked = "checked" '  ;?>>Red Blend</li>
</ul>

<span> <?php echo $wines_err;?> </span>

<label>Regions</label>
<select name="regions">
<option value="" <?php if(isset($_POST['regions']) && is_null($_POST['regions'])) echo 'selected = "unselected"' ;?>>Select One!</option>
<span> <?php echo $regions_err;?> </span>

<option value="nw" <?php if(isset($_POST['regions']) && $_POST['regions'] == "nw") echo 'selected = "selected"' ;?>>Northwest</option>

<option value="sw" <?php if(isset($_POST['regions']) && $_POST['regions'] == "sw") echo 'selected = "selected"' ;?>>Southwest</option>

<option value="mw" <?php if(isset($_POST['regions']) && $_POST['regions'] == "mw") echo 'selected = "selected"' ;?>>Midwest</option>

<option value="ne" <?php if(isset($_POST['regions']) && $_POST['regions'] == "ne") echo 'selected = "selected"' ;?>>Northeast</option>

<option value="se" <?php if(isset($_POST['regions']) && $_POST['regions'] == "se") echo 'selected = "selected"' ;?>>Southeast</option>
</select>

<label>Comments</label>
<textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments'])  ;?></textarea>
<span> <?php echo $comments_err;?> </span>

<label>Privacy</label>
<ul>
<li><input type="radio" name="privacy" value="yes" <?php if(isset($_POST['privacy']) && $_POST['privacy'] == "yes") echo 'checked = "checked"'  ;?>>Yes</li>
</ul>
<span> <?php echo $privacy_err;?> </span>

<input type="submit" value="Send it!">

<p><a href="">Reset</a></p>

</fieldset>
</form>
</body>
</html>

