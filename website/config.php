<?php
ob_start();
define ('DEBUG', 'TRUE');

include('credentials.php'); 

// begin
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

    case 'thx.php' :
    $title = 'Thanks Page of our Website Project';
    $body = 'thx inner';
    break;

    case 'places.php' :
    $title = 'Places Page of our Website Project';
    $body = 'places inner';
    break;

    case 'places-view.php' :
        $title = 'Places-View Page of our Website Project';
        $body = 'places-view inner';
        break;
}
// THIS_PAGE end
// begin -- our navigational array -- this is define array
$nav = array (
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'places.php' => 'Places',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery'
);

function make_links($nav) {
    // we can't echo here so we are returning
    $my_return = '';
    foreach($nav as $key => $value) {
    if (THIS_PAGE == $key) {
    $my_return .= '<li><a class="current" href=" '.$key.' "> '.$value.'</a></li>';
    } else {
    $my_return .= '<li><a href=" '.$key.' "> '.$value.'</a></li>';
    }        
    }
    // end foreach -- this includes a join!
    return $my_return;
    }
    // end function
// end of the nav

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
    $content = '<p><b>"Manic Monday"</b> is a song performed by the American pop rock band the Bangles, which was the first single released from their second studio album, Different Light. The song was written by American musician Prince, under the pseudonym "Christopher". Lyrically, it describes a woman who is waking up to go to work on Monday, wishing it was still Sunday so that she could continue relaxing.</p><p>In an interview with MTV UK in 1989 Debbi Peterson explained why Prince gave them the song: "Prince really liked our first album. He liked the song "Hero Takes a Fall", which is a great compliment, because we liked his music. He contacted us, and said, "I\'ve got a couple of songs for you. I\'d like to know if you\'re interested," and of course we were.';

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
// end of the daily homework with music

// begin my wine form's php

$first_name='';
$last_name='';
$email='';
$gender='';
$phone='';
$regions='';
$comments='';
$privacy='';
$wines = '';

$first_name_err='';
$last_name_err='';
$email_err='';
$gender_err='';
$phone_err='';
$regions_err='';
$comments_err='';
$privacy_err='';
$wines_err = '';

if($_SERVER['REQUEST_METHOD'] == "POST") {
//   if inputs are empty, we will declare a statement else we will assing the $_POST to a variable
// $_POST['wines'] will be assigned to a variable

if(empty($_POST['wines'])) {
// say or do something or do else
$wines_err = 'What...no wines?';
} else {
    $wines = $_POST['wines'];
}

if(empty($_POST['first_name'])) {
// say or do something or do else
$first_name_err = 'Please fill in your first name';
}else {
$first_name = $_POST['first_name'];
}

if(empty($_POST['last_name'])) {
// say or do something or do else
$last_name_err = 'Please fill in your last name';
}else {
$last_name = $_POST['last_name'];
}

if(empty($_POST['email'])) {
// say or do something or do else
$email_err = 'Please fill in your email';
}else {
$email = $_POST['email'];
}

if(empty($_POST['gender'])) {
// say or do something or do else
$gender_err = 'Please check your gender';
}else {
$gender = $_POST['gender'];
}

if(empty($_POST['phone'])) {
// say or do something or do else
$phone_err = 'Please provide your phone number';
}else {
$phone = $_POST['phone'];
}

if(empty($_POST['regions'])) {
// say or do something or do else
$regions_err = 'Please select your region';
}else {
$regions = $_POST['regions'];
}

if(empty($_POST['comments'])) {
// say or do something or do else
$comments_err = 'We value your input!';
}else {
$comments = $_POST['comments'];
}

if(empty($_POST['privacy'])) {
// say or do something or do else
$privacy_err = 'You must agree to receive spam email!';
}else {
$privacy = $_POST['privacy'];
}

// we need this function for wines
function my_wines($wines) {
$my_return='';
if(!empty($_POST['wines'])) {
    $my_return = implode(',', $_POST['wines']);
}
return $my_return;
} 
// end my_wines function then ask if everything is set!

if(isset($_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['phone'],
$_POST['gender'],
$_POST['wines'],
$_POST['regions'],
$_POST['comments'],
$_POST['privacy'])) {

$to = 'jacqueline.george@seattlecolleges.edu';
$subject = 'Test email on  '.date('m/d/y, h i A');
$body = '
First Name:  '.$first_name.' '.PHP_EOL.'
Last Name:  '.$last_name.' '.PHP_EOL.'
Email:  '.$email.' '.PHP_EOL.'
Phone:  '.$phone.' '.PHP_EOL.'
Gender:  '.$gender.' '.PHP_EOL.'
Wines:  '.my_wines($wines).' '.PHP_EOL.'
Regions:  '.$regions.' '.PHP_EOL.'
Comments:  '.$comments.' '.PHP_EOL.'
Privacy:  '.$privacy.' '.PHP_EOL.'
';

$headers = array(
    'From' => 'noreply@jacqgeorg.com'
);
// we will be adding an if statement -- that this email form will work ONLY if all the fields are filled out!!!

if(!empty(
    $first_name && 
    $last_name && 
    $email && 
    $phone &&
    $gender &&
    $wines &&
    $regions &&
    $comments &&
    $privacy)) {
        mail($to, $subject, $body, $headers);
        header('Location:thx.php');
    }
// Don't forget, you must upload your form to the server to receive an email!

} 
// end isset

}
// closing server request method
// end of the wine form

// beginning of the form3 from website -- the one with trails

ob_start();

$first_name='';
$last_name='';
$email='';
$features='';
$phone='';
$regions='';
$comments='';
$privacy='';
$trails = '';

$first_name_err='';
$last_name_err='';
$email_err='';
$features_err='';
$phone_err='';
$regions_err='';
$comments_err='';
$privacy_err='';
$trails_err = '';

if($_SERVER['REQUEST_METHOD'] == "POST") {
//   if inputs are empty, we will declare a statement else we will assigning the $_POST to a variable
// $wines = $_POST['wines'] will be assigned to a variable

if(empty($_POST['trails'])) {
// say or do something or do else
$trails_err = 'What...no interesting trails?';
} else {
    $trails = $_POST['trails'];
}

if(empty($_POST['first_name'])) {
// say or do something or do else
$first_name_err = 'Please fill in your first name';
}else {
$first_name = $_POST['first_name'];
}

if(empty($_POST['last_name'])) {
// say or do something or do else
$last_name_err = 'Please fill in your last name';
}else {
$last_name = $_POST['last_name'];
}

if(empty($_POST['email'])) {
// say or do something or do else
$email_err = 'Please fill in your email';
}else {
$email = $_POST['email'];
}

if(empty($_POST['features'])) {
// say or do something or do else
$features_err = 'Please check the features you\'re looking for!';
}else {
$features = $_POST['features'];
}

// if(empty($_POST['phone'])) {
// // say or do something or do else
// $phone_err = 'Please provide your phone number';
// }else {
// $phone = $_POST['phone'];
// }

if(empty($_POST['phone'])) { // if empty, type in your number
$phone_err = 'Your phone number please!';
} elseif(array_key_exists('phone', $_POST)){
if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
{ // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
$phone_err = 'Invalid format!';
} else{
$phone = $_POST['phone'];
 } // end else
} // end main if

if(empty($_POST['regions'])) {
// say or do something or do else
$regions_err = 'Please select your primary region of interest';
}else {
$regions = $_POST['regions'];
}

if(empty($_POST['comments'])) {
// say or do something or do else
$comments_err = 'We value your input!';
}else {
$comments = $_POST['comments'];
}

if(empty($_POST['privacy'])) {
// say or do something or do else
$privacy_err = 'You must agree to receive spam email!';
}else {
$privacy = $_POST['privacy'];
}

// we need this function for trails
function my_trails($trails) {
$my_return='';
if(!empty($_POST['trails'])) {
    $my_return = implode(',', $_POST['trails']);
}
return $my_return;
} 
// end my_trails function then ask if everything is set!

if(isset($_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['phone'],
$_POST['features'],
$_POST['trails'],
$_POST['regions'],
$_POST['comments'],
$_POST['privacy'])) {

$to = 'szemeo@mystudentswa.com';
$subject = 'Test email on  '.date('m/d/y, h i A');
$body = '
First Name:  '.$first_name.' '.PHP_EOL.'
Last Name:  '.$last_name.' '.PHP_EOL.'
Email:  '.$email.' '.PHP_EOL.'
Phone:  '.$phone.' '.PHP_EOL.'
Features:  '.$features.' '.PHP_EOL.'
trails:  '.my_trails($trails).' '.PHP_EOL.'
Regions:  '.$regions.' '.PHP_EOL.'
Comments:  '.$comments.' '.PHP_EOL.'
Privacy:  '.$privacy.' '.PHP_EOL.'
';

$headers = array(
    'From' => 'noreply@jacqgeorg.com'
);
// we will be adding an if statement -- that this email form will work ONLY if all the fields are filled out!!!

if(!empty(
    $first_name && 
    $last_name && 
    $email && 
    $phone &&
    $features &&
    $trails &&
    $regions &&
    $comments &&
    $privacy) &&
    preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {
    
        mail($to, $subject, $body, $headers);
        header('Location:thx.php');
    }
// Don't forget, you must upload your form to the server to receive an email!
} 
// end isset
}
// closing server request method
// end of the trails form

// our random picture thing
// we need to make an array


// end of function

// our random picture thing
// we need to make an array
$photos[0] = 'naches';
$photos[1] = 'skyline1a';
$photos[2] = 'mtraintrail1a';
$photos[3] = 'lake22a';
$photos[4] = 'laconner2';
$photos[5] = 'hikeicicles2';
$photos[6] = 'grancan2a';
$photos[7] = 'josh3';

$i = rand(0, 7);

// $selected_image = ''.$photos[$i].'.jpg';
// echo '<img src="images/'.$selected_image.'" alt="'.$photos[$i].'">';

function random_images($photos) {
$my_return = '';
$i = rand(0, 7);
$selected_image = ''.$photos[$i].'.jpg';
$my_return = '<img src="images/'.$selected_image.'" alt="'.$photos[$i].'">';
return $my_return;
}


// trying to put the gallery in here

$people['Ann_&_Jacquie_in_Skagit'] = 'anjask A wonderful day tiptoeing through the tulips._';
$people['Ann_in_Leavenworth'] = 'annlev Doing the thing that makes her the happiest._';
$people['Ann_&_ Emilio'] = 'amemsa Ann & Emilio doing their favorite thing -- well, maybe their second favorite thing. A beautiful day in St. Syr Sur Mer._';
$people['Emilio_&_Jacquie_Sated'] = 'emjait After a long day of walking in the rain, we found the best Italian restaurant and ended with a delicious espresso. We were in heaven!_';
$people['Ann_in_Skiathos'] = 'annchi Relaxing after the best chicken we\'ve ever eaten! Can I keep adding text?? Yes, as long as I leave an empty space to be the end of the line, I think._';
$people['Ann_with_Coffee'] = 'anncof The only way to really start the day._';
$people['Ann_in_Nafplio'] = 'annlun Finally -- a chance to rest._';
$people['Ann_in_Sedona'] = 'annsed A short, but beautiful hike in Sedona. The sun was going down fast._';
$people['Old_Neighborhood'] = 'athnei An old neighborhood in Athens, rediscovered or uncovered!_';
$people['Old_Sparky'] = 'sparky A sheep sculpture made completely from spark plugs -- at my sister\'s house in the south of France._';
$people['Leland_and_Me'] = 'leljac A chance meeting with one of my idols in the Philadelphia airport: Leland Sklar, renowned bassist._';
$people['Sacre_Coeur'] = 'sacmon A view of Sacre Coeur from inside the clock sculpture in the Musee d\'Orsay._';
$people['Cat_and_Goat'] = 'sacago A fairly regal cat, with a goat trying to find out what\'s going on._';
$people['Turtle_in_San_Diego'] = 'sdturt A turtle trying to grab some warmth before the sun goes down._';
$people['Turtles_at_Luxembourg'] = 'turlux Turtles spewing out water during a very hot day. Just being able to watch them brought relief._';
$people['Goats_in_the_Peloponnese'] = 'gregoa These goats captured my attention for almost an entire hour! Their sound was so relaxing._';
$people['Cats_in_Agios_Konstantinos'] = 'catagi These cats followed us for hours and then disappeared. This is where they ended up._';
$people['Frog_Kiss'] = 'frogki This was one of my favorite sculptures from Arizona. Jerome? Sedona? I can\'t remember._';
$people['Pick_It_Up!'] = 'agipoo A world-wide problem -- not just Seattle!_';


// random images for places

$places[0] = 'psgoem';
$places[1] = 'kubota';
$places[2] = 'birpar';
$places[3] = 'sejama';
$places[4] = 'solhik';
$places[5] = 'jaemma';
$places[6] = 'whatja';
$places[7] = 'kohlsn';
$places[8] = 'jimgra';

$i = rand(0, 8);

function random_imagess($places) {
$my_return = '';
$i = rand(0, 8);
$selected_image = ''.$places[$i].'.jpg';
$my_return = '<img src="images/'.$selected_image.'" alt="'.$places[$i].'">';
return $my_return;
}

?>