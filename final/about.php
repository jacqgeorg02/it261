<?php 
include('config.php');  
include('./includes/header.php'); ?>



<table>
<tr><th colspan="3">Looking at a Few National Parks</th></tr> 
<?php foreach($park as $name => $image):?>

<tr>
<td><img src="images/<?php echo substr($image, 0, 6);?>.jpg" alt ="<?php echo str_replace('_', ' ',$name) ;?>"></td>
<td><?php echo str_replace('_', ' ',$name );?></td>
<td><?php echo substr($image, 6,-1);?></td>
</tr>
<?php endforeach;?>
</table> 

<table>
<tr><th>My Database Images</th></tr>
<tr>
<td>My National Parks Table</td>
</tr>
<tr>
<td><img src="images/georgeparks.jpg" alt="Jacquie's National Park Database Table"></td>
</tr>
<tr>
<td>My Users Table</td>
</tr>
<tr>
<td><img src="images/georgeusers.jpg" alt="Jacquie's Users Database Table"></td>
</tr>
</table>

<?php

include('./includes/footer.php');?>
