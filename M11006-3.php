<?php
$cars = [
    [
        "brand" => "Audi",
        "model" => "R8",
        "power" => 456,
        "price" => 149_750,
        "weight" => 1_590,
        "img" => "https://www.largus.fr/images/images/2019-audi-r8-1.jpg"
    ],
    [
        "brand" => "BMW",
        "model" => "M3",
        "power" => 510,
        "price" => 107_600,
        "weight" => 1_730,
        "img" => "https://www.largus.fr/images/images/BMW-M3-M4-2014-premieres-photos-offici_22.jpg?width=940&quality=80"
    ],
    [
        "brand" => "Bugatti",
        "model" => "Veyron",
        "power" => 1_001,
        "price" => 1_100_000,
        "weight" => 1_990,
        "img" => "https://www.largus.fr/images/images/bugatti-veyron-pur-sang.jpg"
    ],
    [
        "brand" => "Ferrari",
        "model" => "F430",
        "power" => 490,
        "price" => 342_851,
        "weight" => 1_230,
        "img" => "https://www.largus.fr/images/images/ferrari-f430_1.jpg"
    ],
    [
        "brand" => "Porsche",
        "model" => "Cayman",
        "power" => 300,
        "price" => 59_692,
        "weight" => 1_460,
        "img" => "https://www.largus.fr/images/images/porsche-718-cayman-27.jpg"
    ]
];

array_multisort(array_column($cars, 'price'),SORT_ASC,$cars);
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Mini-App Cars</title>
</head>

<body>

</body>
<div>
    <a href="/">Retour à l'index</a>
</div>
<main>

    <?php

        for($i = 0 ; $i<count($cars); $i++){
    ?>
    
            <section>
                <img src=" <?= $cars[$i]["img"]?>" alt="<?= $cars[$i]["brand"]?>">
                <h2>Marque: <?= $cars[$i]["brand"]?>  </h2>
                <div>Modèle: <?= $cars[$i]["model"]?> </div>
                <div>Poids: <?= $cars[$i]["weight"]?> </div>
                <div>Puissance: <?= $cars[$i]["power"]?> </div>
                <div>Prix : <?= number_format($cars[$i]["price"],0,",", " ")?> € </div>
                <div>Rapport Poids / Puissance : <?= $cars[$i]["weight"] / $cars[$i]["power"]?> </div>
            </section>

       <?php } ?>
   

</main>

</html>