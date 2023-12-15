<?php

// require_once('./index.php');

// $request = $database->query('INSERT INTO patients');

// $patients = $request->fetchAll();

// var_dump($patients);


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>


<form action="./traitement/traitement-ajout-patient.php" method="post">
   <label>Votre nom :</label>
   <input name="lastName" id="lastName" type="text" /></p>

   <label>Votre prénom :</label>
   <input name="firstName" id="firstName" type="text" /></p>

   <label>Votre âge :</label>
   <input name="age" id="age" type="number" /></p>

   <label>Votre numéro :</label>
   <input name="phone" id="phone" type="text" /></p>

   <label>Votre email :</label>
   <input name="mail" id="mail" type="text" /></p>
   


   <button type="submit">Valider</button>
</form>

        <ul>
            <?php
            // foreach ($clients as $client) {
            //     echo '<li> Nom : '. $client['lastName'] .'<p> '. 'prenom : ' . $client['firstName'].' '.' </li>';
            // }
            
            ?>
        </ul>
</body>
</html>