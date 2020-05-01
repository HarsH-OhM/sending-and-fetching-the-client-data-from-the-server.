<html>
    <body>
<?php
$connection = mysqli_connect("localhost", "root", "","skilldb"); // Establishing Connection with Server..

//Fetching Values from URL
if (isset($_POST)){
$Expertise_Area=$_POST['Expertise_Area'];
$Years=$_POST['Years'];
$Months=$_POST['Months'];
$Remotes=$_POST['Remotes'];
$Centre=$_POST['Centre'];
$Lerners_Place=$_POST['Lerners_Place'];
$My_Place=$_POST['My_Place'];
}
//Insert query
$query = mysqli_query($connection,"insert into skills(Expertise_Area, Years, Months,Remotes,Centre,Lerners_Place,My_Place ) values ('$Expertise_Area', '$Years', '$Months','$Remotes', '$Centre', '$Lerners_Place', '$My_Place')");
echo "Form Submitted Succesfully";
mysqli_close($connection); // Connection Closed
?>

<br><br>
<button class="detail" onclick="parent.location='expertiseNRatesDisplay.php'">Open Expertise details</button>
</body>
</html>