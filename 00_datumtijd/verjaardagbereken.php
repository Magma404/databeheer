<?php 
//variabelen declaratie
$vandaag = strtotime(date('y-m-d'));
$verjaardag = strtotime("2023-11-07");
$aantaldagen = ($verjaardag - $vandaag) / (60*60*24);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datum en tijd</title>
</head>
<body>
  <h2>Datum en tijdsfunctie</h2>
  <p>De datum van vandaag is <?php echo date('d-m-Y' , $vandaag); ?></p>
  <p>mijn volgende verjaardg is <?php echo date('d-m-Y' , $verjaardag); ?></p>
  <p>Nog <?php echo $aantaldagen; ?> dagen</p>
</body>
</html>