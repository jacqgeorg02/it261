<?php
// class coffee exercise
// if today is Friday, it will be pumpl=kin latte day
// INTRODUCING the isset() function
// then we will introduce our first GLOBAL varible
// our switch

// starting the switch
// if $GET('today') is set, $today, then all is well, but it is not set therefore the else is the day!
// else, today is TODAY

// GLOBAL VARIABLES are capitalized and start with $_GET

//  what is the isset function -- it's asking if something has been set?

// $variable = 'This is our variable';
// if(isset($variable)) {
//     echo 'Variable has been set!';
// } else {
//     echo 'Variable has not been set!';
// }

// echo '<br>';

// if(isset($_GET['today'])) {
//     echo 'Today has been set!';
// } else {
//     echo 'NOT!!!!!';
// }
// The GET Global variable receives data but no data has been provided, so it doesn't work!

if(isset($_GET['today'])){
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch($today) {

case 'Sunday' : 
$coffee = '<h2>Sunday is our Regular Joe Day!</h2>';
$pic = 'coffee.png';
$alt = 'Regular Coffee';
$content = '<p><b>Regular Coffee</b> is typically made using roasted coffee beans, which have a dark brown color and a strong, bold flavor. White coffee, on the other hand, is made using unroasted coffee beans, which are light in color and have a milder, more subtle flavor.</p>';
        
break;

case 'Monday' : 
$coffee = '<h2>Monday is our Latte Day!</h2>';
$pic = 'latte.jpg';
$alt = 'Latte';
$content = '<p>A<b>Latte</b> is a coffee drink of Italian origin made with espresso and steamed milk. Variants include the chocolate-flavored mocha; alternatives to milk, such as soy milk or almond milk, are also used.</p>';

break;
    
case 'Tuesday' : 
$coffee = '<h2>Tuesday is our Americano Day!</h2>';
$pic = 'americano.jpg';
$alt = 'Americano';
$content = '<p>An <b>Americano</b> is a type of coffee drink prepared by diluting an espresso shot with hot water at a 1:3 to 1:4 ratio, resulting in a drink that retains the complex flavors of espresso, but in a lighter way. Its strength varies with the number of shots of espresso and the amount of water added.</p>';
    
break;

case 'Wednesday' : 
$coffee = '<h2>Wednesday is our Frappuccino Day!</h2>';
$pic = 'frap.jpg';
$alt = 'Frappuccino';
$content = '<p>A <b>Frappuccino</b> may consist of coffee or crème base, blended with ice and ingredients such as flavored syrups and usually topped with whipped cream and or spices.</p>';
    
break;

case 'Thursday' : 
$coffee = '<h2>Thursday is our Cappuccino Day!</h2>';
$pic = 'cap.jpg';
$alt = 'Cappuccino';
$content = '<p>A <b>Cappuccino</b> is an espresso-based coffee drink that is traditionally prepared with steamed milk foam (microfoam). It is typically smaller in volume than a caffè latte, with a thicker layer of microfoam,</p>';
        
break;

case 'Friday' : 
$coffee = '<h2>Friday is our Pumpkin Spice Latte Day!</h2>';
$pic = 'pumpkin.jpg';
$alt = 'Pumpkin Spice Latte';
$content = '<p>A <b>Pumpkin Spice Latte</b> is a coffee drink made with a mix of traditional fall spice flavors (cinnamon, nutmeg, and clove), steamed milk, espresso, and often sugar, topped with whipped cream and pumpkin pie spice.</p>';

break;

case 'Saturday' : 
$coffee = '<h2>Saturday is our Green Tea Latte Day!</h2>';
$pic = 'green-tea.jpg';
$alt = 'Green Tea Latte';
$content = '<p><b>Green Tea Lattes</b> are made from finely ground green tea leaves, so they have a distinctive earthy and slightly bitter taste. Matcha does contain caffeine, but its flavor is not as strong as coffee.</p>';
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Switch Classwork Exercise</title>

    <style>
    * {
        padding:0;
        margin:0;
        box-sizing:border-box;
    }

    #wrapper {
        width:940px;
        margin: 20px auto;
    }

    h1, h2, img {
        margin-bottom:10px;
    }

    p {
        margin-bottom:20px;
    }
    </style>
</head>
<body>
    <div id="wrapper">
    <h1>My Wonderful Switch Classwork Exercise (Not the daily homework)</h1>
    <?php echo $coffee;?>
    <img src="./images/<?php echo $pic;?>" alt="<?php echo $alt;?>">
    <?php echo $content; ?>

    <h2>Check out our Daily Specials!</h2>
    <!-- <p><i>Please complete all of the days of the week</i></p> -->
    <ul>
    <li><a href="switch.php?today=Sunday">Sunday</li>
    <li><a href="switch.php?today=Monday">Monday</li>
    <li><a href="switch.php?today=Tuesday">Tuesday</li>
    <li><a href="switch.php?today=Wednesday">Wednesday</li>
    <li><a href="switch.php?today=Thursday">Thursday</li>
    <li><a href="switch.php?today=Friday">Friday</li>    
    <li><a href="switch.php?today=Saturday">Saturday</li>
    </ul>
    
    <!-- end wrapper -->
    </div>

</body>
</html>
<!-- <img src="./images/<?php    ;?>"  alt="<?php ;?>"> -->