<?php 
$hotels = [
    [
        "nome" => "hotel esempio1",
        "descrizione" => "hotel esempio1 descrizione",
        "parcheggio" => true,
        "distanza_dal_centro" => 20.3
    ],
    [
        "nome" => "hotel esempio2",
        "descrizione" => "hotel esempio2 descrizione",
        "parcheggio" => false,
        "distanza_dal_centro" => 15.5
    ],
    [
        "nome" => "hotel esempio3",
        "descrizione" => "hotel esempio3 descrizione",
        "parcheggio" => true,
        "distanza_dal_centro" => 12.8
    ],
    [
        "nome" => "hotel esempio4",
        "descrizione" => "hotel esempio4 descrizione",
        "parcheggio" => false,
        "distanza_dal_centro" => 18.2
    ],
    [
        "nome" => "hotel esempio5",
        "descrizione" => "hotel esempio5 descrizione",
        "parcheggio" => true,
        "distanza_dal_centro" => 25.0
    ],
    [
        "nome" => "hotel esempio6",
        "descrizione" => "hotel esempio6 descrizione",
        "parcheggio" => false,
        "distanza_dal_centro" => 22.7
    ],
];

$parcheggio = isset($_GET['parcheggio']) ? $_GET['parcheggio'] : null;



// echo ($hotels[1]["nome"]);
foreach ($hotels as $hotel ) {
    echo  $hotel["nome"];
}



if ($hotels[0]["parcheggio"] != false) {
    var_dump($hotels[0]);
} else {
    echo "non va";
}

// $filtroparcheggio = $_GET["parcheggio"] ?? '';

 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="https://boolean.careers/favicon/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="./css/style.css"><!-- Aggiungi il tuo stile CSS personalizzato -->
    <title>Php</title>
</head>
<body>

    <form action="" method="GET" class="d-flex justify-content-center p-5">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate" name="parcheggio">
            <label class="form-check-label" for="flexCheckIndeterminate">
                Parcheggio
            </label>
        </div>
        <button class="btn btn-primary ms-3">Invio</button>
    </form>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Parcheggio</th>
                    <th scope="col">Distanza dal centro</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hotels as $index => $hotel) : ?>
                    <tr>
                        <th scope="row"><?php echo $index + 1; ?></th>
                        <?php foreach ($hotel as $value) : ?>
                            <td><?php echo $value; ?></td>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>
</html>

<!-- 08 -->