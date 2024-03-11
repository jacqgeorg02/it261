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
<header>

<!-- // if our Session for the username is successful, we will display a message -->

<?php 
if(isset($_SESSION['success'])):?>

<div class="success">
<h3>
<?php echo $_SESSION['success'];
unset($_SESSION['success']);
?>
</h3>

</div>
<!-- end of success class -->
<?php endif;
// <!-- close if -->

if(isset($_SESSION['username'])):?>
<div class="welcome-logout">
<h3>Hello
<?php echo $_SESSION['username'];?>
</h3>
<a href="index.php?logout='1'">Logout</a>
</div>
<!-- end of welcome-logout -->
<?php endif; ?>
</header>
<!-- MY WRAPPER STARTS HERE -->
<div id="wrapper">
<h1>Welcome to the home page of our website!</h1>

</div>
<!-- close wrapper --> 
<?php include('./includes/footer.php');?>