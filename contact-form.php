<?php

include 'conn.php';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$contact_insert = "INSERT INTO contact_details (Name, Email, Message) VALUES('$name','$email','$message');";
$res = $conn->query($contact_insert);

header('Location: ../home/home.php');

?> 