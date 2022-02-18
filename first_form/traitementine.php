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

var_dump($_POST);


 $pseudo = $_POST["pseudo"];
 $date = $_POST["date"];


 echo("Bonjour ! " . $pseudo . "<br>Vous êtes née le " . $date. "<br>");
 $aujourdhui = date("Y-m-d");
 
var_dump(date_create($date));
var_dump(date_create($aujourdhui));
$diff = date_diff(date_create($date), date_create($aujourdhui));
var_dump();
 echo('<br>Votre age est '. $diff->format('%y'). "ans");



 var_dump(gettype($diff)); // gettype : renvoie le type d'une variable
 var_dump($diff);
 
 $age = $diff->format('%y');
 



 die(); // tue le programme à ce moment précis (ici pratique pour ne pas faire la redirection plus bas)
 
 
 if($age >= 18) {
    header('Location: https://www.amazon.fr/');
    exit();
 }
else {
    header('Location: https://us.teletubbies.com/');
    exit();
 } 
 ?>