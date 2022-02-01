<!-- Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio 
e i PM in un rettangolo verde. -->
<?php

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

// foreach ($db as $key => $ppl) {
//     foreach ($ppl as $element) {
//         // var_dump($element['name']);
//         echo '<li>' . $key . '</li>';
//         echo '<li>' . $element["name"] . '</li>';
//         echo '<li>' . $element["lastname"] . '</li>'; 
//     }
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php
            foreach ($db['pm'] as $key => $ppl) {
            // var_dump($ppl);
                echo '<li>' . $ppl["name"] . '</li>';
                echo '<li>' . $ppl["lastname"] . '</li>';
            }  
        ?> 
    </ul>
    <ul>
        <?php
        foreach ($db['teachers'] as $key => $ppl) {
            // var_dump($ppl);
            echo '<li>' . $ppl["name"] . '</li>';
            echo '<li>' . $ppl["lastname"] . '</li>';
        }  
        ?>
    </ul>
</body>
</html>

