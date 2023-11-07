<?php

ob_start();

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE) {
    case 'index.php' :
    $title = 'Home page of our Wesbite Project';
    $body = 'home';
    break;

    case 'about.php' :
    $title = 'About page of our Wesbite Project';
    $body = 'about';
    break;

    case 'daily.php' :
    $title = 'Daily page of our Wesbite Project';
    $body = 'daily';
    break;

    case 'project.php' :
    $title = 'Project page of our Wesbite Project';
    $body = 'project';
    break;

    case 'contact.php' :
    $title = 'Contact page of our Wesbite Project';
    $body = 'contact';
    break;
    
    case 'gallery.php' :
    $title = 'Gallery page of our Wesbite Project';
    $body = 'gallery';
    break;
}
// our navigational array
$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery'
);

function make_links($nav) {
$my_return = '';
foreach($nav as $key => $value) {
if(THIS_PAGE ==$key) { 
$my_return .= '<li><a class="current" href="'.$key.'"> '.$value.'</a></li>';
} else {
$my_return .= '<li><a href="'.$key.'">'.$value.'</a> </li> ';
}
    
    
} // end for each
    
return $my_return;
    
} // end function


// my forms php



$first_name = '';
$last_name = '';
$email = '';
$gender = '';
$wines = '';
$phone = '';
$regions = '';
$comments = '';
$privacy = '';


$first_name_err = '';
$last_name_err = '';
$email_err = '';
$gender_err = '';
$wines_err = '';
$phone_err = '';
$regions_err = '';
$comments_err = '';
$privacy_err = '';


if($_SERVER['REQUEST_METHOD'] == "POST") {

//  if inputs are empty, we will declare a statement else we will assignthe $POSTS to a variable
//  $wines= $_POST['wines']


if(empty($_POST['wines'])) {
// say something or do something
$wines_err = 'What... no wines?';

} else {
    $wines = $_POST['wines'];
}

if(empty($_POST['first_name'])) {
// say something or do something
$first_name_err = 'Please fill in your first name!';
    
} else {
    $first_name = $_POST['first_name'];
}

if(empty($_POST['last_name'])) {
// say something or do something
$last_name_err = 'Please fill in your last name!';
        
} else {
    $last_name = $_POST['last_name'];
}

if(empty($_POST['email'])) {
// say something or do something
$email_err = 'Please fill in your email!';
            
} else {
    $last_name = $_POST['email'];
}

if(empty($_POST['gender'])) {
// say something or do something
$gender_err = 'Please check your gender!';
                
} else {
    $gender = $_POST['gender'];
}

if(empty($_POST['phone'])) {
// say something or do something
$phone_err = 'Please fill in your phone number!';
                    
} else {
    $phone = $_POST['phone'];
}

if($_POST['regions'] == NULL) {
// say something or do something
$regions_err = 'Please select your region!';
                        
} else {
    $regions = $_POST['regions'];
}

if(empty($_POST['comments'])) {
// say something or do something
$comments_err = 'We value your input!';
                            
} else {
    $comments = $_POST['comments'];
}

if(empty($_POST['privacy'])) {
// say something or do something
$privacy_err = 'You must agree to send spam emails!';
                                
} else {
$privacy = $_POST['privacy'];
}



function my_wines($wines) {
$my_return='';
if(!empty($_POST['wines'])) {
    $my_return = implode(',' , $_POST['wines']);
}
return $my_return;

} // end my_wines function

if(isset($_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['gender'],
$_POST['phone'],
$_POST['wines'],
$_POST['regions'],
$_POST['comments'],
$_POST['privacy'])) {

    $to = 'szemeo@mystudentswa.com';
    $subject = 'Test email on '.date('m/d/y, h i A');
    $body = '
    First Name: '.$first_name.' '.PHP_EOL.'
    Last Name: '.$last_name.' '.PHP_EOL.'
    Email: '.$email.' '.PHP_EOL.'
    Gender: '.$gender.' '.PHP_EOL.'
    Phone: '.$phone.' '.PHP_EOL.'
    Wines: '.my_wines($wines).' '.PHP_EOL.'
    Region: '.$regions.' '.PHP_EOL.'
    Comments: '.$comments.' '.PHP_EOL.'
    
    ';

$headers = array(
    'From' => 'noreply@mystudentswa.com'
);

// we will be adding an if statement - that this email form will work ONLY if all the fields are filled out!!!

if(!empty($first_name &&
$last_name  &&
$email &&
$gender &&
$phone &&
$wines &&
$regions &&
$comments)) {

    mail($to, $subject, $body, $headers);
    header ('Location:thx.php');
}

} // end isset
} // closing server request method 



