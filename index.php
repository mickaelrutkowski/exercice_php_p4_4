<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PHP</title>
</head>
<body>
  <?php
  // je déclare deux variable random(chiffres aléatoire)
  $op1 = rand(1, 100);
  $op2 = rand(1, 100);
  // je declare une function en lui donnant mes deux varable comme parametre
  function compare($op1, $op2)
  {
    if ($op1 < $op2) //si $op1 et inférieur a $op2
    {
      echo '2 et plus grand que 1';
    }
    else if ($op1 > $op2) //sinon si $op1 et superieur a $op2
    {
      echo '1 plus grand que 2';
    }
    else { //sinon les deux chiffres sont égaux
      echo 'les deux chiffres sont égaux';
    }
  }// j affiche ma variable op1 et op2
  echo compare($op1, $op2);
  ?>
</body>
</html>
