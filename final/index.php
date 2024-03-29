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
    
<h1>Welcome to Jacquie's National Parks Website!</h1>
<?php echo random_images($parkel);?>

<main>
<h1>Hello</h1>
<p>Ligula ullamcorper malesuada proin libero nunc consequat interdum. Ultrices dui sapien eget mi proin sed libero. At lectus urna duis convallis convallis tellus id interdum. Tincidunt dui ut ornare lectus sit amet. Odio ut sem nulla pharetra. Pellentesque massa placerat duis ultricies lacus sed turpis. Sit amet aliquam id diam maecenas ultricies mi eget. Pretium vulputate sapien nec sagittis aliquam malesuada bibendum. Quam elementum pulvinar etiam non quam lacus suspendisse faucibus interdum. Morbi non arcu risus quis. Hac habitasse platea dictumst quisque sagittis purus sit amet. Tortor aliquam nulla facilisi cras fermentum odio eu feugiat pretium. Risus feugiat in ante metus dictum at tempor. Eu facilisis sed odio morbi quis commodo odio aenean sed. Proin libero nunc consequat interdum. Tellus pellentesque eu tincidunt tortor. Elementum tempus egestas sed sed risus pretium. Imperdiet proin fermentum leo vel orci porta.</p>
<p>Morbi quis commodo odio aenean sed. Magna ac placerat vestibulum lectus. Rutrum quisque non tellus orci ac. Congue eu consequat ac felis donec. Vivamus arcu felis bibendum ut tristique. Ultrices in iaculis nunc sed augue. Tincidunt tortor aliquam nulla facilisi cras. Integer feugiat scelerisque varius morbi enim nunc faucibus a pellentesque. Eu ultrices vitae auctor eu augue ut. Quisque non tellus orci ac auctor augue mauris augue neque. Euismod elementum nisi quis eleifend quam adipiscing vitae proin. Vulputate odio ut enim blandit volutpat maecenas volutpat. Elementum eu facilisis sed odio morbi quis commodo odio. Vulputate mi sit amet mauris. Tincidunt lobortis feugiat vivamus at augue eget. Tincidunt nunc pulvinar sapien et ligula ullamcorper. Vel facilisis volutpat est velit egestas dui. In eu mi bibendum neque egestas congue. Neque aliquam vestibulum morbi blandit cursus risus at ultrices. Dui id ornare arcu odio ut sem nulla.</p>

</main>

<aside>
<figure>
<img src="./images/whatja.jpg" alt="Jacquie in thought">
<figcaption>
My brain is swirling, and I can't quite catch what I'm looking for, but I know that, eventually, I will. 
</figcaption>
</figure>
</aside>

</div>
<!-- close wrapper --> 
<?php include('./includes/footer.php');?>