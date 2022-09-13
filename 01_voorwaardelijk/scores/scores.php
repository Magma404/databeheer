<?php
$cijfer = 6;
$naam = "verstraeten";
$achternaam = "noah";

$geslacht = "m";

if($geslacht == "m"){
    $aanspreektitel = "meneer";
}else $aanspreektitel = "mevrouw";


if($cijfer >= 5){
     $eindresultaat = " en u bent geslaagd ";
}else $eindresultaat = " en u bent gefaald ";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>voorwaardelijk</title>
</head>
<body>
    <h1>Beoordeling</h1>
    <hr>
    <h3>beste <?php echo $aanspreektitel." ". $naam. " ".$achternaam ?> </h3>
    <h3>u behaalde <?php echo $cijfer . $eindresultaat ?></h3>
</body>
</html>