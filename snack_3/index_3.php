<?php
    $posts = [

        "21/07/2023" => [
            [
                "text" => "Auguri Nico"
            ],  
            [
                "text" => "Festeggio il compleanno con gli amici"
            ]
        ],
        "31/02/2014" => [
            [
                "text" => "Ben arrivata"
            ]
        ],
        "25/12/2023" => [
            [
                "text" => "Auguri di buon Natale"
            ],
            [
                "text" => "Quast'anno Natale fuori"
            ]
        ],
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css_3/style_3.css">
</head>
    <!-- ## Snack 3
    Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post. -->
<body>

    <?php 
        foreach ($posts as $date => $post) {
            echo $date ." ". "<br>";
            
            foreach ($post as $text) {
                echo $text['text'] ." ". "<br>";
            }
        }
        
    ?>
</body>
</html>