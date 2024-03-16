<?php 
    include('config.php');
    include('./includes/header.php'); ?>
<div id="wrapper">
  
<main>
<h1>National Parks for the Day</h1>
<p>There are 429 National Parks in the United States. Here are some of my favorites!</p>

<h2 class="<?php echo $actDay;?> "><?php echo $park_name; ?></h2>
<p><?php echo $state;?></p>
<p><?php echo $relyr;?></p>
<p><?php echo $content;?></p>

<h2>Check out My National Parks for Each Day!</h2>
<ul>
    <li><a style="color:<?php
    if($today == 'Sunday') {
        echo 'green';
    } else {
        echo '#800000';
    } ; ?>" href="daily.php?today=Sunday">Sunday</a></li>

    <li><a style="color:<?php
    if($today == 'Monday') {
        echo 'blue';
    } else {
        echo '#800000';
    }; ?>" href="daily.php?today=Monday">Monday</a></li>

    <li><a style="color:<?php
    if($today == 'Tuesday') {
        echo 'orange';
    } else {
        echo '#800000';
    }; ?>" href="daily.php?today=Tuesday">Tuesday</a></li>

    <li><a style="color:<?php
    if($today == 'Wednesday') {
        echo 'red';
    } else {
        echo '#800000';
    }; ?>" href="daily.php?today=Wednesday">Wednesday</a></li>

    <li><a style="color:<?php
    if($today == 'Thursday') {
        echo 'magenta';
    } else {
        echo '#800000';
    }; ?>" href="daily.php?today=Thursday">Thursday</a></li>

    <li><a style="color:<?php
    if($today == 'Friday') {
        echo 'black';
    } else {
        echo '#800000';
    }; ?>" href="daily.php?today=Friday">Friday</a></li>

    <li><a style="color:<?php
    if($today == 'Saturday') {
        echo 'gray';
    } else {
        echo '#800000';
    }; ?>" href="daily.php?today=Saturday">Saturday</a></li>
    </ul>
    </main>

    <aside>
    <img src="./images/<?php echo $pic;?>" alt="<?php echo $alt;?>">
    </aside>

    <!-- end wrapper -->
    </div>

    <?php
    include('./includes/footer.php');
    