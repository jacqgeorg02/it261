<?php

include('config.php');
include('./includes/header.php');
?>
<!-- we're going to have some html, a wrapper or a main or something. This is interesting because it means that we have some html in between the php.  Hmmm -->

<div id="wrapper">
<main>
<h1>Welcome to My Favorite Places</h1>

<?php
$sql = 'SELECT * FROM places';

// now we need to connect to the database

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

// we have a row, which translates into an array
// if our result is greater than 0, we are happy

if(mysqli_num_rows($result) > 0) {
// we're going to add a while loop
while($row = mysqli_fetch_assoc($result)) {
    echo '
    <h2>Head on over to: '.$row['place_name'].' </h2>
<ul>
<li><b>City: </b>'.$row[ 'city'].'</li>
<li><b>State: </b>'.$row[ 'state'].'</li>
</ul>
<p>For More Information about '.$row[ 'place_name'].', click <a href="places-view.php?id='.$row['places_id'].'">here</a></p>
    
    ';
}
// end while loop
} else {
    echo 'Nobody Home!';
}
// end if statement

// we are going to release the server

@mysqli_free_result($result);
@mysqli_close($iConn);

// <li>Information about: '.$row['occupation'].'</li>
// <li>Information about: '.$row['details'].'</li>
?>
</main>

<aside>
<h2>Guess Where!</h2>
<?php echo random_imagess($places);?>
</aside>

<!-- we'll have a footer, but first we need to close the wrapper -->
</div>
<!-- end wrapper -->
<!--  and now we need to footer -->
<?php
include('./includes/footer.php');