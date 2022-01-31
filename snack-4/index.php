<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi. 
Ogni punto un nuovo paragrafo. -->

<?php
    $string = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores cumque doloremque ipsa dolore reprehenderit, quisquam iusto repudiandae. sapiente dolores, tempora dignissimos? Quas optio autem magnam voluptate minus rem. Veritatis, architecto?';
    $paragraph = explode(". " , $string);
    // foreach ($paragraph as $element) {
    //     var_dump($element);
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
        <li><?php echo $paragraph[0]?></li>
        <li><?php echo $paragraph[1]?></li>
        <li><?php echo $paragraph[2]?></li>
        <li><?php echo $paragraph[3]?></li>
    </ul>
</body>
</html>

