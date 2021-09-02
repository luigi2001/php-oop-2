
<?php

require_once 'User.php';

$pippo = new User('Pippo','Rossi','pipporossi@gmail.com');
try {
    $pippo->setVerificaCarta('4556209067990827','11/2024');
} catch (Exception $e) {
    echo 'Errore: ' . $e->getMessage();
}

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
    <p><?php echo $pippo->getDati();?></p>
    <p><?php echo $pippo->getVerificaCarta();?></p>
</body>
</html>