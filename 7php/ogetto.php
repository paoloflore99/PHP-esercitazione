<?php


class Macchina
{
        public $colore;
        public $modello;
        public $costo;

        public function differenza($auto1, $auto2)
        {
                if ($auto1->costo < $auto2->costo) {
                        var_dump($auto1);
                } else {
                        var_dump($auto2);
                }
        }
}



$audi = new Macchina();
$audi->modello = "serie 7";
$audi->colore = "verde";
$audi->costo = 20000;

$mercedes = new Macchina();
$mercedes->modello = "classe a";
$mercedes->colore = "nera";
$mercedes->costo = 24800;

$macchina = new Macchina();
$macchina->differenza($audi, $mercedes);
//la base rimane allinterno della classe macchina
//lasegnazione di oggni valore va fatto fuiri la clsse graziue al ->
//mel casop io nom asegno un valore dichiato allinterno della clsse , il valore sara null
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