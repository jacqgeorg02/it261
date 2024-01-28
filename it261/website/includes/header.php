<?php

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE) {
    case 'index.php' :
    $title = 'Home Page of our Website Project';
    $body = 'home';
    break;

    case 'about.php' :
    $title = 'About Page of our Website Project';
    $body = 'about inner';
    break;

    case 'daily.php' :
    $title = 'Daily Page of our Website Project';
    $body = 'daily inner';
    break;
            
    case 'project.php' :
    $title = 'Project Page of our Website Project';
    $body = 'project inner';
    break;
                
    case 'contact.php' :
    $title = 'Contact Page of our Website Project';
    $body = 'contact inner';
    break;
    
    case 'gallery.php' :
    $title = 'Gallery Page of our Website Project';
    $body = 'gallery inner';
    break;
}

// our navigational array -- this is define array
$nav = array (
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery'
);
// This is the beginning of the daily HW
if(isset($_GET['today'])){
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch($today) {

case 'Sunday' :
    $actDay = 'green'; 
    $song = 'Sunday\'s song is "Sunday Mornin\' Comin\' Down"';
    $perf = 'Performed by Johnny Cash';
    $album = 'From the album <i>The Johnny Cash Show</i>';
    $relyr = 'Released in 1970';
    $pic = 'cashfolsom.JPG';
    $alt = 'Johnny Cash at Folsom Prison';
    $content = '<p><b>"Sunday Mornin\' Comin\' Down"</b> is a song written by Kris Kristofferson that was recorded in 1969 by Ray Stevens before becoming a No.1 hit on the Billboard US Country chart for Johnny Cash.</p><p>In a 2013 interview, Kristofferson said the song "opened up a whole lot of doors for me. So many people that I admired, admired it. Actually, it was the song that allowed me to quit working for a living."</p><p>The biggest success on disc for the song came from a Johnny Cash performance that had been taped live at the Ryman Auditorium during a taping of <i>The Johnny Cash Show</i> as part of a "Ride This Train" segment, with filmed background visuals showing a down-and-out wanderer roaming around the Public Square area of Shelbyville, Tennessee.';
        
break;

case 'Monday' : 
    $actDay = 'blue';
    $song = 'Monday\'s song is "Manic Monday"';
    $perf = 'Performed by The Bangles';
    $album = 'From the album <i>Different Light</i>';
    $relyr = 'Released in 1986';
    $pic = 'bangles.JPG';
    $alt = 'The Bangles';
    $content = '<p><b>"Manic Monday"</b> is a song written by the American pop rock band the Bangles, which was the first single released from their second studio album, Different Light. The song was written by American musician Prince, under the pseudonym "Christopher". Lyrically, it describes a woman who is waking up to go to work on Monday, wishing it was still Sunday so that she could continue relaxing.</p><p>In an interview with MTV UK in 1989 Debbi Peterson explained why Prince gave them the song: "Prince really liked our first album. He liked the song "Hero Takes a Fall", which is a great compliment, because we liked his music. He contacted us, and said, "I\'ve got a couple of songs for you. I\'d like to know if you\'re interested," and of course we were.';

break;
    
case 'Tuesday' : 
    $actDay = 'orange';
    $song = 'Tuesday\'s song is "Tuesday\'s Dead"';
    $perf = 'Performed by Cat Stevens';
    $album = 'From the album <i>Teaser and the Firecat</i>';
    $relyr = 'Released in 1971';
    $pic = 'cat.JPG';
    $alt = 'Cat Stevens';
    $content = '<p>Coming from Cat Stevens (Yusuf), <b>"Tuesday\'s Dead"</b> is a steady, moody acoustic song reflecting on the world in the day. The folk-rock song was released in 1971 as a single across the world. The lyrics ask questions of faith, religious leaders, and others, searching for the meaning of life and someone\'s place in this world and making a difference. “Yeah, we must try to shake it down, do our best to break the ground, try to turn the world around one more time. Whoa, where do you go? When you don\'t want no one to know? Who told tomorrow Tuesday\'s dead.”';
    
break;

case 'Wednesday' : 
    $actDay = 'red';
    $song = 'Wednesday\'s song is "Wednesday Morning, 3AM"';
    $perf = 'Performed by Simon & Garfunkel';
    $album = 'From the album <i>Wednesday Morning, 3AM</i>';
    $relyr = 'Released in 1964';
    $pic = 'paulart.JPG';
    $alt = 'Paul Simon & Art Garfunkel';
    $content = '<p>Simon and Garfunkel\s iconic song <b>"Wednesday Morning; 3 A.M."</b> was released in 1964 as the title track of their debut studio album. The song holds a profound meaning, portraying the struggles and yearnings of individuals living in a challenging and complicated world.</p><p>This poignant ballad explores themes of loneliness, disconnection, and the search for meaning amidst the chaos of daily life. It reflects on the profound human experiences that can often be overshadowed or unnoticed in the rush of everyday existence. Simon & Garfunkel crafted a song that resonated with listeners by delving into the universal emotions that many can relate to.';
    
break;

case 'Thursday' : 
    $actDay = 'magenta';
    $song = 'Thursday\'s song is "Thursday"';
    $perf = 'Performed by Jim Croce';
    $album = 'From the album <i>I Got a Name</i>';
    $relyr = 'Released in 1973';
    $pic = 'croce.jpg';
    $alt = 'Jim Croce';
    $content = '<p><b>"Thursday"</b> is a heartfelt and introspective song written and performed by the legendary American singer-songwriter Jim Croce. Released in 1973, this poignant ballad reflects Croce\'s personal experiences and emotions, which resonate with listeners to this day. The song beautifully captures the essence of love, longing, and the human desire for connection.</p><p>Croce\'s ability to express complex emotions with simplicity and clarity is one of the reasons "Thursday" remains such a beloved song.';
        
break;

case 'Friday' : 
    $actDay = 'black';
    $song = 'Friday\'s song is "Friday Night"';
    $perf = 'Performed by Eric Paslay';
    $album = 'From the album <i>Eric Paslay</i>';
    $relyr = 'Released in 2013';
    $pic = 'eric-paslay.jpg';
    $alt = 'Eric Paslay';
    $content = '<p><b>"Friday Night"</b> is a song written by Eric Paslay, Rose Falcon and Rob Crosby. It was originally recorded by American country music trio Lady Antebellum on their 2011 album <i>Own the Night</i>. It was later recorded by Paslay in 2013 as his third single for EMI Nashville, and as a song on his self-titled debut album in 2014.</p><p>Sagittis orci a scelerisque purus semper eget duis. Pellentesque dignissim enim sit amet venenatis urna cursus eget. Sed turpis tincidunt id aliquet risus. Cum sociis natoque penatibus et magnis dis parturient montes nascetur. Quam lacus suspendisse faucibus interdum posuere lorem ipsum dolor sit. Ac tincidunt vitae semper quis lectus nulla. Pretium viverra suspendisse potenti nullam ac tortor vitae. Quis blandit turpis cursus in hac habitasse. Ipsum nunc aliquet bibendum enim facilisis gravida. At in tellus integer feugiat scelerisque varius. Nibh tellus molestie nunc non blandit.';

break;

case 'Saturday' :
    $actDay = 'gray'; 
    $song = 'Saturday\'s song is "Saturday in the Park"';
    $perf = 'Performed by Chicago';
    $album = 'From the album <i>Chicago V</i>';
    $relyr = 'Released in 1972';
    $pic = 'chicago.jpg';
    $alt = 'Chicago';
    $content = '<p><b>"Saturday in the Park"</b> is a classic song by the band Chicago released in July 1972. Written by Robert Lamm, the song quickly became a hit, reaching number three on the Billboard Hot 100 chart. It has since become one of Chicago\'s signature songs and an anthem for many fans. This article aims to explore the deeper meaning behind the lyrics and the inspiration behind this timeless piece of music. </p><p>The song was inspired by a visit to New York City\'s Central Park. Robert Lamm, the songwriter, took a walk in the park on a Saturday and observed the people around him, soaking in the vibrant atmosphere. The lyrics talk about a variety of events, such as “feeding the pigeons” and “singing Italian songs,” all of which Lamm witnessed during his time in the park. This first-hand experience gave birth to the vivid imagery and energy captured in the song.';
}
?>

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
    <div class="inner-header">
    <a href="index.php">
    <img id="logo" src="images/logo.png" alt="logo">
    </a>

    <!-- <nav>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Daily</a></li>
            <li><a href="">Project</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Gallery</a></li>
        </ul>
    </nav> -->

    <nav>
    <ul>
    <?php
    foreach($nav as $key => $value) {
    if (THIS_PAGE == $key) {
    echo '<li><a style="color:red;" href=" '.$key.' "> '.$value.'</a></li>';
    } else {
    echo  '<li><a style="color:green;" href=" '.$key.' "> '.$value.'</a></li>';
    }
    }
    // end foreach

    ?>
    </ul>
    </nav>

    <!-- end of innerheader -->
    </div>
    </header>