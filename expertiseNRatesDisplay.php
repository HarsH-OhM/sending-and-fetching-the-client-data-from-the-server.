

<!DOCTYPE html>
<html>
    <head>
    <title>Display all records from Database</title>
    </head>
<body>
<h2>Expertise Details</h2>

<?php

$connection = mysqli_connect("localhost", "root", "","skilldb");

$sql= "SELECT * FROM skills";
$result = mysqli_query($connection, $sql);
$json_array = array();

while( $row = mysqli_fetch_assoc( $result ) ){
    $json_array[]=$row;

}

echo json_encode($json_array);
// echo '<pre>';
// print_r($json_array);
// echo '</pre>';
?>


</body>
</html>