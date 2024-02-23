<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My Adder Assignment</title>
<style>
    p {
        color:red;
        text-align: center;
    }
    
    h1 {
        color:green;
    }
    
    h2 {
        font-size:1.5em;
        text-align: center;
    }
    
    form {
        width:375px;
        margin:0 auto;
        border:1px solid red;
        padding:10px;
    }

    label {
        margin-bottom:15px;
    }

    
    h1 {
        text-align: center;
    }
    
    
</style>
</head>
<body>
<h1>Adder.php</h1> 
<form action="" method="post">
<fieldset>
<label>Enter the first number:</label>
<input type="number" name="num1">

<label>Enter the second number:</label>
<input type="number" name="num2">

<input type="submit" value="Add Em!!"> 
</fieldset>
</form>

<?php     

if(isset($_POST['num1'],
$_POST['num2'])) {

if(empty($_POST['num1']&&
$_POST['num2'] )) {
echo '<p class="error">Please fill out your numbers</p>';

} else {
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$myTotal = $num1 + $num2;    

echo '
<div class="box">
<h2>You added '.$num1.' and '.$num2.'</h2>
<p>and the answer is <br>
'.$myTotal.'!</p>
</div>
';
}
}
// end isset

?>
 <p><a href="">Reset page</a>  


 <!-- I always have a little trouble putting these kinds of error corrections in the correct order because I don't notice everything in a linear way. Also, when you said 'examine the code near the line indicated in the error message' I had no idea what you were talking about!! Why do I miss these things?? But here goes.

The first thing I notice is that the file begins with   < ?php 
but I can also see that there is HTML, so the first error that I fixed was putting in the !DOCTYPE -- this meant that I needed to move the html elements inside the body, well, right after the <body> and before the < ?php

Change the closing form to opening form

Put in the <fieldset> to prepare for the labels

Put in the opening label since the closing label is already there (for the first number) 

Change Num1 to num1
Change the input type from text to number
Well, just fix the labels and input types in the fieldset
Delete the <br> tags as unnecessary
Add the double quote to the end of "Add Em!!"
Close the </fieldset>
Move the 'Reset Page' to just after the </form> but then I ended up moving it just after the ?> closing tag for the php so that it would be in the right place

On to the < ?php

fix the first if and add the second if with the error message for empty fields

In the $myTotal change $Num2 to $num2

Create a div box for the echo message
Fix the echo quotes -- doubles to singles for '.$num1.'

I took the style out of the <p> in the final echo since it was part of the <style> in the <head>

Changed the form width from 400px to 375px to make the form look like the model

I know that I changed more, but since I was playing around, I can't exactly remember what I did when.

But if I look at the difference between what I started with, I can see some things right away:

The fixed one required the !DOCTYPE, including adding the My Adder Assignment title

I think the only <style> fix was the form width -- from 400px to 375px

Even after adding the !DOCTYPE, there were still significant errors with html, so I redid that.

the if(isset) needed to be tightened up. Because it didn't include the if(empty), it had skipped right into $num1 = $_POST['num1];

So, I fixed the if(isset).
Then, I added the if(empty).
After that, I worked on the echoes.

For the if(empty) I added the p class-"error" so that it could communicate with the stylesheet.

Then, I fixed the else part that does the adding and the echo by adding a <div class="box"> so that it would match the model.

Then, I put the Reset page html after the ?> closing php tag -->
