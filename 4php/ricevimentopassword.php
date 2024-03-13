<?php
$nome = $_GET["nome"] ?? null;
$cognome = $_GET["cognome"] ?? null;
$password = PasswordGenerara(33);


//sse non ricevo entramni i cambia rimando al form 
if (!$nome || !$cognome) {
    header('Location: eserciziopassword.php');
};


function PasswordGenerara($lunghezza) {

    $simboli = ["!", "@", "#", "$", "%", "^", "&", "(", ")", "_", "-", "=", "+", "?" ];
    $lettereMinuscole = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "l", "m", "n"];
    $lettereMaiuscole = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "L", "M", "N", "O", "P", "Q", "R"];
    $random = [0, 1 , 2, 3 ,4, 5 ,6 ,7 ,8 ,9 ];

    // $numerirandom = rand(0,9);


    $password = ''; 

    for ($i = 0; $i <= $lunghezza; $i++) {
        $sceltaArray = rand(1, 4); 
        switch ($sceltaArray) {
            case 1:
                $password .= $simboli[array_rand($simboli)];
                break;//interrompe il ciclo 
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


// var_dump($password);

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
<nav class=" text-center p-4">
    <h1>invio dati form per la pssword</h1>
</nav>
<div class="">
    <p>ciao <?php echo $nome ?> <?php echo $cognome ?></p>
    <p>la tua password e <strong><?php echo $password ?></strong></p>
    <a href="eserciziopassword.php">Indietro</a>
</div>


<div class=" p-3">
    <h3>come ho fatto a creara un generatore di password</h3>
</div>

<div class="">
        <H2>creazione password automatica</H2>
    </div>


    <div class="">
        <ul>

            <li>
                <strong>Dichiaro la funzione:</strong>
                <p>Allinterno della funzione richiamo le variabbili </p>
                <pre>
                    
<code>function PasswordGenerara($lunghezza) { ...}</code>
    </pre>
                <p>e la variabbile che richiamo e </p>

<code>$password = PasswordGenerara(33);</code>
            </li> 


            <li>
                <strong>variabbili:</strong>
                <p>Creo tre variabbili allintero della funzione : lettere minuscole maiuscole e numeri.</p>
                <pre>
<code>
$simboli = ["!", "@", "#", "$", "%", "^", "&", "(", ")", "_", "-", "=", "+", "?" ];
$lettereMinuscole = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "l", "m", "n"];
$lettereMaiuscole = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "L", "M", "N", "O", "P", "Q", "R"];
$random = [1, 1 , 2, 3 ,4, 5 ,6 ,7 ,8 ,9 ];</code>
                </pre>
            </li>

            
            
            <li>
                <strong>Ciclo for:</strong>
                <p></p>
                <pre>
<code>
for ($i = 0; $i < $lunghezza; $i++) {}</code>
                </pre>

            </li>


            <li>
            <strong>funzione</strong>
            <p>r</p>
            <pre>
<code>
function PasswordGenerara($lunghezza) {...}</code>
            </pre>
        </li>



        <li>
            <strong></strong>
            <p></p>
            <pre>
                <code>
                    
                </code>
            </pre>
        </li>
        </ul>



    </div>


</body>
</html>


<!-- for ($i = 0; $i < $lunghezza; $i++): Questo è un ciclo for che si ripeterà per il numero di volte specificato dalla variabile $lunghezza. In ogni iterazione, il blocco di codice all'interno del ciclo verrà eseguito.

$sceltaArray = rand(1, 4);: Qui viene generato un numero casuale tra 1 e 4 e assegnato alla variabile $sceltaArray. Questo numero verrà utilizzato per determinare quale tipo di carattere verrà aggiunto alla password nella corrente iterazione del ciclo.

switch ($sceltaArray) { ... }: Questo è uno statement switch, che è una forma di controllo di flusso che permette di eseguire diversi blocchi di codice in base al valore di $sceltaArray.

Nei vari case, viene scelto il tipo di carattere da aggiungere alla password in base al valore di $sceltaArray.

case 1: Se $sceltaArray è 1, viene aggiunto un simbolo casualmente scelto dalla lista $simboli.

case 2: Se $sceltaArray è 2, viene aggiunta una lettera minuscola casualmente scelta dalla lista $lettereMinuscole.

case 3: Se $sceltaArray è 3, viene aggiunta una lettera maiuscola casualmente scelta dalla lista $lettereMaiuscole.

case 4: Se $sceltaArray è 4, viene aggiunto un elemento casuale dalla lista $random. Nota che $random è dichiarato come una variabile numerica con rand(0, 10), quindi potrebbe non avere l'effetto desiderato. Potrebbe essere meglio sostituire $random con un array di caratteri casuali.

$password .= ...;: Questo operatore concatenazione (.=) viene utilizzato per aggiungere il carattere scelto alla fine della variabile $password. Ogni iterazione del ciclo aggiunge un nuovo carattere alla password fino a quando la lunghezza specificata da $lunghezza viene raggiunta.

In sintesi, questo blocco di codice genera una password casuale combinando simboli, lettere minuscole, lettere maiuscole e un elemento casuale da $random in base alle scelte casuali definite da $sceltaArray. -->