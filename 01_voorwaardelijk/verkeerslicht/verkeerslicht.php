<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Verkeer</title>
</head>
<body>
    <div class="container">
        <h1>verkeerslicht</h1>
        <form name="form_verkeerslicht" method="post" action="output.php">
            <div class="mb-3">
                <label for="kleur">Kies een kleur</label>
                <select name="kleur" class="form-control">
                    <option value="groen">Groen</option>
                    <option value="oranje">Oranje</option>
                    <option value="rood">Rood</option>
                </select>
                <br>
                <input type="submit" name="keuze" value="Bevestig" class="btn btn-dark">
            </div>
        </form>
    </div>
</body>
</html>