<?php
/**
 * Created by PhpStorm.
 * User: Tiago
 * Date: 30/09/2018
 * Time: 14:06
 */

echo "Voce esta logado!"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head></head>
<body>
<a href="#" onclick="signOut();">Sign out</a>

<script>
  function signOut() {
      var auth2 = gapi.auth2.getAuthInstance();
      auth2.signOut().then(function () {
          console.write('User signed out.');
      });
  }
</script>
</body>
</html>
