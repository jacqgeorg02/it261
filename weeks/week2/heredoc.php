<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heredoc.php</title>
</head>
<body>

<?php
$name = "<i>The Handmaid's Tale</i>";
$myDoc = "One of my favorite books is $name, written by Margaret Atwood, and is presently a miniseries on HULU. Hulu's viewing audience is extremely excited about the miniseries and looks forward to the 5th season of the award-winning $name! <p> Elizabeth Moss' rendition of June is right on! I liked the shows first two seasons!</p>";

echo $myDoc; 

?>
</body>
</html>

