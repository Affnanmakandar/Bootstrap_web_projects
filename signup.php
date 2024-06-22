<?php
$con = mysqli_connect('localhost','root');

if($con){
    echo "connection successful";
}else{
    echo "connection not successful";
}

mysqli_select_db($con,'keto');

$firstname = $_POST['firstname'];
$mail = $_POST['email'];

// Check if the email already exists in the database
$check_query = "SELECT * FROM signup_update WHERE email='$mail'";
$result = mysqli_query($con, $check_query);

if(mysqli_num_rows($result) > 0) {
    echo "Email already exists in the database.";
} else {
    // Insert data into the database
    $query = "INSERT INTO signup_update (firstname, email) VALUES ('$firstname', '$mail')";
    mysqli_query($con, $query);
    echo "Data saved successfully.";
}

header('location:index.php');
?>
