<?php
//déclaration de la variable age avec sa valeur 50
$age = 5;
if ($age >18)
{
echo "Vous êtes majeur";
}
elseif ($age < 18)
{
echo "Vous êtes mineur";
}
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="assets/css/style.css"/>
  <title>Partie 2 exo 1</title>
</head>

<body>
  <p>Votre âge :
    <?php
    echo $age;
    //j'affiche avec echo le résultat du calcul ave la variable number
    ?>
  </p>

</body>
</html>
