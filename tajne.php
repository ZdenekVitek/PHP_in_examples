<?php
  session_start();
  if(!$_SESSION['login_ok']) {
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: http://www.xhtml-php.php5.cz/user/login.php");
    header("Connection: close");
    }
  include "funkce.php";
  head();
  echo "<title>Heslovaný přístup</title>";
  menu();
  sub_php();
?>
    <h1>Heslovaný přístup</h1>
    <hr />
    <p class="nadpis">Tato stránka se zobrazí jen přihlášenému uživateli</p>
<?php
  konec();
?>
