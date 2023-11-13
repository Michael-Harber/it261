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

    case 'thx.php' :
    $title = 'Thank You page of our website';
    $body = 'thanks';
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
$phone = '';
$privacy = '';
$movies = '';
$genre = '';

$first_name_err = '';
$last_name_err = '';
$email_err = '';
$phone_err = '';
$privacy_err = '';
$movies_err = '';
$genre_err = ''; 


if($_SERVER['REQUEST_METHOD'] == "POST") {



if(empty($_POST['movies'])) {        
$movies_err = 'Don\'t like movies?';
        
} else {
$movies = $_POST['movies'];
}

if(empty($_POST['first_name'])) {
$first_name_err = 'Please fill in your first name!';
        
} else {
$first_name = $_POST['first_name'];
}

if(empty($_POST['last_name'])) {
$last_name_err = 'Please fill in your last name!';
            
} else {
$last_name = $_POST['last_name'];
}

if(empty($_POST['email'])) {
$email_err = 'Please fill in your email!';
                
} else {
$email = $_POST['email'];
}

if(empty($_POST['phone'])) { 
$phone_err = 'Your phone number please!';
} elseif(array_key_exists('phone', $_POST)){
if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
{ 
$phone_err = 'Invalid format!';
} else{
$phone = $_POST['phone'];
} 
} 

if($_POST['genre'] == NULL) {
$genre_err = 'Please select your favorite genre!';
                            
} else {
$genre = $_POST['genre'];
}

if(empty($_POST['privacy'])) {
$privacy_err = 'You must agree to send spam emails!';
                                    
} else {
$privacy = $_POST['privacy'];
}

function my_movies($movies) {
$my_return='';
if(!empty($_POST['movies'])) {
$my_return = implode(',' , $_POST['movies']);
}
return $my_return;
}

if(isset($_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['phone'],
$_POST['privacy'],
$_POST['movies'],
$_POST['genre'])) {

$to = 'oszemeo@mystudentswa.com';
$subject = 'Test email on '.date('m/d/y, h i A');
$body = '
First Name: '.$first_name.' '.PHP_EOL.'
Last Name: '.$last_name.' '.PHP_EOL.'
Email: '.$email.' '.PHP_EOL.'
Phone: '.$phone.' '.PHP_EOL.'
Movies: '.my_movies($movies).' '.PHP_EOL.'
Genre: '.$genre.' '.PHP_EOL.'

    
';

$headers = array(
    'From' => 'noreply@mystudentswa.com'
);


if(!empty($first_name &&
$last_name  &&
$email &&
$phone &&
$movies &&
$genre) &&
preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {
mail($to, $subject, $body, $headers);
header ('Location:thx.php');
}


} 

} // closing request method




