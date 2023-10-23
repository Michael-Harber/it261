<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My Adder Assignment</title>
<style>
    nav ul {
    float:right;
    margin-top:30px;
    list-style-type: none;
}

nav li {
    float:left;
    margin-left:30px;
}

nav a {
    text-decoration:none;
}

form {
    max-width:400px;
    margin:0 auto 10px auto;
}

label {
    display:block;
    margin-bottom:5px;
}

input, textarea {
    width:100%;
    display: block;
    margin-bottom:10px;
    height:30px;
}

textarea {
    resize: none;
    height: 120px;
}

input [type=submit] {
    width:auto;
}

fieldset {
    border:1px solid #800;
    padding:10px;
}

h1 {
    text-align:center;
    margin:20px 0;
}

h2 {
    text-align:center;
    margin-bottom:10px;
}

p {
    text-align:center;
    margin-top:10px;
}

.error{
    color:red;
    font-style:italic;
    font-size:.9em;
    margin-top:15px;
}

footer {
    text-align:center;
}

footer ul {
    display:flex;
    justify-content: center;
    list-style-type: none;
}

footer li {
    justify-content: center;
    margin: 0 15px;
}
</style>
</head>
<body>
<h1>My Adder Assignment</h1> 
<form action="" method="post">
<fieldset>

<label>Enter the first number:</label>
<input type="number" name="num1"><br>
<label>Enter the second number:</label>
<input type="number" name="num2"><br>
<input type="submit" value="Add Em!!"> 

<p><a href="">Reset page</a></p>

</fieldset> 
</form>


<?php     //adder-wrong.php

if(isset($_POST['num1'],
$_POST['num2'])) {

if(empty($_POST['num1'] &&
$_POST['num2'])){

echo '<p> Please fill out all of the fields! </p>';    

} else {

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$myTotal = $num1 + $num2;



echo '<h2>You added '. $num1 .' and '.$num2.'</h2>';
echo '<p style="color:red;"> and the answer is '.$myTotal.'!</p>';
}


}

?>

<footer>
<ul>
<li>Copyright &copy;2022</li>
<li>All Rights Reserved</li>
<li><a href="../index.php">Web Design by Michael Harber</a></li>
<li><a id="html-checker" href="#">HTML Validation</a></li>
<li><a id="css-checker" href="#">CSS Validation</a></li>
</ul>
<script>
    document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
    document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
</script>
</footer>
</body>


</html>

<!-- // added php closing tag on line 12 
// removed hyphen from line 6 
// removed closing p tag from line 9 and added it to line 10 
// added period before myTotal on line 9 and moved > to end of style tag 
// removed break tag from line 8 
// removed double quotes around num1 and num2 and added single quotes on line 7
// moved curly brace from line 11 to line 6
// removed semi colon and added single quote to the end of line 8 -->
<!-- removed double quotes around myTotal on line 8 and replaced with single quotes -->
<!-- added semi colons to end of line 8 and line 9 -->
<!-- added if statement if the fields were empty -->
<!-- added else statement -->
<!-- fixed form tag and added closing tag -->
<!-- added opening and closing fieldset tag -->
<!-- fixed opening and closing tags for labels on lines 46 and 48 -->
<!-- added double quote to end of add em on line 50 -->
<!-- removed curly brace and semi colon from end of html tag -->
<!-- moved php to body underneath closing form tag -->
<!-- moved reset page link to line 22-->
<!-- made all num1 and num2 consistent -->
<!-- changed input type from text to number -->