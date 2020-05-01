

<!DOCTYPE html>
<html>
    <head>
    <title>Display all records from Database</title>
    </head>
<body>
<h2>Expertise Details</h2>

<?php

$connection = mysqli_connect("localhost", "root", "","skilldb");   //making connection to to the server

$sql= "SELECT * FROM skills";                                      //fetching the data from database
$result = mysqli_query($connection, $sql);
$json_array = array();                                             //making an array to store data

while( $row = mysqli_fetch_assoc( $result ) ){
    $json_array[]=$row;

}

echo json_encode($json_array);  //changing the json data into araay string.
// echo '<pre>';
// print_r($json_array);
// echo '</pre>';
?>


</body>
</html>