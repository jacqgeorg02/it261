<?php
// this is our index.php page which in the big picture, it represents the home page of a website; you can only see this page if you login!

session_start();
include('config.php');

// if the username has not been set, you will not see the index.php file, but will be directed back to the login page

if(!isset($_SESSION['username'])) {
    header('Location:login.php');
}

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location:login.php');
}

include('./includes/header.php');?>

<!-- MY WRAPPER STARTS HERE -->
<div id="wrapper">
    
<!-- <nav>
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="daily.php">Daily</a></li>
<li><a href="about.php">About</a></li>
<li><a href="parks.php">Database</a></li>
<li><a href="contact.php">Contact</a></li>
</ul>
</nav> -->
<h1>Welcome to the home page of our National Parks website!</h1>
<?php echo random_images($parkel);?>

<main>
<h1>Hello</h1>
</main>
<h3>Hello</h3>
<aside>


</aside>

</div>
<!-- close wrapper --> 
<?php include('./includes/footer.php');?>