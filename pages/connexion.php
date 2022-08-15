<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link  rel="stylesheet" href="../css/style.css">
  <title>Connexion</title>
</head>
<body>
  <p>
    <a href="../index.php">Home</a>
  </p>
  <form method="post" action="../" id="myForm">
    <table>
      <tr>
        <td>Email</td>
        <td><input type="email" name="email"/></td>
      </tr> 
      <tr>
        <td>Mot de passe</td>
        <td><input type="password" name="password" /></td>
      </tr> 
    </table>
    <button type="submit" name="submit">Se Connecter</button>
  </form>
</body>
</html>