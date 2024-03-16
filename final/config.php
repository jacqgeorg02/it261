<?php

ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');


$errors = array();

$success = 'You have successfully logged on!';

function myError($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
 echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
      echo 'Error message: <b> '.$errorMsg.'</b>';
      die();
  }  else {
      echo 'Houston, we have a problem!';
      die();
  }
}

// begin
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
switch(THIS_PAGE) {

    case 'register.php' :
        $title = 'Registration Page of our Website Project';
        $body = 'register';
        break;

    case 'login.php' :
        $title = 'Login Page of our Website Project';
        $body = 'login';
        break;

    case 'index.php' :
    $title = 'Home Page of our Website Project';
    $body = 'home';
    break;

    case 'about.php' :
    $title = 'About Page of our Website Project';
    $body = 'about inner';
    break;

    case 'daily.php' :
    $title = 'National Park Page of our Website Project';
    $body = 'daily inner';
    break;
            
    case 'parks.php' :
    $title = 'Database Page of our Website Project';
    $body = 'parks inner';
    break;
                
    case 'contact.php' :
    $title = 'Contact Page of our Website Project';
    $body = 'contact inner';
    break;
    
    case 'thx.php' :
    $title = 'Thanks Page of our Website Project';
    $body = 'thx inner';
    break;

    case 'parks-view.php' :
        $title = 'Parks-View Page of our Website Project';
        $body = 'places-view inner';
        break;

    case 'gallery.php' :
        $title = 'Gallery Page of our Website Project';
        $body = 'gallery inner';
        break;
}
// THIS_PAGE end


// begin -- our navigational array -- this is define array
$nav = array (
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'parks.php' => 'National Parks',
    'contact.php' => 'Contact'
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
    $park_name = 'Yellowstone National Park';
    $state = 'Wyoming';
    $relyr = 'Established in 1872';
    $pic = 'park01.jpg';
    $alt = 'Prism at Yellowstone National Park';
    $content = 'On March 1, 1872, Yellowstone became the first national park for all to enjoy the unique hydrothermal and geologic features. Within Yellowstone\'s 2.2 million acres, visitors have unparalleled opportunities to observe wildlife in an intact ecosystem, explore geothermal areas that contain about half the world\'s active geysers, and view geologic wonders like the Grand Canyon of the Yellowstone River.';
        
break;

case 'Monday' : 
    $actDay = 'blue';
    $park_name = 'Joshua Tree National Park';
    $state = 'California';
    $relyr = 'Established in 1994';
    $pic = 'park02.jpg';
    $alt = 'Rocks and Trees at Joshua Tree National Park';
    $content = 'Two distinct desert ecosystems, the Mojave and the Colorado, come together in Joshua Tree National Park. A fascinating variety of plants and animals make their homes in a land sculpted by strong winds and occasional torrents of rain. Dark night skies, a rich cultural history, and surreal geologic features add to the wonder of this vast wilderness in southern California. Come explore for yourself!';

break;
    
case 'Tuesday' : 
    $actDay = 'orange';
    $park_name = 'Redwood National and State Parks';
    $state = 'California';
    $relyr = 'Established in 1968';
    $pic = 'park03.jpg';
    $alt = 'Redwood National Park';
    $content = 'Most people know Redwood as home to the tallest trees on Earth. But the Parks also protect vast prairies, oak woodlands, wild rivers, and 40 miles of rugged coastline. People have lived in this verdant landscape since time immemorial. Together, the National Park Service and California State Parks are managing and restoring these lands for the inspiration, enjoyment, and education of all.';
    
break;

case 'Wednesday' : 
    $actDay = 'red';
    $park_name = 'Mt. Rainier National Park';
    $state = 'Washington';
    $relyr = 'Established in 1899';
    $pic = 'park04.jpg';
    $alt = 'Mt. Rainer National Park';
    $content = 'Ascending to 14,410 feet above sea level, Mount Rainier stands as an icon in the Washington landscape. An active volcano, Mount Rainier is the most glaciated peak in the contiguous U.S.A., spawning five major rivers. Subalpine wildflower meadows ring the icy volcano while ancient forest cloaks Mount Rainier\'s lower slopes. Wildlife abounds in the park\'s ecosystems. A lifetime of discovery awaits.';
    
break;

case 'Thursday' : 
    $actDay = 'magenta';
    $park_name = 'Olympic National Park';
    $state = 'Washington';
    $relyr = 'Established in 1938';
    $pic = 'park05.jpg';
    $alt = 'Olympic National Park';
    $content = 'With its incredible range of precipitation and elevation, diversity is the hallmark of Olympic National Park. Encompassing nearly a million acres, the park protects a vast wilderness, thousands of years of human history, and several distinctly different ecosystems, including glacier-capped mountains, old-growth temperate rain forests, and over 70 miles of wild coastline. Come explore!';
        
break;

case 'Friday' : 
    $actDay = 'black';
    $park_name = 'Zion National Park';
    $state = 'Utah';
    $relyr = 'Established in 1919';
    $pic = 'park06.jpg';
    $alt = 'Zion National Park';
    $content = 'Follow the paths where people have walked for thousands of years. Gaze up at massive sandstone cliffs of cream, pink, and red that soar into a brilliant blue sky. Experience wilderness in a narrow slot canyon. Zion\'s unique array of plants and animals will enchant you as you absorb the rich history of the past and enjoy the excitement of present-day adventures.';

break;

case 'Saturday' :
    $actDay = 'gray'; 
    $park_name = 'Grand Canyon National Park';
    $state = 'Arizona';
    $relyr = 'Established in 1908';
    $pic = 'park07.jpg';
    $alt = 'Grand Canyon National Park';
    $content = 'Grand Canyon National Park, in Northern Arizona, encompasses 278 miles (447 km) of the Colorado River and adjacent uplands. Located on ancestral homeland of 11 Associated Tribes, Grand Canyon is one of the most spectacular examples of erosion anywhere in the world—unmatched in the incomparable vistas it offers visitors from the rims. The South Rim is open. The North Rim is CLOSED for the winter.';
}
// end of the daily with parks

// beginning of the form for final -- the one with parks

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
$trails_err = 'What...no interest in National Parks?';
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

// trying to put the gallery in here

$park['At_the_rim_of_the_Grand_Canyon'] = 'park17  This was a chilly day, at the edge of dusk. The vastness of the Grand Canyon was overwhelming._';
$park['The_Virgin_River_that_runs_through_Zion_National_Park'] = 'park16 Close to the mouth of the Narrows at Zion. The water seems placid, but it\'s swift and rough and deceptively deep. Whenever I\'m at this place on the river, I wish I could carry all those rocks home in my pockets._';
$park['Another_Virgin_River_shot_from_Zion'] = 'park15 A little further down the river. On this day, the weather moved between chilly and cloudy to sunny and hot. The only constant was that this water was COLD!_';
$park['Quinault_Rainforest_in_Olympic_National_Park'] = 'park14 After a weekend of hiking, swimming and kayaking, we stopped for some final photos of waterfalls and beautiful trees!_';
$park['The_Reflection_Lakes_Trail_at_Paradise_in_Mt._Rainier_National_Park'] = 'park13 One of our favorite hikes in the park. It\'s beautiful any time of year, and it is often under-utilized._';
$park['Richardson_Grove_in Redwood_National_park'] = 'park12 One of my favorite quick stops in this park. My favorite place is the Lady Bird Johnson Grove, but you can\'t rush that one!_';
$park['Trees_and_rocks_at_Joshua_Tree_State_Park'] = 'park11 It looks quiet, but there is more action here than meets the eye. Careful stillness always results in lizards, including iguanas that sun themselves on the rock formations. I can take or leave the trees, but the rocks get me every time._';
$park['Geothermal_wonders_in_Yellowstone_National_Park'] = 'park10 No matter how many times I go to Yellowstone, I will never stop being amazed by the amazing colors of these pools._';
$park['Old_Geezer_at_Yellowstone_National_Park'] = 'park09 And just when you need a break, you can sit back and watch the geysers blow!_';
$park['Rim_hikes_at_the_Grand_Canyon'] = 'park08 These short hikes along the rim are wonders of their own; you\'re reminded of how much life there is in a place that seems inhospitable. As long as I don\'t see a rattlesnake, everything is good._';
$park['The_Colorado_River_as_it_wends_through_Grand_Canyon_National_Park'] = 'park07 I always feel more peaceful when I can get my eyes on the river. It\'s the source of so much life, and when I see it cut through the Grand Canyon, I am reminded of the persistent power of water._';
$park['Hiking_through_Zion_National_Park'] = 'park06 The first time I recognized pictures of Zion, I thought they were colorized; and then I went there. It\'s all real._';
$park['Hiking_the_Enchanted_Valley_Trail_in_Olympic_National_Park'] = 'park05 Is there a better way to spend a weekend in summer? Followed by a swim in Lake Quinault -- this is living in the Pacific Northwest._';
$park['Mt._Rainier_National_park'] = 'park04 Can\'t add anything to that picture._';
$park['Redwood_National_Park'] = 'park03 This park is full of so many childhood memories for me. In California, you are never far away from nature -- you just have to be willing to leave the city._';
$park['Another_view_of_Joshua_Tree'] = 'park02 Another place full of memories. Another reminder of how close nature is in California. A few hours drive from metro areas and you find yourself in a landscape that seems otherworldly._';
$park['This_is_NOT_a_swimming_pool!'] = 'park01 But whenever I see this geothermal pool in Yellowstone National Park, I wish it were._';


// our random picture thing
// we need to make an array

$parkel[0] = 'park08';
$parkel[1] = 'park09';
$parkel[2] = 'park10';
$parkel[3] = 'park11';
$parkel[4] = 'park12';
$parkel[5] = 'park13';
$parkel[6] = 'park14';
$parkel[7] = 'park15';
$parkel[8] = 'park16';
$parkel[9] = 'park17';

$i = rand(0, 9);

function random_images($parkel) {
$my_return = '';
$i = rand(0, 9);
$selected_image = ''.$parkel[$i].'.jpg';
$my_return = '<img src="images/'.$selected_image.'" alt="'.$parkel[$i].'">';
return $my_return;
}

?>