<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
  <label for="name">Nom:</label>
  <input type="text" id="name" name="name"><br><br>

  <label for="number">Type:</label>
  <input type="number" id="type_id" name="type_id"><br><br>

  <label for="country">Pays:</label>
  <input type="text" id="country" name="country"><br><br>

  <label for="TVA">TVA:</label>
  <input type="text" id="TVA" name="TVA"><br><br>

  <input type="hidden" id="create_date" name="create_date" value="<?php echo date("Y-m-d"); ?>">

  <input type="submit" value="Envoyer">
</form> 

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $number = $_POST['type_id'];
  $country = $_POST['country'];
  $TVA = $_POST['TVA'];
  $create_date = $_POST['create_date'];

  if (!preg_match("/^[a-zA-Z0-9]+$/", $name)) {
    echo "Le nom ne peut contenir que des lettres et des chiffres.<br>";
  } elseif (!preg_match("/^[0-9]+$/", $type_id)) {
    echo "Le nombre ne peut contenir que des chiffres.<br>";
  } elseif (!preg_match("/^[a-zA-Z]+$/", $country)) {
    echo "Le pays ne peut contenir que des lettres.<br>";
  } elseif (!preg_match("/^[a-zA-Z]{2}[0-9]+$/", $TVA)) {
    echo "La TVA doit commencer par 2 lettres, suivies de chiffres.<br>";
  } else {
    // Sanitization des données du formulaire
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $number = filter_var($number, FILTER_SANITIZE_NUMBER_INT);
    $country = filter_var($country, FILTER_SANITIZE_STRING);
    $TVA = filter_var($TVA, FILTER_SANITIZE_STRING);
    $create_date = filter_var($create_date, FILTER_SANITIZE_STRING);

    // Traitement des données du formulaire (par exemple, enregistrement dans une base de données)
  }
}
?>

    
</body>
</html>