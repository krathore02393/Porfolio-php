<?php
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];


$conn = new mysqli('localhost', 'root', '', 'contactform');

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
else{
    $stmt = $conn->prepare("INSERT INTO registration (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss",$name,$email,$message);
    $stmt->execute();
    echo "Message Send..";
    $stmt->close();
    $conn->close();
} 
    
?>