<?php
  include "../funkce.php";
  head();
  echo "<title>Registrace uživatele</title>";
  menu();
  sub_php();
?>
    <h1>Registrace uživatele</h1>
    <hr /><br />
<?php    
  function formular() {
    ?>
    <form action="user/registrace.php" method="post">
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
          <td><input type="submit" value="registrovat" /></td>
        </tr>
      </table>
    </form>
    <form action="user/login.php" method="post">
      <input type="submit" value="přihlásit" />
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
  $usr_name=$HTTP_POST_VARS[usr_name];
  $usr_passw=$HTTP_POST_VARS[usr_passw];
  $usr_passw=md5($usr_passw);
  //ověření uživatelského jména
  db_connect();
  $dotaz = "SELECT * FROM klienti WHERE user='$usr_name'";
  $result=mysql_query($dotaz,$link);
  $pocet = mysql_num_rows($result);
  if($pocet==1) {
    formular();
    echo "<p class='nadpis'>Zadané uživatelské jméno již existuje !!!</p>";
    konec();
    exit();
    }
  else {
    $dotaz = "INSERT INTO klienti(user,password) VALUES('$usr_name','$usr_passw')";
    $result=mysql_query($dotaz,$link);
    echo "<p class='nadpis'>Registrace proběhla v pořádku</p>";
    echo "<form action='user/login.php' method='post'>
      <input type='submit' value='přihlásit' />
    </form>";
    }

  konec();
?>
