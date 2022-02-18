<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>traitement</title>
</head>
<body>
    
</body>
</html>
<?php

 $pseudo = $_POST["pseudo"];
 $date = $_POST["date"];


 echo("Bonjour ! " . $pseudo . "<br>Vous êtes née le " . $date. "<br>");
 $aujourdhui = date("Y-m-d");
 
 $diff = date_diff(date_create($date), date_create($aujourdhui));
 echo('<br>Votre age est '. $diff->format('%y'). "ans");
 $age = $diff->format('%y');
 
 /
 if($age >= 18) {
    header('Location: https://www.amazon.fr/');
    exit();
 }
else {
    header('Location: https://us.teletubbies.com/');
    exit();
 } 
 ?>