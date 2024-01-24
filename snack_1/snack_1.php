<?php 
    $games = [
        [
            'Home' => 'Milano',
            'Guest' => 'Parma',
            'Home_points' => '57',
            'Guest_points' => '35',
        ],
        [
            'Home' => 'Padova',
            'Guest' => 'Genova',
            'Home_points' => '70',
            'Guest_points' => '47',
        ],
        [
            'Home' => 'Taranto',
            'Guest' => 'Firenze',
            'Home_points' => '25',
            'Guest_points' => '39',
        ],
        [
            'Home' => 'Taranto',
            'Guest' => 'Firenze',
            'Home_points' => '25',
            'Guest_points' => '39',
        ],
        [
            'Home' => 'Lecce',
            'Guest' => 'Palermo',
            'Home_points' => '80',
            'Guest_points' => '13',
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach($games as $game) { ?>
            <li>
                <?php echo $game['Home'].' - '.$game['Guest'].' | '.$game['Home_points'].' - '.$game['Guest_points'] ?>
            </li>
        <?php } ?>
    </ul>
</body>
</html>