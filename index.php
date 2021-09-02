
<?php

require_once 'User.php';
require_once 'Info.php';

$pippo = new User('Pippo','Rossi','pipporossi@gmail.com');
try {
    $pippo->setVerificaCarta('4556209067990821');
} catch (Exception $e) {
    echo 'Errore: ' . $e->getMessage();
}

$avengers = new Info('Avengers','Pippo','2019','11');
$avengers->setSconto();

$avengers2 = new Lista('Avengers2','Pluto','2018','2.99');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop online</title>
</head>
<body>
    <h1>Benvenuto utente:</h1>
    <p><?php echo $pippo->getDati();?></p>
    <p><?php echo $pippo->getVerificaCarta();?></p>
    <h2>catalogo film a noleggio:</h2>
    <p><?php echo $avengers->getInfo();?></p>
    <p><?php echo $avengers->getSconto();?></p>
    <p><?php echo $avengers->trama()?></p>
    <p><?php echo $avengers2->getInfo();?></p>
</body>
</html>