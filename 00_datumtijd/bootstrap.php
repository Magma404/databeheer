<?php 
if(isset($_POST["knop_berekenen"])){
  $vandaag = strtotime(date('y-m-d'));
  $verjaardag = strtotime($_POST["verjaardag"]);
  $aantaldagen = round(($verjaardag - $vandaag) / (60*60*24));
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <h2>Wanneer is mijn volgende verjaardag</h2>
    <p></p>
    <form name="form_verjaardag" method="post" action="">
        <div class="form-group">
            <label for="verjaardag">verjaardag</label>
            <input type="date" class="form-control" name="verjaardag">
        </div>
        <input type="submit" bclass="btn btn-info" name="knop_berekenen" value="bereken">
    </form>
  <?php 
  if($aantaldagen > 0){
  echo("<h3> binnen $aantaldagen dagen ben je jarig </h3>");
  }
?>
  </div>
</body>

</html>