<?php
  include "../funkce.php";
  head();
  echo "<title>Novinky e-mailem</title>";
  menu();
  sub_php();
?>
    <h1>Novinky e-mailem</h1>
    <hr />
<?php
  
  $mail_nov=$HTTP_GET_VARS[mail_nov];
  $dbhost="localhost";
  $dbusr="czxhtml-php";
  $dbpassw="passw_xhtml-php";
  $dbname="czxhtml-php";
  //připojení k databázovému serveru
  if(@$link=mysql_pconnect($dbhost,$dbusr,$dbpassw)) 
    echo "<p class='nadpis'>Spojení se serverem bylo úspěšně navázáno.</p>"; 
  else die("<p class='nadpis'>Server nepřipojen !!!</p>");
  //výběr databáze
  if(@$db=mysql_select_db($dbname,$link)) 
    echo "<p class='nadpis'>Databáze byla otevřena</p>"; 
  else die("<p class='nadpis'>Databáze nebyla nalezena !!!</p>");
  //zjištění počtu záznamů
  $dotaz = "SELECT * FROM novinky";
  $result=mysql_query($dotaz,$link);
  $pocet = mysql_num_rows($result);
  echo "<p class='nadpis'>Databáze obsahuje celkem: $pocet záznamů.</p>";
  while($polozka=mysql_fetch_array($result)) echo "$polozka[mail]<br />";
  //zjištění existence zaslané adresy
  $dotaz = "SELECT * FROM novinky WHERE mail='$mail_nov'";
  $result=mysql_query($dotaz,$link);
  $pocet = mysql_num_rows($result);
  if($pocet==1) {
    echo "<p class='nadpis'>Adresa $mail_nov je v databázi";
    $dotaz = "DELETE FROM novinky WHERE mail='$mail_nov'";
    $result=mysql_query($dotaz,$link);
    echo "<p class='nadpis'>e-mailová adresa $mail_nov byla deaktivována</p>";
  }
  else {
    echo "<p class='nadpis'>Adresa $mail_nov není v databázi";
    $dotaz="INSERT INTO novinky VALUE('$mail_nov')";
    $result=mysql_query($dotaz,$link);
    echo "<p class='nadpis'>e-mailová adresa $mail_nov byla aktivována</p>";
  }


  konec();
?>
