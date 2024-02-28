<?php 
include('config.php');  
include('./includes/header.php'); ?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Gallery</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body> -->
    <!-- when we have an array, we have to have a foreach loop -->

<table>
<tr><th colspan="3">A Short Gallery of the Last Few Years</th></tr> 
<?php foreach($people as $name => $image):?>

<tr>
<td><img src="images/<?php echo substr($image, 0, 6);?>.jpg" alt ="<?php echo str_replace('_', ' ',$name) ;?>"></td>
<td><?php echo str_replace('_', ' ',$name );?></td>
<td><?php echo substr($image, 6,-1);?></td>
</tr>
<?php endforeach;?>
</table> 
<?php
include('./includes/footer.php');?>
