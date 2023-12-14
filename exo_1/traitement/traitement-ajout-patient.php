<?php


require_once('../database.connect.php');

if (
    isset($_POST["lastName"]) && !empty($_POST["lastName"]) &&
    isset($_POST["firstName"]) && !empty($_POST["firstName"]) &&
    isset($_POST["age"]) && !empty($_POST["age"]) &&
    isset($_POST["phone"]) && !empty($_POST["phone"]) &&
    isset($_POST["mail"]) && !empty($_POST["mail"])
) {

    $lastName = $_POST['lastName'];
    
    $firstName = $_POST['firstName'];
    
    $age = $_POST['age'];
    
    $phone = $_POST['phone'];
    
    $mail = $_POST['mail'];
}
else 
echo "données manquante";




?>