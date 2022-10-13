<?php
$xml=simplexml_load_file("http://www.ecb.europa.eu/stats/eurofxref/eurofxref-daily.xml");

$array_currency = $xml->Cube->Cube->Cube;
 
function convert($from, $to, $amount) {
	global $array_currency;
	if($from === "EUR"){
		$to = get_rate($to);
	 	if ($to != "99999999") {
			$result = round((double)$to * (double)$amount,4,PHP_ROUND_HALF_EVEN);
		} else {
			$result = $amount;
		}
	} else {
		$from_temp = get_rate($from);
		$to_temp = get_rate($to);
		 if ($from_temp != "99999999" && $to_temp != "99999999" ) {
			$to = (double)$to_temp / (double)$from_temp;
			$result = round((double)$to * (double)$amount,4,PHP_ROUND_HALF_EVEN);
		 } else {
		 	$result = $amount;
		 }
	}
	return $result;
}
function get_rate($currency) {
	global $array_currency;
	for ($i=0;$i<count($array_currency);$i++) {
		if($array_currency[$i]['currency'] == "$currency") {
			$rate = $array_currency[$i]['rate'];
			break;
		} else {
			$rate = "99999999";
		}
	}
	return $rate;
}
if(isset($_POST["info"])){
    $convert = convert($_POST["currencyIn"],$_POST["currencyOut"], $_POST["input"]);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>currency live</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
</head>
<body>
    <div class="container">
        <form class="position-absolute top-50 start-50 translate-middle" name=form_currency method="post">
            <h1>daily updated converter</h1>
            <br>
            <select class="form-control shadow" id="currency" name="currencyIn">
                <option value="EUR">Euro</option>
                <option value="USD">American Dollar</option>
                <option value="AUD">Australian dollar</option>
                <option value="JPY">japanese yen</option>
            </select>
            <br>
            <input class="form-control shadow" type="number" name="input" value="1">
            <br>
            <br>
            <select class="form-control shadow" id="currency" name="currencyOut">
                <option value="USD">American Dollar</option>
                <option value="EUR">Euro</option>
                <option value="AUD">Australian dollar</option>
                <option value="JPY">japanese yen</option>
            </select>
            <br>
            <input class="form-control shadow" type="number" name="output" value="<?php echo $convert?>">
            <p><?php $code?></p>
            <br>
            <input class="btn btn-dark position-absolute top-100 start-50 translate-middle" type="submit" name="info" value="Bevestig">
        </form>
    </div>



</body>
</html>