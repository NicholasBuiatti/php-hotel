<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];
$parking = $_GET["btnradio"];
$voto = $_GET["vote"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-dark text-white">
    <h1>Questi sono gli Hotel</h1>
    <!-- <ul>
        <?php /*foreach ($hotels as $hotel) {
            foreach ($hotel as $key => $value)
                echo "<li>" . $key . " " . $value . "</li>";
        } */ ?>
    </ul> -->

    <table class="table table-bordered border-primary">
        <thead>
            <tr>

                <?php
                foreach ($hotels[0] as $key => $value) {

                    echo "<th scope='col'>" . $key . "</th>";
                }
                ?>

            </tr>
        </thead>
        <tbody>

            <?php
            foreach ($hotels as $hotel) {
                echo "<tr>";
                if ($hotel['parking'] == true) {
                    $hotel['parking'] = 'yes';
                } else {
                    $hotel['parking'] = 'no';
                }
                foreach ($hotel as $key => $value) {

                    echo "<td scope='row'>" . $value . "</td>";
                }
                echo "</tr>";
            }
            ?>

        </tbody>
    </table>

    <h1>Hotel della Ricerca</h1>

    <table class="table table-bordered border-primary">
        <thead>
            <tr>

                <?php
                foreach ($hotels[0] as $key => $value) {

                    echo "<th scope='col'>" . $key . "</th>";
                }
                ?>

            </tr>
        </thead>
        <tbody>

            <?php
            foreach ($hotels as $hotel) {
                // MI TRASFORMI I TRUE IN YES E I FALSE IN NO PER I PARKING
                if ($hotel['parking'] == true) {
                    $hotel['parking'] = 'yes';
                } else {
                    $hotel['parking'] = 'no';
                }
                if ($parking == 'yes' && $hotel['parking'] == 'yes' && $hotel['vote'] >= $voto) {
                    echo "<tr>";
                    // MI TRASFORMI I TRUE IN YES E I FALSE IN NO PER I PARKING

                    foreach ($hotel as $key => $value) {

                        echo "<td scope='row'>" . $value . "</td>";
                    }
                    echo "</tr>";
                } elseif ($parking == 'no' && $hotel['parking'] == 'no' && $hotel['vote'] >= $voto) {
                    echo "<tr>";
                    // MI TRASFORMI I TRUE IN YES E I FALSE IN NO PER I PARKING

                    foreach ($hotel as $key => $value) {

                        echo "<td scope='row'>" . $value . "</td>";
                    }
                    echo "</tr>";
                } elseif ($parking == 'all' && $hotel['vote'] >= $voto) {
                    echo "<tr>";
                    // MI TRASFORMI I TRUE IN YES E I FALSE IN NO PER I PARKING

                    foreach ($hotel as $key => $value) {

                        echo "<td scope='row'>" . $value . "</td>";
                    }
                    echo "</tr>";
                }
            }
            ?>

        </tbody>
    </table>
    <h2>
        <?php
        echo $parking;
        echo $voto;
        ?>
    </h2>
</body>

</html>