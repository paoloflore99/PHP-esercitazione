<?php
$nome = $_GET["nome"];
$cognome = $_GET["cognome"];
$password = PasswordGenerara(33);




function PasswordGenerara($lunghezza) {

    $simboli = ["!", "@", "#", "$", "%", "^", "&", "(", ")", "_", "-", "=", "+", "?" ];
    $lettereMinuscole = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "l", "m", "n"];
    $lettereMaiuscole = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "L", "M", "N", "O", "P", "Q", "R"];
    $random = [1, 1 , 2, 3 ,4, 5 ,6 ,7 ,8 ,9 ];

    // $numerirandom = rand(0,9);


    $password = ''; 

    for ($i = 0; $i < $lunghezza; $i++) {
        $sceltaArray = rand(1, 4); 
        switch ($sceltaArray) {
            case 1:
                $password .= $simboli[array_rand($simboli)];
                break;
            case 2:
                $password .= $lettereMinuscole[array_rand($lettereMinuscole)];
                break;
            case 3:
                $password .= $lettereMaiuscole[array_rand($lettereMaiuscole)];
                break;
            case 4:
                $password .= $random[array_rand( $random)];
                break;
        }
    }

    return $password;
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="https://boolean.careers/favicon/favicon.ico">
        <!-- <link rel="stylesheet" href="css/style.css">css -->
        <title>php</title>
</head>
<body>
<nav class="container text-center p-4">
    <h1>invio dati form per la pssword</h1>
</nav>
<div class="container">
    <p>ciao <?php echo $nome ?> <?php echo $cognome ?></p>
    <p>la tua password e <strong><?php echo $password ?></strong></p>
</div>


<div class="container p-3">
    <h3>come ho fatto a creara un generatore di password</h3>
</div>



</body>
</html>
