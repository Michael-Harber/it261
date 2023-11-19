<?php
include('config.php');
include('./includes/header.php');


$movie['The_Lord_of_the_Rings'] = 'tlotr_Directed by Peter Jackson and released in 2001.';
$movie['Prisoners'] = 'priso_Directed by Denis Villeneuve and released in 2013.';
$movie['Garden_State'] = 'garde_Directed by Zach Braff and released in 2004.';
$movie['Hot_Rod'] = 'hotro_Directed by Akiva Schaffer and released in 2007.';
$movie['Blade_Runner_2049'] = 'blade_Also directed by Denis Villeneuve and released in 2017.';
?>



<div id="wrapper">
<main>
<h1>Welcome to our Gallery page!</h1>

<table>
<?php  foreach($movie as $name => $image)                     :?>
<tr>
<td><img src="images/<?php  echo substr($image, 0, 5);?>.jpg" alt="<?php echo str_replace('_', ' ', $name);?>"></td>
<td><?php echo str_replace('_', ' ', $name);?></td>
<td><?php echo substr($image, 6) ?></td>






</tr>
<?php endforeach ;?>
</table>

</main>


</div>

<?php
include('./includes/footer.php');