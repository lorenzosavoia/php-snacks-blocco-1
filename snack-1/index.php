<!-- Passare come parametri GET name, mail e age 
verificare che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
if (empty($_GET['name']) || empty($_GET['mail']) || empty($_GET['age'])) {
    $message = 'Scrivi Nome, Mail, Etá';
} else {
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];
    if (strpos($mail, '@', '.') !== false && strlen($name) > 3 !== false && is_numeric($age) !== false) {
        $message = 'Accesso riuscito';
    } else {
        $message = 'Accesso negato';
    }
}
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
    <h1> <?php echo $message ?> </h1>
    
</body>

</html>