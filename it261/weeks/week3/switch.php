<?php

// class coffee exercise
// if today is Friday, it will be pumpkin latte day
// INTRODUCING the isset() function
// then we will introduce our first GLOBAL variable



// starting the switch
// if $GET['today'] is set, $today, then all is well, but it is not set therefore the else is the day!
// else, today is TODAY

// GLOBAL VARIABLES are capitalized and start with $_GET

// what is the isset function - is asking if something has been set



// $variable = 'This is our variable';
// $variable = 'This is our variable';
// if(isset($variable)) {
//     echo 'Variable has been set';
// } else
// echo 'Variable has not been set!';

// echo'<br>';

// if(isset($_GET['today'])) {
//     echo 'Today has been set';
// } else {
//     echo 'Not!!!!!';
// }

if(isset($_GET['today'])) {
    $today = $_GET['today'] ;
} else {
    $today = date('l');
}


switch($today) {
case 'Friday' : 
$coffee = '<h2>Friday is our Pumpkin Latte Day!<h2>';
$pic = 'pumpkin.jpg';
$alt = 'Pumpkin Latte';
$content = '<p> The moment Fall hits, we rush to our local coffee shop and order a <b>pumpkin spice latte</b>. We love them so much, we took it upon ourselves to try making it at home. This recipe is easy and I bet you have most, if not everything, you need to make it at home right now. It also comes together in under 10 minutes!</p>';
break;

case 'Saturday' : 
$coffee = '<h2>Saturday is our Green Tea Latte Day!<h2>';
$pic = 'greentea.jpg';
$alt = 'Green Tea Latte';
$content = '<p> <b>A Green Tea Latte</b> is...... </p>';
break;

case 'Sunday' : 
$coffee = '<h2>Sunday is our Regular Joe Day Day!<h2>';
$pic = 'regularjoe.jpg';
$alt = 'Regular Joe';
$content = '<p> <b>A Regular Joe</b> is...... </p>';
break;

case 'Monday' : 
$coffee = '<h2>Monday is our Latte Day!<h2>';
$pic = 'latte.jpg';
$alt = 'Latte';
$content = '<p> <b>A Latte</b> is...... </p>';
break;

case 'Tuesday' : 
$coffee = '<h2>Tuesday is our Americano Day!<h2>';
$pic = 'americano.jpg';
$alt = 'Americano';
$content = '<p> <b>An Americano</b> is...... </p>';
break;

case 'Wednesday' : 
$coffee = '<h2>Wednesday is our Frappuccino Day!<h2>';
$pic = 'frappuccino.jpg';
$alt = 'Frappuccino';
$content = '<p> <b>A Frappuccino</b> is...... </p>';
break;

case 'Thursday' : 
$coffee = '<h2>Thursday is our Espresso Day!<h2>';
$pic = 'espresso.jpg';
$alt = 'Espresso';
$content = '<p> <b>An Espresso</b> is...... </p>';
break;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Classwork Exercise</title>
<style>
* {
    padding: 0;
    margin:0;
    box-sizing:border-box;
}
#wrapper {
    width:940px;
    margin:20px auto;
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
<h1>My Wonderful Switch Classwork Exercise (Not the Daily Homework)</h1>
<?php
echo $coffee;
?>
<img src="./images/<?php echo $pic;?>" alt="<?php echo $alt;?>">
<?php echo $content; ?>
<h2>Check out our Daily Specials!</h2>
<ul>
<li><a href="switch.php?today=Sunday">Sunday</a></li>
<li><a href="switch.php?today=Monday">Monday</a></li>
<li><a href="switch.php?today=Tuesday">Tuesday</a></li>
<li><a href="switch.php?today=Wednesday">Wednesday</a></li>
<li><a href="switch.php?today=Thursday">Thursday</a></li>
<li><a href="switch.php?today=Friday">Friday</a></li>
<li><a href="switch.php?today=Saturday">Saturday</a></li>
</ul>
</div>
<!-- end wrapper -->
</body>
</html>