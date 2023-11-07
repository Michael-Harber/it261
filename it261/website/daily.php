<?php
include('config.php');
include('./includes/header.php'); 
if(isset($_GET['today'])) {
    $today = $_GET['today'] ;
} else {
    $today = date('l');
}



switch($today) {
case 'Friday' : 
$movie = '<h2>Friday is Hot Rod Day!<h2>';
$pic = 'hotrod.jpg';
$alt = 'Hot Rod';
$content = '<p style = "color:red;"> The perfect Friday flick, Hot Rod is an aimless but funny comedy about a wannabe stuntman named Rod Kimble (played by Andy Samberg) who strives to follow in his late fathers footsteps but always falls short. Rod wants to become a professional stuntman like his dad, rivaling daredevil Evel Knievel. </p>';
break;

case 'Saturday' : 
$movie = '<h2>Saturday is Garden State Day!<h2>';
$pic = 'gardenstate.jpg';
$alt = 'Garden State';
$content = '<p style = "color:green;"> After many years away, television bit part actor Andrew Largeman (Zach Braff) returns to his small home town in New Jersey to attend his mothers funeral. There he is confronted by various aspects of the life he left behind, including his overbearing father (Ian Holm). Largeman also meets compulsive liar and amateur musician Sam (Natalie Portman), with whom he feels an immediate connection. Together with several other figures from his past, Largeman heals old wounds and forges new friendships. Enjoy this sad yet heartwarming feature on Sundays! </p>';
break;

case 'Sunday' : 
$movie = '<h2>Sunday is Mr. Robot Day!<h2>';
$pic = 'mrrobot.jpg';
$alt = 'Mr. Robot';
$content = '<p style = "color:darkblue;"> Elliot, a brilliant but highly unstable young cyber-security engineer and vigilante hacker, becomes a key figure in a complex game of global dominance when he and his shadowy allies try to take down the corrupt corporation he works for. Perfect for a rainy Sunday! </p>';
break;

case 'Monday' : 
$movie = '<h2> Monday The Goonies Day!<h2>';
$pic = 'goonies.jpg';
$alt = 'The Goonies';
$content = '<p style = "color:orange;"> In need of Monday inspiration? The Goonies is for you. When two brothers find out they might lose their house they are desperate to find a way to keep their home. They find a treasure map and bring some friends along to find it. They are all out looking for the "X" and trying to get away from a group of bad guys who also want the treasure. </p>';
break;

case 'Tuesday' : 
$movie = '<h2>Tuesday is The Lord of the Rings!<h2>';
$pic = 'lotr.jpg';
$alt = 'The Lord of the Rings';
$content = '<p style = "color:brown;"> On Tuesday, check out The Lord of the Rings where the future of civilization rests in the fate of the One Ring, which has been lost for centuries. Powerful forces are unrelenting in their search for it. But fate has placed it in the hands of a young Hobbit named Frodo Baggins (Elijah Wood), who inherits the Ring and steps into legend. A daunting task lies ahead for Frodo when he becomes the Ringbearer - to destroy the One Ring in the fires of Mount Doom where it was forged. </p>';
break;

case 'Wednesday' : 
$movie = '<h2>Wednesday is Scott Pilgrim VS. The World Day!<h2>';
$pic = 'scottpilgrim.jpg';
$alt = 'Scott Pilgrim';
$content = '<p style = "color:purple;"> As bass guitarist for a garage-rock band, Scott Pilgrim (Michael Cera) has never had trouble getting a girlfriend; usually, the problem is getting rid of them. But when Ramona Flowers (Mary Elizabeth Winstead) skates into his heart, he finds she has the most troublesome baggage of all: an army of ex-boyfriends who will stop at nothing to eliminate him from her list of suitors. Perfect for a Wednesday film as a midweek pick me up! </p>';
break;

case 'Thursday' : 
$movie = '<h2>Thursday is Prisoners Day!<h2>';
$pic = 'prisoners.jpg';
$alt = 'Prisoners';
$content = '<p style = "color:darkgray;"> Thursday your least favorite day of the week? This masterpiece of a thriller is the best way to even out your end of week woes. Keller Dover (Hugh Jackman) faces a parents worst nightmare when his 6-year-old daughter, Anna, and her friend go missing. The only lead is an old motorhome that had been parked on their street. The head of the investigation, Detective Loki (Jake Gyllenhaal), arrests the driver (Paul Dano), but a lack of evidence forces Loki to release his only suspect. Dover, knowing that his daughters life is at stake, decides that he has no choice but to take matters into his own hands. </p>';
$bg_color ="gray";
break;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Homework</title>
    <link href="css/dailystyles.css" type="text/css" rel="stylesheet">
</head>
<body>
<?php include('./includes/header.php');
?>
<div id="wrapper">
<h1>My Wonderful Switch Daily Homework</h1>
<?php
echo $movie;
?>
<img src="images/<?php echo $pic;?>" alt="<?php echo $alt;?>">
<?php echo $content; ?>
<h2>Don't see what you want to watch? Check out our other days below!</h2>
<ul>
<li><a href="daily.php?today=Sunday">Sunday</a></li>
<li><a href="daily.php?today=Monday">Monday</a></li>
<li><a href="daily.php?today=Tuesday">Tuesday</a></li>
<li><a href="daily.php?today=Wednesday">Wednesday</a></li>
<li><a href="daily.php?today=Thursday">Thursday</a></li>
<li><a href="daily.php?today=Friday">Friday</a></li>
<li><a href="daily.php?today=Saturday">Saturday</a></li>
</ul>
</div>
<!-- end wrapper -->
</body>
</html>
<?php 
include('./includes/footer.php');