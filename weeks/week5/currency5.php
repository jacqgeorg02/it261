<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Currency 3 php sticky form</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
<!-- we're adding a special function in the form action the htmlspecialchars which prevents cross-site scripting (maybe) see https://www.geeksforgeeks.org/how-to-prevent-xss-with-html-php/-->
<!-- We want the information to stay in the form, not be deleted if someone needs to add something that they skipped -->
     
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
<fieldset>
<label>NAME</label>
<input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name'])  ;?>">

<label>EMAIL</label>
<input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email'])  ;?>">

<label>How much money do you have?</label>
<input type="number" name="amount" value="<?php if(isset($_POST['amount'])) echo htmlspecialchars($_POST['amount'])  ;?>">

<!-- time for our radio button that has an additional attribute of VALUE  --> 
<label>Choose your currency</label>
<ul>
<li><input type="radio" name="currency" value="0.017" <?php if(isset($_POST['currency']) && $_POST['currency'] == 0.017) echo 'checked="checked"' ;?>>Rubles</li>
<!-- notice that there is no tag; it's outside of the html, so instead, we'll do a ul -->
<li><input type="radio" name="currency" value="0.76" <?php if(isset($_POST['currency']) && $_POST['currency'] == 0.76) echo 'checked="checked"' ;?>>Canadian Dollars</li>
<li><input type="radio" name="currency" value="1.15" <?php if(isset($_POST['currency']) && $_POST['currency'] == 1.15) echo 'checked="checked"' ;?>>Pounds</li>
<li><input type="radio" name="currency" value="1.00" <?php if(isset($_POST['currency']) && $_POST['currency'] == 1.00) echo 'checked="checked"' ;?>>Euros</li>
<li><input type="radio" name="currency" value="0.0074" <?php if(isset($_POST['currency']) && $_POST['currency'] == 0.0074) echo 'checked="checked"' ;?>>Yen</li>
</ul>

<label>Choose your banking institution</label>
<select name="bank">
<option value="" <?php if(isset($_POST['bank']) && is_null ($_POST['bank'])) echo 'selected = "selected"' ;?>>Select One!</option>

<option value="Bank of America" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'Bank of America') echo 'selected = "selected"' ;?>>Bank of America</option>
<option value="Chase Bank" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'Chase Bank') echo 'selected = "selected"' ;?>>Chase Bank</option>
<option value="Banner Bank" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'Banner Bank') echo 'selected = "selected"' ;?>>Banner Bank</option>
<option value="Wells Fargo Bank" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'Wells Fargo Bank') echo 'selected = "selected"' ;?>>Wells Fargo Bank</option>
<option value="BECU" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'BECU') echo 'selected = "selected"' ;?>>Boeing Credit Union</option>
<option value="WSECU" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'WSECU') echo 'selected = "selected"' ;?>>Washington State Employees Credit Union</option>
</select>

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

if(empty($_POST['name'])) {
    echo '<p class="error">Please fill out your name!</p>';
}

if(empty($_POST['email'])) {
    echo '<p class="error">Please fill out your email!</p>';
}

if(empty($_POST['amount'])) {
    echo '<p class="error">Please fill out your amount!</p>';
}
if(empty($_POST['currency'])) {
    echo '<p class="error">Please check your currency!</p>';
}

if($_POST['bank'] == NULL) {
    echo '<p class="error">Please choose your banking institution!</p>';
}

if (isset($_POST['name'],
$_POST['email'],
$_POST['amount'],
$_POST['currency'],
$_POST['bank'])) {
$name = $_POST['name'];
$email = $_POST['email'];
$amount = floatval($_POST['amount']);
$currency = floatval($_POST['currency']);
$bank = $_POST['bank'];
$dollars = $amount * $currency;

if(!empty($name && $email && $amount && $currency) && ($bank != NULL)) {

echo '
<div class="box">
<h2>Hello <b>'.$name.'!</b></h2>
<p>You now have <b>$'.number_format($dollars, 2).' American dollars</b>, which will be deposited in your account at <b>'.$bank.'.</b> We will be emailing you at <b>'.$email.'</b> within the next 24 hours.</p>

</div>

';
if($dollars <= 1000) {
    $embed_code = '<iframe width="380" height="300"  src="https://www.youtube.com/embed/ZTIu4UbkK94?si=vpzj1CCt3T0ApWvc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';

    echo ' 
    <div class="box">
    <h2 style="textalign:center">I am NOT happy because I have <b>$'.number_format($dollars, 2).'</b> American dollars!</h2>'.$embed_code.'
    </div>';
} else {
    $embed_code = '<iframe width="380" height="300" src="https://www.youtube.com/embed/w9VgxSAIO-I?si=Z0DWSDETfLjbmlal" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';

    echo ' 
    <div class="box">
    <h2 style="textalign:center">I am REALLY happy because I have <b>$'.number_format($dollars, 2).'</b> American dollars!</h2>'.$embed_code.'
    </div>'; 
}

}
}

}
// end SERVER REQUEST

?>
</body>
</html>

<!-- <option value="" NULL <?php if(isset($_POST['bank']) && $_POST['bank'] == NULL) echo 'selected = "unselected"' ;?>>Select one!</option> -->