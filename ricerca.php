<?php



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ricerca Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-dark text-white">
    <h1>Cerca qua il miglior hotel per le tue vacanze!!</h1>
    <div>
        <h2>Vuoi il parcheggio?</h2>
        <form action="hotelPage.php" method="GET">
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check" value='yes' name="btnradio" id="btnradio1" autocomplete="off">
                <label class="btn btn-outline-primary" for="btnradio1">YES</label>

                <input type="radio" class="btn-check" value='no' name="btnradio" id="btnradio2" autocomplete="off">
                <label class="btn btn-outline-primary" for="btnradio2">NO</label>

                <input type="radio" class="btn-check" value='all' name="btnradio" id="btnradio3" autocomplete="off" checked>
                <label class="btn btn-outline-primary" for="btnradio3">ALL</label>
            </div>

            <p>Seleziona da che voto vuoi visualizzare gli hotel</p>
            <input type="number" min='1' max='5' name='vote'> <br>

            <button type="submit" class="btn btn-success mt-3">Ricerca</button>
        </form>
    </div>

</body>

</html>