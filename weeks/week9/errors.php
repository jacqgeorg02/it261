<?php
// our errors file that we will be using a foreach loop
// we used an array_push function because we have different messages for different errors
// the logic is -- if we have errors, we need to display them

include('config.php');

if(count($errors) > 0) : ?>
<div class="errors">
<?php foreach($errors as $error) : ?>
    <p>
    <?php echo $error;?>
    </p>
<?php endforeach;?>

</div>
<!-- end div errors -->
<?php endif ;?>