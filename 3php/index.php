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

$parcheggio = $_GET['parcheggio'];



?>


<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="https://boolean.careers/favicon/favicon.ico">
        <link rel="stylesheet" href="./css/style.css"><!--css-->
        <title>Php</title>
</head>
<body>

    <form action="" method="GET" class="d-flex justify-content-center p-5">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate" name="parcheggio">
        <label class="form-check-label" for="flexCheckIndeterminate">
            parcheggio
        </label>
    </form>

    <table class="table container">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">nome</th>
      <th scope="col">descrizione</th>
      <th scope="col">parcheggio</th>
      <th scope="col">distanza_dal_centro</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <?php foreach ($hotels[0] as $hotel[0]) {?>
      <td><?php echo $hotel[0]?></td>
      <?php } ?>
    </tr>
    <tr>
      <th scope="row">2</th>
      <?php foreach ($hotels[1] as $hotel[1]) {?>
      <td><?php echo $hotel[1]?></td>
      <?php } ?>
    </tr>
    <tr>
    <th scope="row">3</th>
    <?php foreach ($hotels[2] as $hotel[2]) {?>
      <td><?php echo $hotel[2]?></td>
      <?php } ?>
    </tr>
    <tr>
    <th scope="row">4</th>
    <?php foreach ($hotels[3] as $hotel[3]) {?>
      <td><?php echo $hotel[3]?></td>
      <?php } ?>
    </tr>
    <tr>
    <th scope="row">5</th>
    <?php foreach ($hotels[4] as $hotel[4]) {?>
      <td><?php echo $hotel[4]?></td>
      <?php } ?>
    </tr>
    <tr>
    <th scope="row">6</th>
    <?php foreach ($hotels[5] as $hotel[5]) {?>
      <td><?php echo $hotel[5]?></td>
      <?php } ?>
    </tr>
  </tbody>
</table>

</body>
</html>