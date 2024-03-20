<?php 
// Dove si trova fisicamente il database 
define("DB_LOCALHOST" , "localhost");

// La porta di MySQL
define("DB_PORT" , 3306);

// Nome del database su MySQL
define("DB_NAME" , "classe_201");

// Dati di accesso 
define("DB_MAIL" , "root");
define("DB_PASSWORD" , "root");

// Creare un'istanza di connessione 
//devo seguire lordine che mi inpone mysqli()
$connessione = new mysqli(DB_LOCALHOST, DB_MAIL, DB_PASSWORD, DB_NAME, DB_PORT);

// Verificare se la connessione è stata stabilita correttamente
if ($connessione->connect_error) {
    echo "Connessione non riuscita: " . $connessione->connect_error ;
    die();
} else {
    echo "Connessione riuscita!";
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
        <link rel="stylesheet" href="../4php/CSS/style.css"><!--css-->
        <title>php</title>
</head>
<body>

</body>
</html>
