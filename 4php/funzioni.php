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
</head>
<body>

    <h2>Appunti PHP - Funzioni</h2>

    <ul>
        <li>
            <strong>Funzione di Base:</strong>
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
            <p>Conoscere i tipi di dati in PHP (int, string, float, ecc.)</p>
        </li>

        <li>
            <strong>Portata delle Variabili:</strong>
            <p>Comprendere la portata delle variabili (globale, locale, statica).</p>
        </li>

        <li>
            <strong>Altre Funzioni:</strong>
            <p>Esplorare più funzioni predefinite di PHP.</p>
        </li>

        <li>
            <strong>Strutture di Controllo:</strong>
            <p>Studiare le strutture di controllo come if, else, switch, e cicli come for e while.</p>
        </li>
    </ul>

</body>
</html>

