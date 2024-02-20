<?php

ob_start();


$first_name='';
$last_name='';
$email='';
$features='';
$phone='';
$regions='';
$comments='';
$privacy='';
$trails = '';

$first_name_err='';
$last_name_err='';
$email_err='';
$features_err='';
$phone_err='';
$regions_err='';
$comments_err='';
$privacy_err='';
$trails_err = '';

if($_SERVER['REQUEST_METHOD'] == "POST") {
//   if inputs are empty, we will declare a statement else we will assigning the $_POST to a variable
// $wines = $_POST['wines'] will be assigned to a variable

if(empty($_POST['trails'])) {
// say or do something or do else
$trails_err = 'What...no interesting trails?';
} else {
    $trails = $_POST['trails'];
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

if(empty($_POST['features'])) {
// say or do something or do else
$features_err = 'Please check the features you\'re looking for!';
}else {
$features = $_POST['features'];
}

// if(empty($_POST['phone'])) {
// // say or do something or do else
// $phone_err = 'Please provide your phone number';
// }else {
// $phone = $_POST['phone'];
// }

if(empty($_POST['phone'])) { // if empty, type in your number
    $phone_err = 'Your phone number please!';
    } elseif(array_key_exists('phone', $_POST)){
    if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
    { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
    $phone_err = 'Invalid format!';
    } else{
    $phone = $_POST['phone'];
    } // end else
    } // end main if

if(empty($_POST['regions'])) {
// say or do something or do else
$regions_err = 'Please select your primary region of interest';
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

// we need this function for trails
function my_trails($trails) {
$my_return='';
if(!empty($_POST['trails'])) {
    $my_return = implode(',', $_POST['trails']);
}
return $my_return;
} 
// end my_trails function then ask if everything is set!

if(isset($_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['phone'],
$_POST['features'],
$_POST['trails'],
$_POST['regions'],
$_POST['comments'],
$_POST['privacy'])) {

$to = 'szemeo@mystudentswa.com';
$subject = 'Test email on  '.date('m/d/y, h i A');
$body = '
First Name:  '.$first_name.' '.PHP_EOL.'
Last Name:  '.$last_name.' '.PHP_EOL.'
Email:  '.$email.' '.PHP_EOL.'
Phone:  '.$phone.' '.PHP_EOL.'
Features:  '.$features.' '.PHP_EOL.'
trails:  '.my_trails($trails).' '.PHP_EOL.'
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
    $features &&
    $trails &&
    $regions &&
    $comments &&
    $privacy) &&
    preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {
    
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
    <title>Form 3 in Week 7 -- Phone Validation!</title>
    <style>
    * {
    padding:0;
    margin:0;
    box-sizing:border-box;
}

body {
    background:#D8EDCE;
}

form {
    width:500px;
    margin:30px auto;
}

label {
    display:block;
    margin-bottom:5px;
    font-weight:bold;
}

span {
    display:block;
    color:#0800F5;
    font-style:italic;
    margin-bottom:10px;
}

fieldset {
    padding:10px;
}

input[type=text],
input[type=email],
input[type=tel] {
    width:100%;
    margin-bottom:10px;
}

select {
    margin-bottom:10px;
}

textarea {
    width:100%;
    resize:none;
    height:80px;
    margin-bottom:10px;
}

form ul {
    list-style-type:none;
    margin-bottom:10px;
    margin-left:5px;
}

h1 {
    text-align:center;
    margin-top:20px;
}
</style>

    <!-- <link href="css/styles.css" type="text/css" rel="stylesheet"> -->
</head>
<body>
    <h1>Hiking Trails & Beautiful Views</h1>
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

<label>Features</label>
<ul>
<li><input type="radio" name="features" value="waterfalls" <?php if(isset($_POST['features']) && $_POST['features'] == 'waterfalls') echo 'checked ="checked" ' ;?>>Waterfalls</li>
<li><input type="radio" name="features" value="lakes" <?php if(isset($_POST['features']) && $_POST['features'] == 'lakes') echo 'checked ="checked" ' ;?>>Lakes</li>
<li><input type="radio" name="features" value="rivers" <?php if(isset($_POST['features']) && $_POST['features'] == 'rivers') echo 'checked ="checked" ' ;?>>Rivers</li>
<li><input type="radio" name="features" value="mountains" <?php if(isset($_POST['features']) && $_POST['features'] == 'mountains') echo 'checked ="checked" ' ;?>>Mountains</li>
<li><input type="radio" name="features" value="views" <?php if(isset($_POST['features']) && $_POST['features'] == 'views') echo 'checked ="checked" ' ;?>>Views</li>
</ul>
<span> <?php echo $features_err;?> </span>

<label>Phone</label>
<input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars ($_POST['phone']) ;?>">
<span> <?php echo $phone_err;?> </span>

<label>Favorite Trails & Areas</label>
<ul>
<li><input type="checkbox" name="trails[]" value="sv"  <?php if(isset($_POST['trails']) && in_array('cab', $trails)) echo 'checked = "checked" '  ;?>>Skagit Valley, WA</li>

<li><input type="checkbox" name="trails[]" value="jt"  <?php if(isset($_POST['trails']) && in_array('merlot', $trails)) echo 'checked = "checked" '  ;?>>Joshua Tree National Park, CA</li>

<li><input type="checkbox" name="trails[]" value="np"  <?php if(isset($_POST['trails']) && in_array('syrah', $trails)) echo 'checked = "checked" '  ;?>>Naches Peak, Mt.Rainier, WA</li>

<li><input type="checkbox" name="trails[]" value="l22"  <?php if(isset($_POST['trails']) && in_array('malbec', $trails)) echo 'checked = "checked" '  ;?>>Lake 22, WA</li>

<li><input type="checkbox" name="trails[]" value="sl"  <?php if(isset($_POST['trails']) && in_array('red', $trails)) echo 'checked = "checked" '  ;?>>Skyline, Mt. Rainier, WA</li>
</ul>

<span> <?php echo $trails_err;?> </span>

<label>Regions</label>
<select name="regions">
<option value="" <?php if(isset($_POST['regions']) && is_null($_POST['regions'])) echo 'selected = "unselected"' ;?>>Select One!</option>
<!-- <span> <?php echo $regions_err;?> </span> -->

<option value="ew" <?php if(isset($_POST['regions']) && $_POST['regions'] == "ew") echo 'selected = "selected"' ;?>>Eastern Washington</option>

<option value="ww" <?php if(isset($_POST['regions']) && $_POST['regions'] == "ww") echo 'selected = "selected"' ;?>>Western Washington</option>

<option value="cw" <?php if(isset($_POST['regions']) && $_POST['regions'] == "cw") echo 'selected = "selected"' ;?>>Central Washington</option>

<option value="az" <?php if(isset($_POST['regions']) && $_POST['regions'] == "az") echo 'selected = "selected"' ;?>>Arizona</option>

<option value="ut" <?php if(isset($_POST['regions']) && $_POST['regions'] == "ut") echo 'selected = "selected"' ;?>>Utah</option>

<option value="sc" <?php if(isset($_POST['regions']) && $_POST['regions'] == "sc") echo 'selected = "selected"' ;?>>Southern California</option>

<option value="cd" <?php if(isset($_POST['regions']) && $_POST['regions'] == "cd") echo 'selected = "selected"' ;?>>California Desert</option>
</select>
<span> <?php echo $regions_err;?> </span>

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

