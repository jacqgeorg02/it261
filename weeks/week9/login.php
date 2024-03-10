<?php
include('server.php');
include('includes/header.php');
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="POST">
<!-- don't forget our labels. we'll need a first_name, last_name,email, username, password1, password2 -->

<label>Username</label>
<input type="text" name="username" value="<?php if(isset($_POST['username'])) echo htmlspecialchars($_POST['username'])  ;?>">

<label>Password</label>
<input type="password" name="password" value="<?php if(isset($_POST['password'])) echo htmlspecialchars($_POST['password'])  ;?>">

<button type="submit" name="login_user" class="btn">Login</button>

<button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF'])  ;?>'">Reset</button>

</form>

<?php
include('errors.php');?>
