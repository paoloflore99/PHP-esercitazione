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



$spesa = [

    "pane" ,
    "pasta",
    "uova",
    "cereali",
    "carne",
    "pollo",
];
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


var_dump($arrey_di_arrey[1][0]);


$cerca = $_GET['cerca'];
//07set 02 15.00
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

<form action="" method="GET"> 

<input type="text" name="cerca">
<input class="" type="submit"  value="cerca">
</form>
    <ul>
        
        
        <!-- <?php foreach ($esempio as $key => $esempi)  {?>
        <li>
        
        </li>
        <?php } ?> -->
        
        <?php foreach ($spesa as $spesi )  {?>
        <li class="list-group-item <?php echo ($cerca  && str_contains($spesi , $cerca) ? 'text-primary' : "") ?>"> <?php echo $spesi ?> </li> 
        <?php  } ?>
        
        
        
    </ul>



</body>
</html>