<?php
$link=mysqli_connect("localhost", "root", "", "records");
if($link===false){
	die("");
	die("ERROR: Could not connect. " . mysqli_connect_error());
}
$first_name=mysqli_real_escape_string($link, $_POST['first_name']);
$last_name=mysqli_real_escape_string($link, $_POST['last_name']);
$gender=mysqli_real_escape_string($link, $_POST['gender']);
$dob=mysqli_real_escape_string($link, $_POST['dob']);
$street_no=mysqli_real_escape_string($link, $_POST['street']);
$city=mysqli_real_escape_string($link, $_POST['city']);
$district=mysqli_real_escape_string($link, $_POST['district']);
$state=mysqli_real_escape_string($link, $_POST['state']);
$email_id=mysqli_real_escape_string($link, $_POST['email']);
$contactno=mysqli_real_escape_string($link, $_POST['contactno']);
$pass=mysqli_real_escape_string($link, $_POST['pass']);

$sql="INSERT INTO employee (Firstname, Lastname, Gender, dob, streetno, city, district, state, emailid, contact_no, password) VALUES('$first_name', '$last_name', '$gender', '$dob', '$street_no', '$city', '$district', '$state', '$email_id', '$contactno', '$pass')";
if(mysqli_query($link, $sql)){
    echo "Congratulations! You have registered successfully.";

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);

?>