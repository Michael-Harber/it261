<?php


include('config.php');



if(isset($_GET['id'])) {
$id = (int)$_GET['id'];

} else {
    header('Location: series.php');    
}

$sql = 'SELECT * FROM series WHERE series_id = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {
$series_name = stripcslashes($row['series_name']);
$author_name = stripcslashes($row['author_name']);
$author_email = stripcslashes($row['author_email']);
$synopsis = stripcslashes($row['synopsis']);
$details = stripcslashes($row['details']);
$feedback = '';

    
} // close while loop 


} else {
    $feedback = 'Houston, we have a problem';
}

include('./includes/header.php');

?>

<main>
<h1>Welcome to my Series View Page</h1>
<h2>Introducing: <?php echo $series_name;?></h2>
<ul>
<?php
echo '
<li><b>Series Name:</b>'.$series_name.'</li>
<li><b>Author Name:</b>'.$author_name.'</li>
<li><b>Author Email:</b>'.$author_email.'</li>
';
?>
</ul>
<p><?php echo $synopsis;?></p>
<p><?php echo $details;?></p>
<p>Return to our <a href="series.php">series page!</a></p>


</main>

<aside>
<h3>My series image!</h3>
<figure>
<img src="./images/series<?php echo $id;?>.jpg" alt="<?php echo $series_name;?>">



</aside>

</div>
<!-- end wrapper -->

<?php

@mysqli_free_result($result);

@mysqli_close($iConn);

include('./includes/footer.php');
