<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>

<body class="<?php echo $body;?>">
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

    <div class="inner-header">
    <a href="index.php">
    <img id="logo" src="images/logo.jpg" alt="logo">
    </a>

<nav>
    <ul>
        <li><?php echo make_links($nav);?>
    </ul>
</nav>

    <!-- end of innerheader -->
    </div>
</header>

    
<!-- in line 47, I took our the </li> at the end.  I don't understand why, but that eliminated the error -->