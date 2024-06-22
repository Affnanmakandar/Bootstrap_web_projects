<?php 
$con = mysqli_connect ('localhost','root');
if($con){
    echo "connection successful";
}
else{
    echo "No connection";
}
mysqli_select_db($con,'keto');
$user = $_POST ['firstname'];
$surname = $_POST['surname'];
$mail = $_POST['mail'];
$message = $_POST['message'];
$query = "insert into user_info(firstname,surname,mail,message)
values ('$user','$surname','$mail','$message')";
mysqli_query($con,$query);
// ussi location pe redirect rahega submit ke baad aage connection successful nhi dikaega
// duplicate values bhi nhi dikaega
header('location:connect.php');
?>