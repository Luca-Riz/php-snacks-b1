<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 2</title>
</head>
<body>

<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
  
<a href="?name=Luca&mail=luca@mail.it&age=30">Add url data</a>

<?php //prendo i valori dall' url e li assegno a variabili
   $name = $_GET['name'];
   $mail = $_GET['mail'];
   $age = $_GET['age'];

   if (strlen($name) > 3 && //se $name è più lungo di 3 caratteri e
    strpos($mail, '@') != false && //se mail contiene il carattere '@' (quando risponde false non è presente, altrimenti risponde con la posizione)
    strpos($mail, '.') != false && //come sopra ma con il carattere '.'
    is_numeric($age) == true){ //is_numeric trava se una variabile è un nuemro o una stringa numerica, se true = numero, false != numero
      $verifica = 'Accesso riuscito';
    } else {
      $verifica = 'Accesso negato';
    }
    var_dump($name);
    var_dump($mail);
    var_dump($age);
    // var_dump(is_numeric($age));
?>

<div>
  <?php
    echo $verifica;
  ?>
</div>

</body>
</html>