<?php 
$firstname = $_POST['firstName'];
$lastname = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];
$bio = $_POST['bio'];
$message = $_POST['message'];
$fullAddress = $_POST['fullAddress'];
$city = $_POST['city'];
$gender = $_POST['gender'];


# Database connection

$con = new mysqli('localhost', 'root', '', 'form_database');
if($con->connect_error){
    die('Connection Faild : '.$con->connect_error);

} else {
    $stmt = $con->prepare("INSERT INTO form_table(firstname, lastname,	email, password, bio, message, fullAddress, city, gender)
    VALUES(?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssssss", $firstname, $lastname,	$email, $password, $bio, $message, $fullAddress, $city, $gender);
    $stmt->execute();
    echo "<h1> Registation successfull...</h1>";
    $stmt->close();
    $con->close();
}

?>