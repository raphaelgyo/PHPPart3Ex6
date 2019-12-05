<?php
  $departments = array(
    '02' => 'Aisne',
    '59' => 'Nord',
    '60' => 'Oise',
    '62' => 'Pas-de-calais',
    '80' => 'Somme');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 3 Exercice 6 : Les tableaux</title>
  </head>
  <body>
    <?php
      foreach($departments as $index => $value){ ?>
      <p>Le département <?php echo $value; ?> a le numéro <?php echo $index; ?></p>
    <?php }; ?>
  </body>
</html>
