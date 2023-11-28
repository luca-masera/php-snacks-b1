<?php
$nomeUtente = $_GET["nome"];
$emailUtente = $_GET["email"];
$etaUtente = $_GET["eta"];



if (strlen($nomeUtente) >= 3 && is_numeric($etaUtente) && filter_var($emailUtente, FILTER_VALIDATE_EMAIL)) {
    echo "accesso riuscito";
} else {
    echo "accesso negato";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="indexSnack2.php" method="GET">
        <input type="text" name="nome" placeholder="Inserisci il tuo nome">
        <input type="text" name="email" placeholder="Inserisci la tua email">
        <input type="text" name="eta" placeholder="Quanti anni hai?">
        <input type="submit" value="registrati">
    </form>
</body>

</html>