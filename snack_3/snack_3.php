<?php

$articles = [

    '16/09/2023' => [
        [
            'title' => 'Italiano trafitto da un pesce in Indonesia: "Ho pensato di morire, perforato il polmone"',
            'author' => 'Geltrude Manca',
            'text' => "L'incidente è avvenuto il 6 dicembre 2023 mentre il 34enne era in vacanza con un amico sull’isola vulcanica di Sumbawa. L'aguglia lo ha trafitto provocandogli una ferita grave sotto l'ascella e la perforazione di un polmone"
        ],
        [
            'title' => 'Fleximan colpisce ancora in Veneto, i sindaci si arrendono: "Non ripareremo gli autovelox abbattuti"',
            'author' => 'Ernesto Sparalesto',
            'text' => 'Questa volta è comparsa anche la firma: un cartello con la scritta a caratteri cubitali "Fleximan sta arrivando"'
        ],
    ],
    '25/11/2023' => [
        [
            'title' => 'Taila Semeraro è il miglior gelatiere emergente d’Italia, dalla Bocconi al ritorno in Puglia per esaltare l’arte del nonno Ciccio',
            'author' => 'Annabella Verga',
            'text' => 'La gelatiera di Ostuni vince il riconoscimento del Gambero Rosso: la sua storia è quella di un cervello di di ritorno dopo la laurea in Economia a Milano. “Un momento di felicità in cui ti convinci che davvero tutto ha un senso”'
        ]
    ],
    '05/01/2024' => [
        [
            'title' => 'Mamma lancia il figlio dal balcone: il papà lo prende al volo',
            'author' => 'Franco Manontroppo',
            'text' => 'Il video della scena è stato condiviso su Facebook da una vicina. "Si può essere così stupidi?", si chiede la donna. Nel filmato si vede la mamma "passare" il bambino oltre la ringhiera e lasciarlo cadere tra le braccia del papà'
        ],
        [
            'title' => 'Gesù a spasso per Torino: fermato dalla polizia',
            'author' => 'Pino Silvestre',
            'text' => 'Un giovane disoccupato torinese si è messo a girare per le strade della città della Sindone vestito come il Messia, ma alcuni fedeli hanno protestato e la polizia lo ha già fermato diverse volte'
        ],
        [
            'title' => "Microsoft lancia l'emoticon con il dito medio",
            'author' => 'Massimo Voltaggio',
            'text' => "Utenti in attesa per l'emoticon più irriverente del web. Sarà disponibile con l'aggiornamento per Windows 10. E' il primo colosso della tecnologia a fare questa scelta"
        ]
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1 class="text-center pt-4">ARTICLES</h1>
    <div class="container-xl">

        <?php foreach ($articles as $key => $article) { ?>
            <div class="row flex-wrap py-4 gap-3 ">

                <?php foreach($article as $elem) { ?>
                    <div class="col border border-1 border-black p-4 ">
                        <div class="col-12"><?php echo $key ?></div>
                        <h4 class="mb-3"><?php echo $elem['title'] ?></h4>
                        <p><?php echo $elem['text'] ?></p>
                        <div class="text-end"><?php echo $elem['author'] ?></div>
                    </div>
                <?php } ?>
            </div>
            <hr class=" text-black ">
        <?php } ?>
    </div>
</body>
</html>