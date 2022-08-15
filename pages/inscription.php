<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link  rel="stylesheet" href="../css/style.css">
  <title>Inscription</title>
</head>
<body>
  <h1>Inscription</h1>
  <p>
    <a href="../index.php">Home</a>
  </p>
  <form method="post" action="../">
    <table>
      <tr>
        <td>Pseudo</td>
        <td><input type="text" name="pseudo"/></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input type="email" name="email"/></td>
      </tr> 
      <tr>
        <td>Mot de passe</td>
        <td><input type="password" name="password" /></td>
      </tr> 
      <tr>
        <td>Retaper Mot de passe</td>
        <td><input type="password" name="password_confirmation"/></td>
      </tr>
    </table>
    <button type="submit" name="submit">S'inscrire</button>
  </form>
</body>
</html>