<?php

// do not call out the header include yet!  That's very important
// the following information is ABOVE the DOCTYPE!! If it's above the DOCTYPE, you can't echo anything!!

include('config.php');

// here's our logic -- when I click on giuseppe, people-view is looking for id=1; we get that with some php
// is ID set???

if(isset($_GET['id'])) {
$id = (int)$_GET['id'];

} else {
    header('Location: places.php');
}

$sql = 'SELECT * FROM places WHERE places_id = '.$id.' ';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {
    
while($row = mysqli_fetch_assoc($result)) {
$place_name = stripcslashes($row['place_name']);
$city = stripcslashes($row['city']);
$state = stripcslashes($row['state']);
$url = stripcslashes($row['url']);
$blurb = stripcslashes($row['blurb']);
$details = stripcslashes($row['details']);
// will I add a column? maybe
$feedback = '';

}
// closing the while loop

} else {
    $feedback = 'Houston, we have a problem!';
}
// closing if statement

include('./includes/header.php');
?>

<!-- now we can do the main -->
<div id="wrapper">
<main>
<h1>Welcome to Our Places-View Page</h1>
<h2>Introducing:  <?php echo $place_name;?></h2>
<ul>
<?php
echo '
<li><b>Place Name: </b>' .$place_name.'</li>
<li><b>City: </b>' .$city.'</li>
<li><b>State: </b>' .$state.'</li>
<li><b>URL: </b>' .$url.'</li>
';
?>
</ul>
<p></p>
<p><?php  echo $blurb;?></p>
<p>Return to Our <a href="places.php">Places Page</a></p>
</main>

<aside>
<h3>Take a Look</h3>

<figure>
<img src="./images/place<?php echo $id?>.jpg" alt="<?php echo $place_name ?>">
<figcaption> <?php echo $details;  ?></figcaption>
</figure>

</aside>

</div>
<!-- end of wrapper -->
<?php

@mysqli_free_result($result);
@mysqli_close($iConn);

include('./includes/footer.php');

