<?php 
    $products= [
        [
            'name' => 'svelto limone',
            'prezzo' => '3€',
            'immagine' => 'https://www.shukionline.it/wp-content/uploads/2019/07/8000630720066_1.png',
            'tipologia' => 'detersivi',

        ],
        [
            'name' => 'paglietta',
            'prezzo' => '1€',
            'immagine' => 'https://images.eprice.it/nobrand/0/Lightbox/347/206567347/2F201514-876E-4E35-9B52-9A2C59DC64C0.jpg',
            'tipologia' => 'spugne',

        ],
        [
            'name' => 'lisoform',
            'prezzo' => '2€',
            'immagine' => 'https://www.zenick.it/media/catalog/product/cache/1/thumbnail/600x/17f82f742ffe127f42dca9de82fb58b1/P/L/PL3343.jpg',
            'tipologia' => 'disinfettanti',

        ],
        [
            'name' => 'viakal',
            'prezzo' => '4€',
            'immagine' => 'https://r.restore.shopping/resizer/go?s=https%3a%2f%2frsbackend.blob.core.windows.net%2fbrandbank-pen%2f8001090590022_0_637466113364698512.png&w=600&h=600',
            'tipologia' => 'detersivi',

        ],
        [
            'name' => 'mezze penne',
            'prezzo' => '1€',
            'immagine' => 'https://upload.wikimedia.org/wikipedia/commons/0/0b/Pennelisce_closeup.png',
            'tipologia' => 'pasta',

        ],
    ];
    if (isset($_GET['tipologia']) !== false) {
        $tipologia = $_GET['tipologia'];
        if ($tipologia === 'all') {
            $productsFiltered = $products;
        }else {
            $productsFiltered = [];
            foreach ($products as $product) {
                if ($product['tipologia'] === $tipologia) {
                    $productsFiltered[] = $product;
                }
            }
        }
        var_dump($productsFiltered);
    };
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
    <div>
        <ul>
            <?php foreach ($productsFiltered as  $product) { ?>
                
                <li><?= $product['name'] ?></li>
                <li><?= $product['prezzo'] ?></li>
                <li><?= $product['tipologia'] ?></li>
                <li> <img style="width: 100px;" src="<?= $product['immagine'] ?>" alt=""></li>
            <?php }?>
        </ul>
    </div>
</body>
</html>