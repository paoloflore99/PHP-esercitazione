<?php


$moltiplicatore = 2;
    // $moltiplicatore = 2;
function nomeFunzione ($numero1 , $numero2 ,$ciao) {

    //posso usare solo variabbile crate allinteno delle funzioine
    
    return ($numero1 + $numero2) * $ciao;

};

  


//asegnazione
//in questo caso sto asegnado alle variabbili $numero1 e $numero2 i valori 12 e 23

//oppre come per  esempio della variabbile $ciao ho asegno la variabbile 
//$moltiplicatore che era fuori dalla funzione
echo nomeFunzione(12, 23 , $moltiplicatore);

//08 2 includ
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="https://boolean.careers/favicon/favicon.ico">
        <link rel="stylesheet" href="../4php/CSS/style.css"><!--css-->
        <title>php</title>
</head>
<body>

    <h2>Appunti PHP - Funzioni</h2>

    <ul>
        <li>
            <strong>Funzione di Base:</strong>
            <p>Definizione di una funzione e chiamata con argomenti.</p>
            <pre>
                <code>
$moltiplicatore = 2;

function nomeFunzione($numero1, $numero2, $ciao) {
    return ($numero1 + $numero2) * $ciao;
}

echo nomeFunzione(12, 23, $moltiplicatore);
                </code>
            </pre>
        </li>

        <li>
            <strong>Tipi di Dati:</strong>
            <p>Utilizzo di diversi tipi di dati in PHP.</p>
            <pre>
                <code>
$intero = 42;
$stringa = "Ciao, mondo!";
$float = 3.14;
                </code>
            </pre>
        </li>

        <li>
            <strong>Portata delle Variabili:</strong>
            <p>Comprendere la portata delle variabili.</p>
            <pre>
                <code>
$variabile_globale = 10;

function funzione_locale() {
    $variabile_locale = 5;
    echo $variabile_locale;
}

echo $variabile_globale;
                </code>
            </pre>
        </li>

        <li>
            <strong>Altre Funzioni:</strong>
            <p>Utilizzo di altre funzioni predefinite di PHP.</p>
            <pre>
                <code>
$lunghezza_stringa = strlen("Hello, World!");
$maiuscolo = strtoupper("ciao");
$casuale = rand(1, 100);
                </code>
            </pre>
        </li>

        <li>
            <strong>Strutture di Controllo:</strong>
            <p>Utilizzo delle strutture di controllo in PHP.</p>
            <pre>
                <code>
$numero = 15;

if ($numero > 10) {
    echo "Il numero è maggiore di 10";
} else {
    echo "Il numero è 10 o inferiore";
}
                </code>
            </pre>
        </li>
    </ul>

</body>
</html>

