<?php
$hostname = 'localhost';
$username = 'root';
$password = '';

$dbname = 'user_registration';

$conn = mysqli_connect($hostname, $username, $password);

if(!$conn){
    die("Connection failed.");
}
if(isset($_POST['save']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $retypepassword = $_POST['retypepassword'];

    $qry = "INSERT INTO `userdata`(`id`, `first_name`, `last_name`, `email`, `password`,`retypepassword`) VALUES ('$fname','$lname','$email',$password,'$retypepassword')";

    if(mysqli_query($conn,$qry)){
        echo "Data Inserted Successfully!";
    }
    else{
        echo "Error: " .$sql ."" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
