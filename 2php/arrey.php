<?php 

$esempio = [
    "nome" => "paolo" , 
    "cognome" => "flore" ,
    10 => "esempio" 
] ; 

$esempio  ["aggiunto"] = "sono stato aggiunto dopo";


var_dump($esempio);
var_dump($esempio["nome"]);
var_dump($esempio[10]);


$arrey_di_arrey = [
    [
        "1",
        '2'
    ],
    [
        "3",
        "4"
    ]
    ];


var_dump($arrey_di_arrey );

//07set
?>