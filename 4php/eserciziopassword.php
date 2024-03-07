<?php 






?>



<!-- 08 -->
<!-- creare un generato di password che dia numeri lettere maiusche e minuscole in maniare causuale , metto una lunghezza minima  di 15 caratteri , 
pero dovra contere almeno un numero una lettare maiuscola e minuscola obligatori , 
e quando creo la password metto che deve dare la lunghezza , ricordo deve essere minimo di 15 caratteri 
dovra esere fatto tutto tramite un form con metoto GET-->
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
<nav class="container text-center p-4">
    <h1>invio dati form per la pssword</h1>
</nav>


    <form action="ricevimentopassword.php" method="get">
        <div class="container p-4">
            <ul>
                <li>
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome">
                </li>

                <li>
                    <label for="cognome">Cognome</label>
                    <input type="text" name="cognome" id="cognome">
                </li>
            </ul>
        </div>

        <input type="submit" value="Invia">
    </form>

</body>
</html>
