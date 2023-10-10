<?php
// if statements 
// if else statement
// if elseif statement 

$temp = 55;
if($temp <= 60) {
    echo 'It is a semi-warm day!';
} else {
    echo 'It may be getting warmer';
}
echo '<br>';

$new_temp = 82;
if($new_temp <= 60){
    echo'Not a very warm day!';
} elseif ($new_temp <= 70) {
    echo 'It\'s getting warmer';
} elseif ($new_temp <= 80) {
    echo 'We might be going to the beach!';
} else {
    echo 'We will <b>defintely</b> go to the beach!';
} 


echo '<h2>This exercise will be about a salary, a bonus and sales!</h2>';
echo '<br>';
// a slary of 95000 - annual.
// sales need to be above a 100000, you will start making bonus!
// 100000 = 5%
// 120000 = 10%
// 140000 = 15%
// 150000 = 20%


$salary = 95000;
$sales = 150000;
// if sales are equal or less than 99999, then you do not receive any bonus 
// if sales are equal or less than 119999, then you will receive 5%.
// if sales are equal or less than 139999, then yuou will receive 10%.
// if sales are equal or less than 149999, then you will receive 15%.


if ($sales <= 99999) {
    echo 'Sorry, you did not make your bonus!';
} elseif ($sales <=119999) {
    $salary *= 1.05;
    echo '$'.number_format($salary, 2).'dollars';
} elseif ($sales <= 139999) {
    $salary *= 1.10;
    echo '$'.number_format($salary, 2).'dollars';
} elseif ($sales <= 149999) {
    $salary *= 1.15;
    echo '$'.number_format($salary, 2).'dollars';
} else {
    $salary *= 1.20;
    echo 'Awesome, you made 20% bonus!!! Your annual salary including bonus totals $'.number_format($salary, 2).'dollars';
}