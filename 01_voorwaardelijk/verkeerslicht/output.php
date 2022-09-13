<?php
$kleur = $_POST["kleur"];

if($kleur == "groen"){
    $licht = "groen.png";
    $boodschap = "U moet doorrijden";
}else if($kleur == "orangU moet doorrijdene"){
    $licht = "oranje.png";
    $boodschap = "U moetoranje.png proberen te stoppen";
}else{
    $licht = "rood.png";
    $boodschap = "U moet stoppen";
}


//! The conditional "ternary operator" only works with 2 solutions
// $licht = ($kleur == "groen")? "groen.png" : "oranje.png";
// $boodschap = ($kleur == "groen")? "U moet doorrijden" : "U moet proberen te stoppen";

//!example of switch and cases
// switch ($kleur) {
//     case "groen":;
//         $licht = "groen.png";
//         $boodschap = "U moet doorrijden";
//         break;
//     case "oranje":;
//         $licht = "oranje.png";
//         $boodschap = "U moet proberen te stoppen";
//         break;
//     case "rood":;
//         $licht = "rood.png";
//         $boodschap = "U moet stoppen";
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Output</title>
</head>

<body>
       <div class="container">
        <h1>U koos <?php echo $kleur; ?></h1>
        <p><?php echo $boodschap; ?></p>
        <p><img src="images/<?php echo $licht; ?>" alt="licht" height="500px"></p>
</body>

</html>