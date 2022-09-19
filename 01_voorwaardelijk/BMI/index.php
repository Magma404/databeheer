<?php
$solution = "";
$comment = "";
$gewicht = 80;
$lengte = 110;

if(isset($_POST["info"])){
    $gewicht = $_POST["input_gewicht"];
    $lengte = $_POST["input_lengte"]/100;
    $som = round($gewicht / ($lengte * $lengte), 2);

    $solution = "Uw BMI is " . $som;
    if($som <= 18.5){
        $comment = "u heeft een ondergewicht";
    } else if($som <= 25){
        $comment = "u heeft een normaal gewicht";
    }else if($som <= 27){
        $comment = "u heeft een Licht overgewicht";
    }else if($som <= 30){
        $comment = "u heeft een Matig overgewicht";
    }else if($som <= 40){
        $comment = "u heeft een Ernstig overgewicht (obesitas)";
    }else{
        $comment = "u heeft een Zeer ernstig overgewicht (morbide obesitas)";
    }
    $lengte = $lengte * 100;
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>BMI</title>
    <style>
        body{
            text-transform: capitalize;
            background-color: #f5ffff;
        }
        h1{
            padding: 40px 0;
            text-align:center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-ms-6 col-md-6">
                <h1>BMI berekenen</h1>
                <h5>Voer uw gewichtlengte in.</h5>
                <form name="form_bmi" method="post">
                    <div class="mb-3">
            
                        <label class="formGroupExampleInput" for="beschinput_gewichtrijving">Gewicht in kg:</label>
                            <input class="form-control" id="formGroupExampleInput" name="input_gewicht" type="number" value="<?php echo $gewicht ?>">
                            <input type="range" class="form-range" id="customRange1" onInput="change()" step="1" min="0" max="160" value="<?php echo $gewicht ?>">
                        <br>
                        <br>
                            <label class="formGroupExampleInput" for="input_lengte">Lengte in cm:</label>
                            <input class="form-control" id="formGroupExampleInput" name="input_lengte" type="number" value="<?php echo $lengte?>">
                            <input type="range" class="form-range" id="customRange2" onInput="change()" step="1" min="0" max="220" value="<?php echo $lengte ?>">
                        <br>
                        <br>
                            <input type="submit" name="info" value="Bevestig" class="btn btn-dark btn-lg">
                    </div>
                </form>
                <h3><?php echo $solution?> </h3>
                <p><?php echo $comment?></p>
            </div>
            <div class="mb-3 col-ms-6 col-md-6">
                <img src="bmi.png" width="100%">
            </div>
        </div>
    </div>
</div>

<script>
    function change(){
        document.forms['form_bmi']['input_gewicht'].value = document.getElementById('customRange1').value ;
        document.forms['form_bmi']['input_lengte'].value = document.getElementById('customRange2').value ;
    }
</script>
</body>
</html>
