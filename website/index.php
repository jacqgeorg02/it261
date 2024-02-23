<?php 
include('config.php');  
include('./includes/header.php'); ?>

<div id="wrapper">
<div id="hero">

<?php
echo random_images($photos);
?>

<!-- <img src="images/twelve.jpg" alt="Twelve is greater than 3"> -->
<!-- end of hero -->
</div>

<main>
<h1>Welcome to our Web App Programming Class!!</h1>
<h2>We are going to learn PHP!</h2>
<p>Quisque velit ligula, efficitur eu magna et, pretium porttitor nisi. Nunc porta vestibulum odio ac dapibus. Vivamus ultrices leo enim, ac varius enim gravida a. Nunc mattis vulputate tellus eget aliquet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam luctus, ipsum et convallis ullamcorper, orci ipsum convallis orci, sit amet accumsan sem mi a metus. Etiam vulputate finibus iaculis. Etiam ac tortor erat. Nam ornare vulputate neque, ut blandit mi ultricies ut. Nullam semper urna varius ligula fringilla, vitae tincidunt nisl sollicitudin. Vestibulum bibendum, tortor sit amet vestibulum euismod, elit nisi cursus nisl, sed gravida lectus lorem quis augue. In hac habitasse platea dictumst. Nullam aliquet et urna sit amet efficitur. Donec elit velit, pulvinar a interdum eget, ultrices in dolor. Integer in turpis risus. Vestibulum ligula lacus, dignissim id dui faucibus, pretium ultrices ex.</p>
<h2>Another Headline 2!</h2>
<p>Vivamus condimentum est eu ante pretium, semper luctus turpis facilisis. Suspendisse fringilla erat a ornare sodales. Phasellus ac mi diam. Ut aliquam libero ut libero cursus, viverra faucibus elit auctor. Cras viverra urna sem, eget commodo dui placerat eu. Duis consectetur feugiat arcu, id sagittis libero feugiat ac. Quisque ut arcu in velit suscipit condimentum. Maecenas tempus velit laoreet, feugiat ligula vitae, venenatis arcu. Sed tempus posuere odio, sed aliquet mi semper vitae.</p>
</main>

<aside>
<h3>This is Our Headline 3 in Our beautiful aside</h3>
<p>Aliquam id elementum purus. Integer non ligula neque. Vestibulum tincidunt sit amet leo in egestas. Donec congue nisl ut elit imperdiet ultricies. Pellentesque erat velit, elementum ornare pulvinar sed, euismod a nisi. Morbi sed risus in eros iaculis pretium nec ac tellus. In dui lacus, molestie sed quam sit amet, bibendum tristique erat. Aliquam erat volutpat. Vivamus id nibh porta, vulputate eros a, placerat libero.</p>
</aside>

<!-- end wrapper -->
</div>

<?php
include('./includes/footer.php');
// the closing php tag is unnecessary because there will be no HTML following this