<?php
session_start();
if (isset($_POST['update-submit'])) {

    $servername = "localhost";
    $dBUsername = "root";
    $dBPassword = "root";
    $dBName = "royvan1q_websitedekas";
    
    
    $conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);



    $id = $_SESSION['userId'];
    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastName'];

    $conn->query("UPDATE users SET usernameUsers='$username', emailUsers='$email', firstName='$firstname', lastName='$lastname' WHERE idUsers='$id'");
    
    header("Location: ../profilepage.php?update=success");
}    
