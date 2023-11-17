<?php

include('config.php');

$sql = 'SELECT * FROM people';

// now, we need to connect to the database!!

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_connect_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

// we have a row, which translates into an array
// if our result is greater than 0, we are happy

if(mysqli_num_rows($result) > 0) {

//  we are going toa dd a while loop

while($row = mysqli_fetch_reults_assoc($result)) {

    echo '
    <h2>Information about: '.$row['first_name'].'</h2>
    <h2>Information about: '.$row['last_name'].'</h2>
    
    
    ';

}// end while loop
} // end if statement