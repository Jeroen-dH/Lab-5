<?php
$file = json_decode(file_get_contents("C:\Program Files\Ampps\www\Lab-5\opdracht1_bijlage.json"),true);
print "Voornaam: ".$file["voornaam"]."<br>";
print "Achternaam: ".$file["achternaam"]."<br>";
print "Nationaliteit: ".$file["nationaliteit"]."<br>";
print "Leeftijd: ".$file["leeftijd"]."<br>";
print "Gewicht: ".$file["gewicht"]."<br>";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>