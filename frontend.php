<!DOCTYPE html>
<html>
    <head>
        <title> Premiere en php</title>
    </head>
    <body>
    <form action="backend.php" method="post">
  <ul>
    <li>
      <label for="name">Nom&nbsp;:</label>
      <input type="text" id="name" name="nom" />
    </li>
    <li>
      <label for="mail">E-mail&nbsp;:</label>
      <input type="email" id="mail" name="mail" />
    </li>
    <li>
      <label for="msg">Message&nbsp;:</label>
      <textarea id="msg" name="user_message"></textarea>
    </li>
    
  </ul>
  <input type="submit" value="Envoyer">
  <input type="reset" value="effacer">
</form>
    </body>
</html>