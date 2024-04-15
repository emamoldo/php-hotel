<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4,
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2,
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1,
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5,
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50,
        ],

    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>Hotels List:</h1>

    <?php foreach ($hotels as $hotel) : ?>

        <div class="container">
            <table class="table">
                <thead>
                    <tr class="text-center">
                        <th scope="col">Name:</th>
                        <th scope="col">Description:</th>
                        <th scope="col">Parking:</th>
                        <th scope="col">Vote:</th>
                        <th scope="col">Distance to Center (in Km):</th>
                    </tr>
                </thead>
        
                <tbody>
                    <tr class="text-center">
                        <td scope="row">
                            <?= $hotel['name'] ?>
                        </td>
                        <td>
                            <?= $hotel['description'] ?>
                        </td>
                        <td>
                            <?= $hotel['parking'] ?>
                        </td>
                        <td>
                            <?= $hotel['vote'] ?>
                        </td>
                        <td>
                            <?= $hotel['distance_to_center'] ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    <?php endforeach; ?>
</body>
</html>