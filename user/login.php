<?php
  session_start();
  include "../funkce.php";
  head();
  echo "<title>Přihlášení uživatele</title>";
  menu();
  sub_php();
?>
    <h1>Přihlášení uživatele</h1>
    <hr /><br />
<?php    
  function formular() {
    ?>
    <form action="user/login.php" method="post">
      <input type="hidden" name="frm" value="frm" />
      <table>
        <tr>
          <td class="hidden" width="140">přihlašovací jméno:<br />
            <input type="text" name="usr_name" class="text_pole" size="15" />
          </td>
        </tr>
        <tr>
          <td class="hidden">heslo:<br />
            <input type="password" name="usr_passw" class="text_pole" size="15" />
          </td>
        </tr>
        <tr>
          <td><input type="submit" value="přihlásit" /></td>
        </tr>
      </table>
    </form>
    <form action="user/registrace.php" method="post">
      <input type="submit" value="registrovat" />
    </form>
    <?php
  }
  //test odeslání formuláře
  $frm=$HTTP_POST_VARS[frm];
  if(!$frm) {
    formular();
    konec();
    exit();
    }
  //ověření uživatelského jména a hesla
  db_connect();
  $usr_name=$HTTP_POST_VARS[usr_name];
  $usr_passw=$HTTP_POST_VARS[usr_passw];
  //$usr_passw=md5($usr_passw);
  $dotaz = "SELECT * FROM klienti WHERE user='$usr_name' AND password='$usr_passw'";
  $result=mysql_query($dotaz,$link);
  $pocet = mysql_num_rows($result);
  if($pocet==1) {
    echo "<p class='nadpis'>Přihlášení proběhlo korektně</p>";
    $login_ok="1";
    session_register("login_ok");
    $_SESSION['login_ok'] = $login_ok;
    }
  else {
    formular();
    echo "<p class='nadpis'>Přihlášení nebylo úspěšné</p>";
    }

  konec();
?>
