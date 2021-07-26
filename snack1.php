<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
  $partite = [
    [
      'casa' => 'Hawks',
      'ospite' => 'Wizards',
      'puntiCasa' => 120,
      'puntiOspite' => 116,
    ],
    [
      'casa' => 'Nets',
      'ospite' => 'Spurs',
      'puntiCasa' => 128,
      'puntiOspite' => 116,
    ],
    [
      'casa' => 'Cavaliers',
      'ospite' => 'Celtics',
      'puntiCasa' => 102,
      'puntiOspite' => 94,
    ],
    [
      'casa' => 'Lakers',
      'ospite' => 'Rockets',
      'puntiCasa' => 124,
      'puntiOspite' => 122,
    ],
    [
      'casa' => 'Mavericks',
      'ospite' => 'Pelicans',
      'puntiCasa' => 125,
      'puntiOspite' => 107,
    ],
    [
      'casa' => 'Jazz',
      'ospite' => 'Trail Blazers',
      'puntiCasa' => 98,
      'puntiOspite' => 105,
    ]
  ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 1</title>
</head>
<body>

<!-- Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<h2>Giornata 13 maggio 2021 NBA</h2>

<ul>
  <?php for($i = 0; $i < count($partite); $i++) { ?>
    
    <li><?php echo $partite[$i]['casa']?> - <?php echo $partite[$i]['ospite']?> | <?php echo $partite[$i]['puntiCasa']?>-<?php echo $partite[$i]['puntiOspite']?></li> 

  <?php } ?>

  
</ul>

  
</body>
</html>