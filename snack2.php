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

<?php
   $name = $_GET['name'];
   $mail = $_GET['mail'];
   $age = $_GET['age'];

   if (strlen($name) > 3 && 
    strpos($mail, '@') != false &&
    strpos($mail, '.') != false &&
    is_int($age) != false){
      $verifica = 'Accesso riuscito';
    } else {
      $verifica = 'Accesso negato';
    }
    var_dump($name);
    var_dump($mail);
    var_dump($age);
    var_dump(is_int($age));
?>

<div>
  <?php
    
    echo $verifica;
  ?>
</div>

</body>
</html>