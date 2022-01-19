
<?php


$host = 'localhost';
$dbname = 'u812768782_book';
$username = 'u812768782_root';
$password = 'Mayonnaise!198578.';

try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $pe) {
  die("Could not connect to the database");
}



if (
  isset($_POST['nom']) &&
  isset($_POST['prenom']) &&
  isset($_POST['email']) &&
  isset($_POST['telephone']) &&
  isset($_POST['message']) &&
  isset($_POST['accepter'])
) {


  $insertion = $pdo->prepare("INSERT INTO portfolio(nom, prenom, email, telephone,  message, accepter)VALUE(?, ?, ?, ?, ?, ?)");

  $insertion->execute([
    $_POST['nom'],
    $_POST['prenom'],
    $_POST['email'],
    $_POST['telephone'],
    $_POST['message'],
    $_POST['accepter']
  ]);
}
?>
