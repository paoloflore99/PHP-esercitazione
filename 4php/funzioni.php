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
    <meta charset="UTF-8">
    <title>Appunti PHP</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            max-width: 800px;
            margin: 20px auto;
        }

        h2 {
            color: #333;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            border-bottom: 1px solid #ddd;
            padding: 15px 0;
        }

        code {
            background-color: #f4f4f4;
            padding: 2px 6px;
            border: 1px solid #ddd;
            border-radius: 4px;
            color: #333;
        }
    </style>
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

