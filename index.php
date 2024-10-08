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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="./style.css" rel="stylesheet">
</head>
    <body>
        <div class="my-5">

            <h2 class="text-center">
                Dati stampati in pagina senza stile
            </h2>

            <ul class="text-center list-group mt-4">

                <?php

                    foreach( $hotels as  $hotel)
                    {

                ?> 
                        
                    <li>

                        <span>

                            <?php echo "{$hotel['name']}" ?>

                        </span>

                        <span>

                            <?php echo "{$hotel['description']}" ?>

                        </span>

                        <span>
                            <?php
                            if($hotel['parking'] == true){

                                echo 'Si';
                            } else{
                                echo 'No';
                            }?>
                        </span>

                            
                        <span>
                            <?php echo "{$hotel['vote']}" ?>
                        </span>

                        <span>
                            <?php echo "{$hotel['distance_to_center']}" ?>
                        </span>

                    </li>

                <?php 

                    }

                ?>

            </ul>

        
        </div>

        <h2 class="text-center">
            Dati visualizzati in tabella
        </h2>
        <table class="table text-center table-striped table-bordered my-table mt-4">
            <thead>
                <tr class="table-primary">
                
                    <th scope="col">Nome</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Parcheggio</th>
                    <th scope="col">Stelle</th>
                    <th scope="col">Distanza dal centro</th>

                </tr>

            </thead>

            <tbody>

                <?php  
                
                    foreach( $hotels as  $hotel)
                    {
                ?>
                    <tr>
                    
                        <td><?php echo "{$hotel['name']}" ?></td>
                        <td><?php echo "{$hotel['description']}" ?></td>
                        <td>
                            <?php
                            if($hotel['parking'] == true){

                                echo 'Si';
                            } else{
                                echo 'No';
                            }?> 
                            </td>
                        <td><?php echo "{$hotel['vote']}" ?></td>
                        <td><?php echo "{$hotel['distance_to_center']}" ?></td>
                    </tr>

                <?php

                    }
                    
                ?>
                
            </tbody>
        </table>
    </body>
</html>