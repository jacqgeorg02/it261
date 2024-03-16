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
<p>Amet venenatis urna cursus eget nunc scelerisque viverra. Duis at tellus at urna condimentum. Facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum. Varius vel pharetra vel turpis nunc. Pellentesque nec nam aliquam sem et tortor consequat id. Dolor magna eget est lorem ipsum dolor sit amet. Augue neque gravida in fermentum et sollicitudin ac orci phasellus. Interdum consectetur libero id faucibus nisl tincidunt. Turpis massa sed elementum tempus. Vel eros donec ac odio tempor orci dapibus ultrices in. Enim lobortis scelerisque fermentum dui faucibus in. Integer vitae justo eget magna fermentum iaculis eu. Quam pellentesque nec nam aliquam sem et. Non curabitur gravida arcu ac tortor. Hendrerit dolor magna eget est lorem. Facilisis leo vel fringilla est ullamcorper eget. Sem et tortor consequat id porta nibh. Viverra maecenas accumsan lacus vel facilisis volutpat est velit egestas.</p>
</main>
<!-- <h3>Hello</h3>
<aside>


</aside> -->

</div>
<!-- close wrapper --> 
<?php include('./includes/footer.php');?>