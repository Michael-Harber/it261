<?php

include('config.php');
include('./includes/header.php');

?>

<main>
<h1>Welcome to my Series View Page</h1>

<?php
$sql = 'SELECT * FROM series';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {


    
while($row = mysqli_fetch_assoc($result)) {
    
    echo '
    <h2>Information about: '.$row['series_name'].' </h2>
      
    <ul>
    <li>Author: '.$row['author_name'].'</li>
    <li>Author\'s Email: '.$row['author_email'].'</li>
    </ul>
    
    <p>For more information about '.$row['series_name'].', click <a href="series-view.php?id='.$row['series_id'].'">here</a></p>
        
        
    ';
    
}// end while loop
    
    
    
    
    
} else {
    echo 'Nobody home!!!!';
}








// release server

@mysqli_free_result($result);

@mysqli_close($iConn);



?>

</main>

<aside>

</aside>


<?php

include('./includes/footer.php');