<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculating Form</title>
    <link href="css/calculatorstyles.css" type="text/css" rel="stylesheet">
</head>
<body>

<form action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF'])    ;?>" method="post">
<fieldset>

<label>Name</label>
<input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name'])  ;?>">

<label>Total miles driving?</label>
<input type="number" name="total" value="<?php if(isset($_POST['total'])) echo htmlspecialchars($_POST['total'])  ;?>">


<label>How fast do you typically drive?</label>
<input type="number" name="speed" value="<?php if(isset($_POST['speed'])) echo htmlspecialchars($_POST['speed'])  ;?>">


<label>How many hours per day do you plan on driving?</label>
<input type="number" name="hours" value="<?php if(isset($_POST['hours'])) echo htmlspecialchars($_POST['hours'])  ;?>">

<label>Price of gas</label>
<ul>
<li><input type="radio" name="price" value="3" <? if(isset($_POST['price']) && $_POST['price'] == 3) echo 'checked="checked"' ;?>> $3.00 </li>
<li><input type="radio" name="price" value="3.50" <? if(isset($_POST['price']) && $_POST['price'] == 3.50) echo 'checked="checked"' ;?>> $3.50 </li>
<li><input type="radio" name="price" value="4" <? if(isset($_POST['price']) && $_POST['price'] == 4) echo 'checked="checked"' ;?>> $4.00 </li>
</ul>

<label>Fuel efficiency</label>
<select name="fuel">
<option value="" <?php if(isset($_POST['fuel']) && is_null($_POST['fuel'])) echo 'selected = "unselected"' ;?>>Select one!</option>
<option value="10" <?php if(isset($_POST['fuel']) && $_POST['fuel'] == "10") echo 'selected = "selected"' ;?> >Terrible @ 10mpg</option>
<option value="25" <?php if(isset($_POST['fuel']) && $_POST['fuel'] == "25") echo 'selected = "selected"' ;?> >Good @ 25mpg</option>
<option value="40" <?php if(isset($_POST['fuel']) && $_POST['fuel'] == "40") echo 'selected = "selected"' ;?> >Excellent @ 40mpg</option>


<input type="submit" value="Calculate">

<p><a href ="">Reset</a></p>


</fieldset>
</form>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

if(empty($_POST['name'])) {
    echo '<p class="error">Please enter out your name!</p>';
}
    
if(empty($_POST['total'])) {
    echo '<p class="error">Please enter the total miles you will be driving!</p>';
}
    
if(empty($_POST['speed'])) {
    echo '<p class="error">Please enter how fast you typically drive!</p>';
}
    
if(empty($_POST['hours'])) {
    echo '<p class="error">Please enter how many hours a day you plan on driving!</p>';
}

if(empty($_POST['price'])) {
    echo '<p class="error">Please select a gas price!</p>';
}
    
if($_POST['fuel'] == NULL){
    echo '<p class="error">Please choose your fuel efficiency!</p>';
}

if (isset($_POST['name'],
$_POST['total'],
$_POST['speed'],
$_POST['hours'],
$_POST['price'],
$_POST['fuel'])) {
$name = $_POST['name'];
$total = floatval($_POST['total']);
$speed = floatval($_POST['speed']);
$hours = floatval($_POST['hours']);
$price = floatval($_POST['price']);
$fuel = floatval($_POST['fuel']);
$perday = $hours * $speed;
$days = $total / $perday;
$totalhours = $days * $hours;
$gallons = $total / $fuel;
$totalgasprice = $price * $gallons;


if(!empty($name &&  $total && $speed && $hours && $price ) && ($fuel != NULL)) {



echo '
<div class="box">
<p>Hello '.$name.', you will be traveling a total of '.floor($totalhours).' hours taking '.floor($days).' days and you will be using '.floor($gallons).' gallons, costing you $'.number_format($totalgasprice, 2).' dollars.</p>
</div>
';
}
}

}

?>
</body>
</html>