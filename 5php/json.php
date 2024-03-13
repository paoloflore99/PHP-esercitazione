<?php 

$esmpio = [
    [
        "nome" => "paolo" ,
        "cognome" => "flore" 
    ],

    [
        "nome" => "andrea" ,
        "cognome" => "ferrari" 
    ]
] ;

//il json serve per trasformare gli arrey in oggetti json
//se voglioo convvertire un arrey in json uso (   json_encode()  )
echo json_encode($esmpio);

// per dare invece un arrey si usa
//se voglioo convvertire un json in arrey uso (   json_decode($json , true) )


//leggo il contenuto del fil in tipologia stringa 
$esempio = file_get_contents("../5php/db/esmpio.json");
var_dump($esempio);



//conveto la stringa(prima covertita da arrey a json ) in arrey , grazie al (   json_decode($json , true) )
$dajsonaarrey = json_decode($esempio , true);
var_dump($dajsonaarrey);


?>

